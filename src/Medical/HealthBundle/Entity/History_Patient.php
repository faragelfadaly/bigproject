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
     * @ORM\OneToOne(targetEntity="Patient_Doctor")
     * @ORM\JoinColumn(name="patient_doctor_id", referencedColumnName="id") 
     */
    private $patient_doctor;

    /**
     *          
     * @ORM\OneToOne(targetEntity="PatientCase")
     * @ORM\JoinColumn(name="patientCase_id", referencedColumnName="id") 
     */
    private $patientCase;

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
     * Set patientCase
     *
     * @param \Medical\HealthBundle\Entity\PatientCase $patientCase
     * @return History_Patient
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
     * Set patient_doctor
     *
     * @param \Medical\HealthBundle\Entity\Patient_Doctor $patientDoctor
     * @return History_Patient
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

}