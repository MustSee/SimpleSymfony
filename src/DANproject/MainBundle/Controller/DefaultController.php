<?php

namespace DANproject\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $users = $this->get('doctrine')
            ->getRepository('DANprojectMainBundle:User')
            ->findAll();
        $datas = ['users'=>$users];
        return $this->render('DANprojectMainBundle:Default:index.html.twig', $datas);
    }
}
