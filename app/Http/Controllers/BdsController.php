<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdsController extends Controller
{
    public function index()
    {
        return response('Здесь будет перечень объявлений')
                    ->header('Content-Type', 'text/plain');
    }
}
