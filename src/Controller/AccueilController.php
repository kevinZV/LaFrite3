<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    /**
     * @Route("/index", name="accueil")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome ',
            'path' => 'src/Controller/AccueilController.php',
        ]);
    }

}