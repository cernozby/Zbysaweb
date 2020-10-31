<?php


use Nette\Bridges\ApplicationLatte\ILatteFactory;

/**
 * Class baseModel
 */
class baseModel {
  use Nette\SmartObject;


  /**
   * @var
   */
  public $data;
  /**
   * @var
   */
  public $id;
  /**
   * @var
   */
  public $table;

  /** @var Nette\Database\Context @inject */
  public $db;


  /**
   *
   * @var Nette\DI\Container
   */
  public $container;

    /**
     * @var ILatteFactory
     */
    public $lf;

  /**
   * BaseModel constructor.
   * @param \Nette\Database\Context $database
   * @param \Nette\DI\Container $container
   */
  public function __construct(\Nette\Database\Context $database, Nette\DI\Container $container, ILatteFactory $lf) {
    $this->db = $database;
    $this->container = $container;
    $this->lf = $lf;
  }
  /**
   * @param $values
   * @throws Exception
   */
  public function insert($values){
    return $this->db->table($this->table)->insert($values);
  }

  /**
   * @param $values
   * @throws Exception
   */
  public function update($values){
    $this->db->table($this->table)->get($this->id)->update($values);
  }

    /**
     *
     */
    public function delete(){
    $this->db->table($this->table)->get($this->id)->delete();
  }

    /**
     * @return array
     */
    public function getRow() {
    $this->data = $this->db->table($this->table)->get($this->id);
    $this->data = $this->data ? $this->data->toArray() : null;
    return $this->data;
    }

    public function get($colum) {
      return $this->getRow()[$colum];
    }

    public function getRowByValue($selector, $value) {
        $this->data = $this->db->table($this->table)->select('*')->where($selector.' = ?', $value)->fetch();
        $this->data = $this->data ? $this->data->toArray() : $this->data;
        return $this->data;
    }



    /**
     * @return \Nette\Database\Table\Selection
     */
  public function getTable() {
    return $this->db->table($this->table)->select('*');
  }

    /**
     * @param $id
     */
    public function initId($id){
    $this->id = $id;
  }

    /**
     * @param $array
     * @param $prefix
     * @return array
     */
    public function addKeyPrefix($array, $prefix) {
    $result = null;
    foreach ($array as $key => $item) {
      $result[$prefix.$key] = $item;
    }
    return $result;
  }

    /**
     * @return null
     */
    public function getId() {
    return $this->id = $this->id ? $this->id : null ;
  }

    /**
     * @return mixed
     */
    public function getData() {
    return $this->data;
  }


  public function getColumnNames() {
    $result =  $this->db->query('SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N\''.$this->table.'\'')->fetchAll();
    $names = array();
    foreach ($result as $r) {
      $names[] = $r->COLUMN_NAME;
    }
    return $names;
  }

  public function getInputDatetime($timestamp) {
    return date("Y-m-d\T:H:i", $timestamp);

  }
}
