<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //

    public function index()
    {
        return view('home-web');
    }
    
    public function coffeShop()
    {
        return view('coffee-facts-shop');
    }
    
    public function sobreNosotros()
    {
        return view('sobre-nosotros');
    }
     
    public function recertario()
    {
        return view('recertario');
    }
    
    public function blog()
    {
        return view('blog');
    }
    
    public function blogDetalle()
    {
        return view('blog-detalle');
    }
    
    public function contacto()
    {
        return view('contacto');
    }
    
    public function recertaDetalle()
    {
        return view('recerta-detalle');
    }
    
    public function producto()
    {
        return view('producto');
    }
}
