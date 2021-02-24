<?php

namespace App\Controller;

use App\Entity\BackImage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class OtherController extends AbstractController
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
     * @Route("/backImage", name="backImage")
     */
    public function index(): Response
    {
		$image = $this->getDoctrine()
			->getRepository(BackImage::class)
			->findAll();
        return $this->render('other/backImage.html.twig', [
			'images' => $image,
        ]);
    }

	/**
	 * @Route("/backImage_new", name="backImage_new")
	 */
	public function new(Request $request): Response
	{
		return $this->render('other/backImageNew.html.twig');
	}

	/**
	 * @Route("/backImage_insert", name="backImage_insert")
	 */
	public function insert(Request $request): Response
	{
//		if (isset($_POST['save'])) {
			$em = $this->getDoctrine()->getManager();
			$uId = $this->getUser()->getId();
			$status = $_POST["status"];
			$file = $request->files->get('image');


			$gh = new BackImage();
			if($file){
				$image = $this->upload($file);
				$gh->setImage($image);
			}
			$gh->setStatus($status);
			$gh->setWho($uId);
			$gh->setCreatedDate(new \DateTime('now', new \DateTimeZone('Asia/Ulaanbaatar')));

			$em->persist($gh);
			$em->flush();

			$this->addFlash('success', 'Мэдээлэл амжилттай хадгалагдлаа');
			return $this->redirectToRoute('backImage');

//		}
	}

	/**
	 * @Route("/backImage_edit", name="backImage_edit")
	 */
	public function edit(Request $request): Response
	{
//		if (isset($_POST['editButton'])) {
			$id = $_POST["id"];
			$em = $this->getDoctrine()->getManager();
			$back = $em->getRepository(BackImage::class)->find($id);
//			$back = new BackImage();
			if (!$back) {
				throw $this->createNotFoundException(
					'Ийм контент байхгүй байна' . $id
				);
			}
			$status = $_POST["status"];
			$uId = $this->getUser()->getId();
			if ($_POST["cpic"] == 1) {
				$file = $request->files->get('image');

				if($file) {
					$image = $this->upload($file);
					$back->setImage($image);
				}
			}
			$back->setWho($uId);
			$back->setStatus($status);
			$back->setCreatedDate(new \DateTime('now', new \DateTimeZone('Asia/Ulaanbaatar')));
			$em->flush();
			$this->addFlash('success', "Мэдээлэл амжилттай шинэчлэгдлээ");
			return $this->redirectToRoute('backImage');
//		}
	}

	/**
	 * @Route("/backImage_delete", name="backImage_delete")
	 */
	public function delete(): Response
	{
//		if (isset($_POST['delete'])) {
			$id = $_POST["id"];
			$em = $this->getDoctrine()->getManager();
			$content = $em->getRepository(BackImage::class)->find($id);
			if (!$content) {
				throw $this->createNotFoundException(
					'Ийм контент байхгүй байна' . $id
				);
			}
			$em->remove($content);
			$em->flush();
			$this->addFlash('success', "Мэдээлэл амжилттай устгагдлаа");
			return $this->redirectToRoute('backImage');
//		}else{
//			$this->addFlash('error', "Алдаатай хүсэлт байна");
//			return $this->redirectToRoute('backImage');
//		}
	}

}
