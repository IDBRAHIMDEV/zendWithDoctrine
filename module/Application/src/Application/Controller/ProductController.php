<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class ProductController extends AbstractRestfulController {

    private $db;

    public function getList() {
        $products = $this->getDb()->fetchAll(new Product);
        
        $myProducts = [];
        foreach($products as $product) {
            array_push($myProducts, $product->getArrayCopy());
        }
        return new JsonModel($myProducts);
    }

    public function get($id) {}

    public function create($data) {}

    public function update($id, $data) {}

    public function delete($id) {}

        private function getDb()
        {
            if(!$this->db) {
                $this->db = $this->getServiceLocator()->get('Application\Model\Db');
            }
            return $this->db;
        }
    

}