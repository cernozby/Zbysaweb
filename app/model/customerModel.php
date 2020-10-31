<?php
class customerModel extends baseModel {
  public function __construct(\Nette\Database\Context $database, \Nette\DI\Container $container, \Nette\Bridges\ApplicationLatte\ILatteFactory $lf) {
    $this->table = 'customer';
    parent::__construct($database, $container, $lf);
  }

  public function getIntoSelectBox() {
    $array = $this->getTable();
    $result = array();

    foreach ($array as $item) {
      $result[$item->id_customer] = $item->name;
    }

    return $result;
  }
}

