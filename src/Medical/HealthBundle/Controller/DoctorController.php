<?php

namespace Medical\HealthBundle\Controller;

use Medical\HealthBundle\Entity\Medicine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DoctorController extends Controller {
    /* Allow to Doctor to Add medcine and Number of Tablets  */

    public function addmedicineAction(Request $request) {

        $form = $this->createFormBuilder()
                ->add('Name', 'text')
                ->add('NoTablets', 'integer')
                ->getForm();

        $form->bindRequest($request);

        // Check
        if ($form->isValid()) {
            // Fill the entity
            $newMedicin = new Medicine();
            $em = $this->getDoctrine()->getManager();
            $newMedicin->setName($form['Name']->getData());
            $newMedicin->setNoTablets($form['NoTablets']->getData());
            $em->persist($newMedicin);
            $em->flush();
        }

        return $this->render('MedicalHealthBundle:Doctor:index.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function prescriptionAction(Request $request) {

        $form = $this->createFormBuilder()
        ->add('Name', 'text')
        ->add('NoTablets', 'integer')
        ->add('gender', 'choice', array('choices' => array('m' => 'Male', 'f' => 'Female')))
        ->add('ExistMedicine', 'choice', array(
        'choices' => array(
        'morning' => 'Morning',
        'afternoon' => 'Afternoon',
        'evening' => 'Evening',
        ),
        'multiple' => true,
        ))


        ->getForm();

        $form->bindRequest($request);

        // Check
        if ($form->isValid()) {
            // Fill the entity
            $newMedicin = new Medicine();
            $em = $this->getDoctrine()->getManager();
            $newMedicin->setName($form['Name']->getData());
            $newMedicin->setNoTablets($form['NoTablets']->getData());
            $em->persist($newMedicin);
            $em->flush();
        }

        return $this->render('MedicalHealthBundle:Doctor:prescription.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
