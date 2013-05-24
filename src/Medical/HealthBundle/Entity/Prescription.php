<?php

namespace Medical\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prescription
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Medical\HealthBundle\Entity\PrescriptionRepository")
 */
class Prescription {

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
     * @ORM\OneToOne(targetEntity="History_Doctor")
     * @ORM\JoinColumn(name="history_doctor_id", referencedColumnName="id") 
     */
    private $history_doctor;

    /**
     *          
     * @ORM\OneToOne(targetEntity="Medicine")
     * @ORM\JoinColumn(name="medicine_id", referencedColumnName="id") 
     */
    private $medicine;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_doses", type="integer")
     */
    private $no_doses;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set no_doses
     *
     * @param integer $noDoses
     * @return Prescription
     */
    public function setNoDoses($noDoses) {
        $this->no_doses = $noDoses;

        return $this;
    }

    /**
     * Get no_doses
     *
     * @return integer 
     */
    public function getNoDoses() {
        return $this->no_doses;
    }

    /**
     * Set history_doctor
     *
     * @param \Medical\HealthBundle\Entity\History_Doctor $historyDoctor
     * @return Prescription
     */
    public function setHistoryDoctor(\Medical\HealthBundle\Entity\History_Doctor $historyDoctor = null) {
        $this->history_doctor = $historyDoctor;

        return $this;
    }

    /**
     * Get history_doctor
     *
     * @return \Medical\HealthBundle\Entity\History_Doctor 
     */
    public function getHistoryDoctor() {
        return $this->history_doctor;
    }

}