<?php

namespace AsnvbrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NosFormationsController extends Controller
{
    public function indexAction()
    {
        return $this->render('AsnvbrBundle:NosFormations:index.html.twig');
    }
    public function sauvetageAction()
    {
        return $this->render('AsnvbrBundle:NosFormations:sauvetage.html.twig');
    }
    public function secourismeAction()
    {
        return $this->render('AsnvbrBundle:NosFormations:secourisme.html.twig');
    }
    public function pscAction()
    {
        return $this->render('AsnvbrBundle:NosFormations:psc.html.twig');
    }
    public function pse1Action()
    {
        return $this->render('AsnvbrBundle:NosFormations:pse1.html.twig');
    }
    public function pse2Action()
    {
        return $this->render('AsnvbrBundle:NosFormations:pse2.html.twig');
    }
    public function bnssaAction()
    {
        return $this->render('AsnvbrBundle:NosFormations:bnssa.html.twig');
    }
    public function bsbAction()
    {
        return $this->render('AsnvbrBundle:NosFormations:bsb.html.twig');
    }
    public function ensAction()
    {
        return $this->render('AsnvbrBundle:NosFormations:ens.html.twig');
    }
}
