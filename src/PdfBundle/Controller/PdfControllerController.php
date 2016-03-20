<?php

namespace PdfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PdfControllerController extends Controller
{
    /**
     * @Route("/print")
     */
    public function printAction()
    {
        return $this->render('PdfBundle:PdfController:print.html.twig', array(
            // ...
        ));
    }

}
