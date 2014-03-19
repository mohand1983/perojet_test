<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class blogController extends Controller
{
    public function indexAction($name, $prenom)
    {
        return $this->render('SdzBlogBundle:Blog:index.html.twig', array('name' => $name, 'prenom'=>$prenom));
    }
}
