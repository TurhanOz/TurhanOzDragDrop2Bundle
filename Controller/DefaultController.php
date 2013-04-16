<?php

namespace TurhanOz\DragDrop2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TurhanOzDragDrop2Bundle:Default:index.html.twig', array('name' => $name));
    }
}
