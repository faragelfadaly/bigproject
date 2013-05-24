<?php

namespace Medical\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History_Patient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Medical\HealthBundle\Entity\History_PatientRepository")
 */
class History_Patient {

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
     * @var string
     *
     * @ORM\Column(name="complaint", type="text")
     */
    private $complaint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return History_Patient
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set complaint
     *
     * @param string $complaint
     * @return History_Patient
     */
    public function setComplaint($complaint) {
        $this->complaint = $complaint;

        return $this;
    }

    /**
     * Get complaint
     *
     * @return string 
     */
    public function getComplaint() {
        return $this->complaint;
    }

    /**
     * Set patient
     *
     * @param \Medical\HealthBundle\Entity\Patient $patient
     * @return History_Patient
     */
    public function setPatient(\Medical\HealthBundle\Entity\Patient $patient = null) {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Medical\HealthBundle\Entity\Patient 
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * Set doctor
     *
     * @param \Medical\HealthBundle\Entity\Doctor $doctor
     * @return History_Patient
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
     * @return History_Patient
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

}