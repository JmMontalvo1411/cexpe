<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function programas()
    {
        return view('pages.programas');
    }

    public function asesoramiento()
    {
        return view('pages.asesoramiento');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }
}
