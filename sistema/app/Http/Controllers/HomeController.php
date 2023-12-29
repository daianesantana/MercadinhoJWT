<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Controlador para a exibição da view welcome
class HomeController extends Controller
{
    public function index()
    {
        return view('welcome'); 
    }
}
