<?php

namespace Fafas\ElasticaQuery\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TQQueryBuilderBundle:Default:index.html.twig', array('name' => $name));
    }
}
