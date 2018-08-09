<?php
namespace Application\Model\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package Application\Model\Entity
 * @ORM\Table(name="Product")
 * @ORM\Entity
 */
class Product extends AbstractEntity
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

     /**
     * @var string
     * 
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    protected $name;

    /**
     * @var string
     * 
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    protected $description;


    public function __construct($data = null) {
        if(!is_null($data)) {
            $this->exchangeArray($data);
        }
    }

}