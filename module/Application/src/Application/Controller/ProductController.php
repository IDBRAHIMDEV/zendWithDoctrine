<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

use Application\Model\Entity\Product;

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

    public function get($id) {

        $product = new Product(['id' => $id]);
        $myProduct = $this->getDb()->fetch($product);

        return new JsonModel($myProduct->getArrayCopy());
    }

    public function create($data) {
        $product = new Product($data);
        $this->getDb()->save($product);
        return new JsonModel($product->getArrayCopy());
    }

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