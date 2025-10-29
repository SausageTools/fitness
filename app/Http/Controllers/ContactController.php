<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Contact');
    }
}
