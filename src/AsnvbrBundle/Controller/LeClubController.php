<?php

namespace AsnvbrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LeClubController extends Controller
{
    public function indexAction()
    {
        return $this->render('AsnvbrBundle:LeClub:index.html.twig');
    }
}
