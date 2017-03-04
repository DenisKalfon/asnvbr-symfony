<?php

namespace AsnvbrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuiSommesNousController extends Controller
{
    public function indexAction()
    {
        return $this->render('AsnvbrBundle:QuiSommesNous:index.html.twig');
    }
}
