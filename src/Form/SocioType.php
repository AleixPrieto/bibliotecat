<?php

namespace App\Form;

use App\Entity\Socios;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            
            ->add('password', PasswordType::class)
            ->add('dni')
            ->add('nombre')
            ->add('apellidos')
            ->add('nacimiento')
            ->add('direccion')
            ->add('poblacion')
            ->add('cp')
            ->add('provincia')
            ->add('telefono')
            //->add('alta', 'DateTime', array('widget'=>'single_text','format' => 'dd/MM/yyyy'))
            ->add('Registrar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Socios::class,
        ]);
    }
}
