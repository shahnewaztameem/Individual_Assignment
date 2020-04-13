<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function pizza()
    {
        return view('pizza',['resorse' => 'Welcome To Pizza Ordering Site']);

    }
    public function bigpizza()
    {
        echo "<h1>This is our Big Pizza Ordering Site</h1>";
    }
    public function midumpizza()
    {
        echo "<h2>This is our midum Pizza Ordering Site</h2>";

    }
    public function smallpizza()
    {
        echo "<h3>This is our small Pizza Ordering Site</h3>";

    }
}
