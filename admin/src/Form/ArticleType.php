<?php

namespace App\Form;

use App\Entity\Article;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, array('label' => 'Гарчиг'))
            ->add('bodys',CKEditorType::class, array(
                'label' => 'Үндсэн хэсэг',
                'config' => array(
//                    'filebrowserBrowseRoute'           => 'article',
//                    'filebrowserBrowseRouteParameters' => array('slug' => 'my-slug'),
//                    'filebrowserBrowseRouteType'       => UrlGeneratorInterface::ABSOLUTE_URL,
                    'filebrowserBrowseUrl'           => $_SERVER['DOCUMENT_ROOT']."/../vendor/ckfinder/ckfinder-symfony-bundle/Resources/public/ckfinder/ckfinder.html",
                    'filebrowserImageBrowseUrl' => $_SERVER['DOCUMENT_ROOT']."/../vendor/ckfinder/ckfinder-symfony-bundle/Resources/public/ckfinder/ckfinder.html?Type=Images",
                    'filebrowserFlashBrowseUrl' => $_SERVER['DOCUMENT_ROOT']."/../vendor/ckfinder/ckfinder-symfony-bundle/Resources/public/ckfinder/ckfinder.html?Type=Flash",
                    'filebrowserUploadUrl'       => $_SERVER['DOCUMENT_ROOT']."/upload",
                    'filebrowserImageUploadUrl'  => $_SERVER['DOCUMENT_ROOT']."/upload",
//{#                filebrowserBrowseUrl: 'http://localhost:9001/vendor/ckfinder/ckfinder-symfony-bundle/Resources/public/ckfinder/ckfinder.html',#}
//{#                filebrowserImageBrowseUrl: 'http://localhost:9001/vendor/ckfinder/ckfinder-symfony-bundle/Resources/public/ckfinder/ckfinder.html?Type=Images',#}
//{#                filebrowserFlashBrowseUrl: 'http://localhost:9001/vendor/ckfinder/ckfinder-symfony-bundle/Resources/public/ckfinder/ckfinder.html?Type=Flash',#}
//{#                filebrowserUploadUrl: 'http://localhost:9001/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',#}
//{#                filebrowserImageUploadUrl: 'http://localhost:9001/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',#}
//{#                filebrowserFlashUploadUrl: 'http://localhost:9001/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',#}
                )
            ))
            ->add('picture', FileType::class,array(
                'label' => 'Зураг',
                'data_class' => null,
                'required' => false,
                'empty_data' => ''
            ))
            ->add('types',ChoiceType::class, [
                'choices' => [
                    'Онцгой' => 1,
                    'Энгийн' => 0,
                ],
                'multiple' => false,
                'label' => 'Төрөл'])
            ->add('status',ChoiceType::class, [
                'choices' => [
                    'Тийм' => 1,
                    'Үгүй' => 0,
                ],
                'multiple' => false,
                'label' => 'Хэрэглэгчдэд харагдах эсэх'])
//            ->add('views')
            ->add('date', DateType::class,[
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('comments',TextType::class, array('label' => 'Товч тайлбар'))
            ->add('sort',NumberType::class, array('label' => 'Эрэмбэ'))
//            ->add('who')
//            ->add('createdDate')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
