<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
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
     * @Route("/", name="article_index", methods={"GET"})
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/new", name="article_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $article = new Article();
        $article->setWho($uId= $this->getUser()->getId());
        $article->setViews(0);
        $article->setCreatedDate(new \DateTime('now', new \DateTimeZone('Asia/Ulaanbaatar')));
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();
            if($file){
                $image = $this->upload($file);
                $article -> setPicture($image);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            $this->addFlash('success', "Мэдээлэл амжилттай нэмэгдлээ");
            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article): Response
    {

        $form = $this->createForm(ArticleType::class, $article);
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
                    $article->setPicture($image);
                }
            }
//            else{
//                echo $id = $article->getId();
//                $articles = $this->getDoctrine()
//                    ->getRepository(Article::class)
//                    ->find(3);
//                var_dump($articles->getPicture());
//                exit;
//                $pic = $article->getPicture();
//                $article->setPicture($pic);
//            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', "Мэдээлэл амжилттай шинэчлэгдлээ");
            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('article_index');
    }






}
