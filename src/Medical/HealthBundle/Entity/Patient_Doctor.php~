<?php

namespace Medical\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Medical\HealthBundle\Entity\Doctor;
use Medical\HealthBundle\Entity\Patient;

/**
 * Patient_Doctor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Medical\HealthBundle\Entity\Patient_DoctorRepository")
 */
class Patient_Doctor {

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
     * @ORM\OneToOne(targetEntity="Patient")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id") 
     */
    private $patient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reg_date", type="datetime")
     */
    private $reg_date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set doctor_id
     *
     * @param integer $doctorId
     * @return Patient_Doctor
     */
    public function setDoctorId($doctorId) {
        $this->doctor_id = $doctorId;

        return $this;
    }

    /**
     * Get doctor_id
     *
     * @return integer 
     */
    public function getDoctorId() {
        return $this->doctor_id;
    }

    /**
     * Set patient_id
     *
     * @param integer $patientId
     * @return Patient_Doctor
     */
    public function setPatientId($patientId) {
        $this->patient_id = $patientId;

        return $this;
    }

    /**
     * Get patient_id
     *
     * @return integer 
     */
    public function getPatientId() {
        return $this->patient_id;
    }

    /**
     * Set reg_date
     *
     * @param \DateTime $regDate
     * @return Patient_Doctor
     */
    public function setRegDate($regDate) {
        $this->reg_date = $regDate;

        return $this;
    }

    /**
     * Get reg_date
     *
     * @return \DateTime 
     */
    public function getRegDate() {
        return $this->reg_date;
    }

    /**
     * Set doctor
     *
     * @param integer $doctor
     * @return Patient_Doctor
     */
    public function setDoctor($doctor) {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return integer 
     */
    public function getDoctor() {
        return $this->doctor;
    }

    /**
     * Set patient
     *
     * @param integer $patient
     * @return Patient_Doctor
     */
    public function setPatient($patient) {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return integer 
     */
    public function getPatient() {
        return $this->patient;
    }
        
}