<?php
namespace Drupal\hello_world\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class Customeform extends FormBase {

  public function getFormId() {
    return 'Custome_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name:'),
      '#required' => TRUE,
    );

    $form['mail'] = array(
      '#type' => 'email',
      '#title' => t('Email ID:'),
      '#required' => TRUE,
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    );
    return $form;
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {

    drupal_set_message($this->t('@name ,Your application is being submitted!', array('@name' => $form_state->getValue('name'))));

  }
}
