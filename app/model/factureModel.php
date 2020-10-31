<?php

/**
 * Class factureModel
 */
class factureModel extends baseModel {

  const TYPE = array(
    'pay'     => 1,
    'unpay'   => 2,
    'all'     => 3,
    'unsend'  => 4
  );

    public $customerModel;
    /**
     * factureModel constructor.
     * @param \Nette\Database\Context $database
     * @param \Nette\DI\Container $container
     * @param \Nette\Bridges\ApplicationLatte\ILatteFactory $lf
     */
    public function __construct(\Nette\Database\Context $database, \Nette\DI\Container $container, \Nette\Bridges\ApplicationLatte\ILatteFactory $lf) {
        parent::__construct($database, $container, $lf);
        $this->table = 'facture';
        $this->customerModel = $this->container->createInstance('customerModel');

    }

    public function getCustomer() {
        $this->customerModel->initId($this->getRowByValue('id_facture',$this->id)['customer_id']);
        return $this->customerModel;
    }

    public function getFactureForRender($type = 'all') {
      $result = $this->db->table($this->table);

      switch (self::TYPE[$type]) {

        case 1:
          $result->where('state = ?', 'pay');
          break;
        case 2:
          $result->where('state = ?', 'download');
          break;
        case 3:
          break;
        case 4:
          $result->where('state = ?', 'created');
          break;
      }
      return $result->order('initDate DESC')->fetchAll();
    }

}

