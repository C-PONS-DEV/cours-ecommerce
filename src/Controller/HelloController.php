<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{prenom?World}", name="hello")
     */
    public function hello($prenom = "World")
    {
        return $this->render('hello.html.twig', ['prenom' => $prenom]);
    }

    /**
     * @Route("/example/", name="example")
     */
    public function exemple()
    {
        return $this->render('example.html.twig', ['age' => 19]);
    }
}
