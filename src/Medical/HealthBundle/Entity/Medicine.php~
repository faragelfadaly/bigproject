<?php

namespace Medical\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Medical\HealthBundle\Entity\MedicineRepository")
 */
class Medicine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_tablets", type="integer")
     */
    private $no_tablets;


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
     * Set name
     *
     * @param string $name
     * @return Medicine
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set no_tablets
     *
     * @param integer $noTablets
     * @return Medicine
     */
    public function setNoTablets($noTablets)
    {
        $this->no_tablets = $noTablets;
    
        return $this;
    }

    /**
     * Get no_tablets
     *
     * @return integer 
     */
    public function getNoTablets()
    {
        return $this->no_tablets;
    }
}