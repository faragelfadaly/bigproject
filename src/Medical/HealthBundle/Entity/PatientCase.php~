<?php

namespace Medical\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PatientCase
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Medical\HealthBundle\Entity\PatientCaseRepository")
 */
class PatientCase {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *          
     * @ORM\OneToOne(targetEntity="Patient")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id") 
     */
    private $patient;

    /**
     *
     * @ORM\OneToOne(targetEntity="Disease")
     * @ORM\JoinColumn(name="disease_id", referencedColumnName="id")
     */
    private $disease;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set patient
     *
     * @param \Medical\HealthBundle\Entity\Patient $patient
     * @return PatientCase
     */
    public function setPatient(\Medical\HealthBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;
    
        return $this;
    }

    /**
     * Get patient
     *
     * @return \Medical\HealthBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set disease
     *
     * @param \Medical\HealthBundle\Entity\Disease $disease
     * @return PatientCase
     */
    public function setDisease(\Medical\HealthBundle\Entity\Disease $disease = null)
    {
        $this->disease = $disease;
    
        return $this;
    }

    /**
     * Get disease
     *
     * @return \Medical\HealthBundle\Entity\Disease 
     */
    public function getDisease()
    {
        return $this->disease;
    }
}