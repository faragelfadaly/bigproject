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


    // medicines that is not exist in the database

    /**
     * @var string
     *
     * @ORM\Column(name="extraMedicines", type="text")
     */
    private $extraMedicines;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="diagnosis_date", type="datetime")
     */
    private $diagnosis_date;

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

    /**
     * Set extraMedicines
     *
     * @param string $extraMedicines
     * @return History_Doctor
     */
    public function setExtraMedicines($extraMedicines) {
        $this->extraMedicines = $extraMedicines;

        return $this;
    }

    /**
     * Get extraMedicines
     *
     * @return string 
     */
    public function getExtraMedicines() {
        return $this->extraMedicines;
    }

    /**
     * Set diagnosis_date
     *
     * @param \DateTime $diagnosisDate
     * @return History_Doctor
     */
    public function setDiagnosisDate($diagnosisDate) {
        $this->diagnosis_date = $diagnosisDate;

        return $this;
    }

    /**
     * Get diagnosis_date
     *
     * @return \DateTime 
     */
    public function getDiagnosisDate() {
        return $this->diagnosis_date;
    }

    /**
     * Set patient
     *
     * @param \Medical\HealthBundle\Entity\Patient $patient
     * @return History_Doctor
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
     * @return History_Doctor
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
     * @return History_Doctor
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