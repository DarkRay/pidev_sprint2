<?php

namespace sprint2\RealEstate\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of AjouCForm
 * @author FATHALLAH Wael
 */
class AjoutAForm extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder,array $options){
        $builder->add('nom')->add('prenom')->add('mail')->add('motDePasse')->add( 
            'privilege', 'integer', array(
            'attr' => array('min'=>1,'max'=>7)))->add('Ajouter' , 'submit');
        
    }
    public function getName() {
        return 'AName';
        
    }
    
}
