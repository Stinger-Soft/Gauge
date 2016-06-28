<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StingerSoftGaugePresentationBundle:Default:index.html.twig');
    }
}
