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

     /**
     * Get the value of id
     *
     * @return  integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  integer  $id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

}