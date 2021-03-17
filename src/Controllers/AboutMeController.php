<?php

namespace App\Controllers;

use Nacho\Controllers\AbstractController;

class AboutMeController extends AbstractController
{
    public function index()
    {
        return $this->render('about-me.twig');
    }
}