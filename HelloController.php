<?php

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
class HelloController extends ControllerBase {

   
public function content() {
  // $entity = \Drupal::entityTypeManager()->getStorage($entity_type)->load($id);
  //  $query = \Drupal::entityQuery('node');
  //  $query->condition('type', 'news_channel');
  // $query->condition('status', 1);
  //  $nids = $query->execute();
  // print_r($nids); die($nids);
  
  


return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello World Its me Santosh!
                              i am trying To Learn Basic Drupal'),
    ];
  }

}
?>
