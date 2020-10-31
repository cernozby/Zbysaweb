<?php
  class supplierModel extends baseModel {
    public function __construct(\Nette\Database\Context $database, \Nette\DI\Container $container, \Nette\Bridges\ApplicationLatte\ILatteFactory $lf) {
      $this->table = 'supplier';
      $this->id = 1;
      parent::__construct($database, $container, $lf);
    }

    public function getDateIntoPdf() {
      $result = $this->getRow();
      return $this->addKeyPrefix($result, 'supplier_');
    }
  }

