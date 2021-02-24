<?php

namespace App\Controller;

use App\Entity\Interview;
use App\Form\InterviewType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/interview")
 */
class InterviewController extends AbstractController
{
    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function upload(UploadedFile $file)
    {
        $uploadFolder = 'upload';
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
        try {
            $file->move($uploadFolder, $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }
//
        return $fileName;
//        return new Response('"$safeFilename"');
    }
    /**
     * @Route("/", name="interview_index", methods={"GET"})
     */
    public function index(): Response
    {
        $interviews = $this->getDoctrine()
            ->getRepository(Interview::class)
            ->findAll();

        return $this->render('interview/index.html.twig', [
            'interviews' => $interviews,
        ]);
    }

    /**
     * @Route("/new", name="interview_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $interview = new Interview();
        $interview->setWho($uId= $this->getUser()->getId());
        $interview->setViews(0);
        $interview->setCreatedDate(new \DateTime('now', new \DateTimeZone('Asia/Ulaanbaatar')));
        $form = $this->createForm(InterviewType::class, $interview);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();
            if($file){
                $image = $this->upload($file);
                $interview -> setPicture($image);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($interview);
            $entityManager->flush();
            $this->addFlash('success', "Мэдээлэл амжилттай нэмэгдлээ");
            return $this->redirectToRoute('interview_index');
        }

        return $this->render('interview/new.html.twig', [
            'interview' => $interview,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="interview_show", methods={"GET"})
     */
    public function show(Interview $interview): Response
    {
        return $this->render('interview/show.html.twig', [
            'interview' => $interview,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="interview_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Interview $interview): Response
    {
        $form = $this->createForm(InterviewType::class, $interview);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $c = $_POST["cpic"];
//            echo $c;
//            exit;
            if($c==1) {
//                echo "AAAAAAAAAAA";
//                exit;
                $file = $form->get('picture')->getData();
                if ($file) {
                    $image = $this->upload($file);
                    $interview->setPicture($image);
                }
            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', "Мэдээлэл амжилттай шинэчлэгдлээ");
            return $this->redirectToRoute('interview_index');
        }

        return $this->render('interview/edit.html.twig', [
            'interview' => $interview,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="interview_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Interview $interview): Response
    {
        if ($this->isCsrfTokenValid('delete'.$interview->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($interview);
            $entityManager->flush();
        }

        return $this->redirectToRoute('interview_index');
    }
}
