<?php

namespace Sprain\Silex\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DefaultController
{
    public function default(Request $request, Application $app)
    {
        //$products = $app['em']->getRepository('Sprain\Silex\Entity\Product')->findAll();

        return $app['twig']->render('Default/default.html.twig', array(
            'name' => $request->query->get('name')
        ));
    }
}
