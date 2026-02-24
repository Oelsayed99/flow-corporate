<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }

    public function structure()
    {
        return view('pages.structure');
    }

    public function interior()
    {
        return view('pages.interior');
    }

    public function finishing()
    {
        return view('pages.finishing');
    }
}
