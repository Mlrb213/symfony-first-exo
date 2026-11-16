<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function profile(string $name): Response
    {
        $age = 25;
        $city = 'Marseille';

        return $this->render('user/profile.html.twig', [
            'name' => $name,
            'age' => $age,
            'city' => $city,
        ]);
    }
}
