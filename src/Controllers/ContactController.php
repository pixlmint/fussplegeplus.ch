<?php

namespace App\Controllers;

use Nacho\Controllers\AbstractController;

class ContactController extends AbstractController
{
    public function index()
    {
        return $this->render('contact.twig');
    }
}