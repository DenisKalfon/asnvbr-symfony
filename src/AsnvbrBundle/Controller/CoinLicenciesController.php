<?php

namespace AsnvbrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoinLicenciesController extends Controller
{
    public function indexAction()
    {
        
    }
    
    public function posteSecoursAction()
    {
        return $this->render('AsnvbrBundle:CoinLicencies:posteSecours.html.twig');
    }
}
