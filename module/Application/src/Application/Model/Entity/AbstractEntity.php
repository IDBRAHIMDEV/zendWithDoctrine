<?php


namespace Application\Model\Entity;


abstract class AbstractEntity
{
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

    public function get_json_array() {
        return get_object_vars($this);
    }

    public function exchangeArray(array $options) {

        $methods = get_class_methods($this);

        foreach($options as $key => $values) {
            $method = $this->getSetterMethod($key);

            if(in_array($method, $methods)) {
                $this->$method($values);
            }
        }
      return $this;
    }

    public function getSetterMethod($propertyName) {
        return "set" . str_replace(' ', '', ucwords(str_replace('_', ' ', $propertyName)));
    }

}