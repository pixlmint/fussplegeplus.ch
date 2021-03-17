<?php

namespace App\Controllers;

use Nacho\Controllers\AbstractController;

class PricesController extends AbstractController
{
    public function index()
    {
        return $this->render('prices.twig');
    }
}