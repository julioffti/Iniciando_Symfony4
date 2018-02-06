<?php

namespace App\Form;

use App\Entity\ProdutoTipo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProdutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, [
                'label' => "Nome",
                'attr' => [
                    'class' => 'form-control'
                 ]
               ])
            ->add('preco', TextType::class, [
                'label' => "Preço",
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('descricao', TextareaType::class, [
                'label' => "Descrição",
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('enviar', SubmitType::class,
                ['label' => "Salvar",
                  'attr' => [
                      'class' => 'btn btn-primary'
                  ]
                ])
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => ProdutoTipo::class,
        ]);
    }
}
