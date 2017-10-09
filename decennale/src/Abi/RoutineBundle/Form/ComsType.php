<?php

namespace Abi\RoutineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ComsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
	 
         ->add('commentCivilite','choice',array(
                    'choices' => array(
                        'Mr' => 'Mr',
                        'Mme' => 'Mme',
                    )))
         ->add('commentPrenom')
         ->add('commentNom')
	  ->add('commentEmail')
         ->add('commentText','textarea')
->add('commentNote','choice',array(
                    'choices' => array(
                        1 => 1,
                        2=> 2,
3=> 3,
4=> 4,
5=> 5,
                    )));
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Abi\RoutineBundle\Entity\AbsCommentaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'DevisDecennaleBundle_afficherComs';
    }
}
