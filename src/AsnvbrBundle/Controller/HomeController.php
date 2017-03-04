<?php

namespace AsnvbrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AsnvbrBundle:Home:index.html.twig');
    }
}
