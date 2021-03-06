<?php 
namespace AppBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;  

/** 
   * @ORM\Entity 
   * @ORM\Table(name = "Books") 
*/  
class Book { 
   /** 
      * @ORM\Column(type = "integer") 
      * @ORM\Id 
      * @ORM\GeneratedValue(strategy = "AUTO") 
   */ 
   private $id;  
   
   /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
   private $race;  
   /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
      
   private $nourriture;
    
   /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
      
   private $famille;
   /** 
      * @ORM\Column(type = "decimal", scale = 2) 
   */ 
   private $age; 

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Book
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get Race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Book
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return Book
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set nourriture
     *
     * @param string $nourriture
     *
     * @return Book
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;

        return $this;
    }

    /**
     * Get nourriture
     *
     * @return string
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }
}
