<?php

use Nette\Bridges\ApplicationLatte\ILatteFactory;

abstract class BasePresenter extends Nette\Application\UI\Presenter {

  public $data;

  public $supplierModel;
  public $customerModel;
  public $pdfModel;
  public $factureModel;

  public function startup() {

    $this->supplierModel = $this->context->createInstance('supplierModel');
    $this->customerModel = $this->context->createInstance('customerModel');
    $this->pdfModel = $this->context->createInstance('pdfModel');
    $this->factureModel = $this->context->createInstance('factureModel');
    parent::startup();
  }

  public function handleDeleteItem($type, $id) {

    try {
      $instance = $this->context->createInstance($type);
      $instance->initId($id);
      $instance->delete();
    } catch (Exception $e) {
      $this->flashMessage('Něco se pokazilo. Zkuste obnovit stránku', 'danger');
    }
    $this->flashMessage('Úspěšně smazáno', 'success');
    $this->redirect('this');
  }
}
