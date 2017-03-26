<?php

namespace AsnvbrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SauvetageSportifController extends Controller
{
    public function indexAction()
    {
        return $this->render('AsnvbrBundle:SauvetageSportif:index.html.twig');
    }
    public function eauPlateAction()
    {
        return $this->render('AsnvbrBundle:SauvetageSportif:eauPlate.html.twig');
    }
    public function cotierAction()
    {
        return $this->render('AsnvbrBundle:SauvetageSportif:cotier.html.twig');
    }
}
