<?php

namespace Medical\HealthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MedicalHealthBundle:Default:index.html.twig', array('name' => $name));
    }
}
