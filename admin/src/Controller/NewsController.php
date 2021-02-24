<?php

namespace App\Controller;

use App\Entity\News;
use App\Form\NewsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/news")
 */
class NewsController extends AbstractController
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
     * @Route("/", name="news_index", methods={"GET"})
     */
    public function index(): Response
    {
        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findAll();

        return $this->render('news/index.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/new", name="news_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $news = new News();
		$news->setWho($uId= $this->getUser()->getId());
		$news->setViews(0);
		$news->setCreatedDate(new \DateTime('now', new \DateTimeZone('Asia/Ulaanbaatar')));
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$file = $form->get('picture')->getData();
			if($file){
				$image = $this->upload($file);
				$news -> setPicture($image);
			}
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();
			$this->addFlash('success', "Мэдээлэл амжилттай нэмэгдлээ");
            return $this->redirectToRoute('news_index');
        }

        return $this->render('news/new.html.twig', [
            'news' => $news,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="news_show", methods={"GET"})
     */
    public function show(News $news): Response
    {
        return $this->render('news/show.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="news_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, News $news): Response
    {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('news_index');
        }

        return $this->render('news/edit.html.twig', [
            'news' => $news,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="news_delete", methods={"DELETE"})
     */
    public function delete(Request $request, News $news): Response
    {
        if ($this->isCsrfTokenValid('delete'.$news->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($news);
            $entityManager->flush();
        }

        return $this->redirectToRoute('news_index');
    }
}
