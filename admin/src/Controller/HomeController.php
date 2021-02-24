<?php


namespace App\Controller;


use App\Entity\Content;
use App\Entity\Maingroup;
use App\Form\MainType;
use App\Form\Type\TestFrom;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class HomeController extends AbstractController
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
     * @Route("/", name="index")
     *
      * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') or is_granted('ROLE_SUPER_ADMIN')")
     */
    public function index(){

        $uId= $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT m FROM App\Entity\Module m INNER JOIN App\Entity\UserPermission p WITH p.moduleId=m.id WHERE p.userId =:id and p.status=1";
        $query = $em->createQuery($dql);
        $query->setParameter('id', $uId);
        $per = $query->getResult();
        $dql = "SELECT m FROM App\Entity\Module m  WHERE m.subMenuId !=0";
        $query = $em->createQuery($dql);
        $sub = $query->getResult();
        return $this->render('menu.html.twig',[
            'per'=>$per,
            'sub'=>$sub
        ]);
    }


    /**
     * @Route("/index", name="index")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') or is_granted('ROLE_SUPER_ADMIN')")
     */
    public function dashboard()
    {
        return $this->render('index.html.twig');

    }

    /**
     * @Route("/test", name="test", methods={"GET","POST"})
     */
    public function test(Request $request)
    {
        $file = $request->files->get('image');
        $image = $this->upload($file );
        if($image != null){
            $this -> addFlash('success', "Чи чадлаа $image");
        }else{
            $this -> addFlash('error', "Үгүй ээээээээ $image");
        }
        return $this -> redirectToRoute('index');
    }


}