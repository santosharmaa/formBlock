<?php


namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;



// Provides a 'hello_world' block.
 
//   @Block(
//     id = "Custome_Form_Block",
//      admin_label = @Translation("Custome Form Block"),
//     category = @Translation("Custome Form Block")
//     ) 
//     
 
 

class CustomeFormBlock extends BlockBase {

  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\Custome\Form\Customeform');

    return $form;
   }
}
