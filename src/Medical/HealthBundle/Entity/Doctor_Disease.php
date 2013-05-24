<?php

namespace Medical\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor_Disease
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Medical\HealthBundle\Entity\Doctor_DiseaseRepository")
 */
class Doctor_Disease {

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
     * @ORM\OneToOne(targetEntity="Doctor")
     * @ORM\JoinColumn(name="doctor_id", referencedColumnName="id")
     */
    private $doctor;

    /**
     *
     * @ORM\OneToOne(targetEntity="Disease")
     * @ORM\JoinColumn(name="disease_id", referencedColumnName="id")
     */
    private $disease;

    /**
     *
     * @ORM\OneToOne(targetEntity="Medicine")
     * @ORM\JoinColumn(name="medicine_id", referencedColumnName="id")
     */
    private $medicine;

    /**
     * @var integer
     *
     * @ORM\Column(name="age_from", type="integer")
     */
    private $age_from;

    /**
     * @var integer
     *
     * @ORM\Column(name="age_to", type="integer")
     */
    private $age_to;

    /**
     * Get id
     *
     * @return integer 
     */

    /**
     * @var integer
     *
     * @ORM\Column(name="periodic", type="integer")
     */
    private $periodic;

    public function getId() {
        return $this->id;
    }

    /**
     * Set age_from
     *
     * @param integer $ageFrom
     * @return Doctor_Disease
     */
    public function setAgeFrom($ageFrom) {
        $this->age_from = $ageFrom;

        return $this;
    }

    /**
     * Get age_from
     *
     * @return integer 
     */
    public function getAgeFrom() {
        return $this->age_from;
    }

    /**
     * Set age_to
     *
     * @param integer $ageTo
     * @return Doctor_Disease
     */
    public function setAgeTo($ageTo) {
        $this->age_to = $ageTo;

        return $this;
    }

    /**
     * Get age_to
     *
     * @return integer 
     */
    public function getAgeTo() {
        return $this->age_to;
    }

    /**
     * Set doctor
     *
     * @param \Medical\HealthBundle\Entity\Doctor $doctor
     * @return Doctor_Disease
     */
    public function setDoctor(\Medical\HealthBundle\Entity\Doctor $doctor = null) {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return \Medical\HealthBundle\Entity\Doctor 
     */
    public function getDoctor() {
        return $this->doctor;
    }

    /**
     * Set disease
     *
     * @param \Medical\HealthBundle\Entity\Disease $disease
     * @return Doctor_Disease
     */
    public function setDisease(\Medical\HealthBundle\Entity\Disease $disease = null) {
        $this->disease = $disease;

        return $this;
    }

    /**
     * Get disease
     *
     * @return \Medical\HealthBundle\Entity\Disease 
     */
    public function getDisease() {
        return $this->disease;
    }

    /**
     * Set medicine
     *
     * @param \Medical\HealthBundle\Entity\Medicine $medicine
     * @return Doctor_Disease
     */
    public function setMedicine(\Medical\HealthBundle\Entity\Medicine $medicine = null) {
        $this->medicine = $medicine;

        return $this;
    }

    /**
     * Get medicine
     *
     * @return \Medical\HealthBundle\Entity\Medicine 
     */
    public function getMedicine() {
        return $this->medicine;
    }


    /**
     * Set periodic
     *
     * @param integer $periodic
     * @return Doctor_Disease
     */
    public function setPeriodic($periodic)
    {
        $this->periodic = $periodic;
    
        return $this;
    }

    /**
     * Get periodic
     *
     * @return integer 
     */
    public function getPeriodic()
    {
        return $this->periodic;
    }
}