<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function index()
    {
        return view('talleres.index');
    }

    public function danza()
    {
        return view('talleres.danza');
    }

    public function baile()
    {
        return view('talleres.baile');
    }

    public function oratoria()
    {
        return view('talleres.oratoria');
    }

    public function liderazgo()
    {
        return view('talleres.liderazgo');
    }
}
