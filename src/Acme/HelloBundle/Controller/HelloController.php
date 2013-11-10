<?php
/**
 * Created by PhpStorm.
 * User: shpits
 * Date: 10.11.13
 * Time: 11:56
 */

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller {
    public function indexAction($name)
    {
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name));
    }
} 