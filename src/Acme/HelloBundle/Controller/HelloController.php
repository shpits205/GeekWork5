<?php
/**
 * Created by PhpStorm.
 * User: shpits
 * Date: 10.11.13
 * Time: 11:56
 */

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends Controller
{
    public function indexAction()
    {
        $newObject = new ArrayCountryModel();

        $param = $newObject->newArray();
        return $this->render(
            'AcmeHelloBundle:Hello:index.html.twig',
            [
                'arr' => $param
            ]
        );
    }

    public function aboutAction(Request $request)
    {
        $page = $request->query->get('page');
        $newObject = new ArrayCountryModel();

        $param = $newObject->newArray();
        return $this->render('AcmeHelloBundle:Hello:about.html.twig', array('mas' => $param, 'page' => $page));
    }
} 