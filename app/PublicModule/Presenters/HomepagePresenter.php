<?php

namespace App\publicModule\Presenters;

use Mpdf\Mpdf;
use Nette\Application\UI\Form;
use Nette\Utils\Image;

class HomepagePresenter extends \BasePresenter {
  
  public function createComponentLoginForm() {
    $form = new Form();
    $form->addEmail('email')
         ->setRequired('email: ' . \Constants::FORM_MSG_REQUIRED)
         ->addRule(FORM::EMAIL, \Constants::FORM_VALID_EMAIL)
         ->setHtmlAttribute('placeholder', 'email');
    $form->addPassword('passwd')
         ->setRequired('heslo: ' . \Constants::FORM_MSG_REQUIRED)
         ->addRule(FORM::MIN_LENGTH, \Constants::FORM_SHORT_PASSWD, 5)
         ->addRule(FORM::MAX_LENGTH, \Constants::FORM_LONG_PASSWD, 30)
         ->setHtmlAttribute('placeholder', 'Heslo');
    $form->addSubmit('login', 'Přihlásít');
    $form->onSuccess[] = [$this, 'LoginFormSucceeded'];
    return $form;
  }

  public function LoginFormSucceeded($form, $values) {
    try {
      $this->getUser()
           ->login($values->email, $values->passwd);
      $this->flashMessage('Byl jste úspěšně přihlášen.');
      $this->redirect(':facture:Homepage:default');
    } catch (\Nette\Security\AuthenticationException $e) {
      $this->flashMessage($e->getMessage());
    }
  }

  public function actionOut() {
    $this->getUser()
         ->logout();
    $this->flashMessage('Byl jste odhlášen.');
    $this->redirect('Homepage:default');
  }
}
