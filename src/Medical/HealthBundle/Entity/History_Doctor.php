<?php

namespace Medical\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History_Doctor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Medical\HealthBundle\Entity\History_DoctorRepository")
 */
class History_Doctor {

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
     * @ORM\Column(name="diagnosis", type="text")
     */
    private $diagnosis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="method", type="boolean")
     */
    private $method;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set diagnosis
     *
     * @param string $diagnosis
     * @return History_Doctor
     */
    public function setDiagnosis($diagnosis) {
        $this->diagnosis = $diagnosis;

        return $this;
    }

    /**
     * Get diagnosis
     *
     * @return string 
     */
    public function getDiagnosis() {
        return $this->diagnosis;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return History_Doctor
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
     * Set method
     *
     * @param boolean $method
     * @return History_Doctor
     */
    public function setMethod($method) {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return boolean 
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Set patient_doctor
     *
     * @param \Medical\HealthBundle\Entity\Patient_Doctor $patientDoctor
     * @return History_Doctor
     */
    public function setPatientDoctor(\Medical\HealthBundle\Entity\Patient_Doctor $patientDoctor = null) {
        $this->patient_doctor = $patientDoctor;

        return $this;
    }

    /**
     * Get patient_doctor
     *
     * @return \Medical\HealthBundle\Entity\Patient_Doctor 
     */
    public function getPatientDoctor() {
        return $this->patient_doctor;
    }

    /**
     * Set patientCase
     *
     * @param \Medical\HealthBundle\Entity\PatientCase $patientCase
     * @return History_Doctor
     */
    public function setPatientCase(\Medical\HealthBundle\Entity\PatientCase $patientCase = null) {
        $this->patientCase = $patientCase;

        return $this;
    }

    /**
     * Get patientCase
     *
     * @return \Medical\HealthBundle\Entity\PatientCase 
     */
    public function getPatientCase() {
        return $this->patientCase;
    }

    /**
     * Set medicine
     *
     * @param \Medical\HealthBundle\Entity\Medicine $medicine
     * @return History_Doctor
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

}