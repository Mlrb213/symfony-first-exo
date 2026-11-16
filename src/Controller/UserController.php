<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function profile(): Response
    {
        $name = 'Alice Martin';
        $age = 25;
        $city = 'Marseille';

        return $this->render('user/profile.html.twig', [
            'name' => $name,
            'age' => $age,
            'city' => $city,
        ]);
    }
}
