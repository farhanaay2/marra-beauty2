<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()     { return view('home'); }
    public function nails()    { return view('nails'); }
    public function lashes()   { return view('lashes'); }
    public function waxing()   { return view('waxing'); }
    public function brows()    { return view('brows'); }
    public function lips()     { return view('lips'); }
    public function presson()  { return view('presson'); }
    public function pricelist(){ return view('pricelist'); }
    public function kontak()   { return view('kontak'); }
    public function lokasi()   { return view('lokasi'); }
}
