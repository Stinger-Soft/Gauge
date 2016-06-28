<?php

namespace GaugePresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GaugePresentationBundle:Default:index.html.twig');
    }
}
