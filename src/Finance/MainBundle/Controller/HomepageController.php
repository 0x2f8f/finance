<?php

namespace Finance\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('FinanceMainBundle:Homepage:index.html.twig');
    }
}
