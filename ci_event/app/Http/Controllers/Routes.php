<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routes extends Controller
{
   public function index()
   {
       return view('index');
   }
   
   
   public function test()
   {
       return view('test');
   }
   
   
   public function hum()
   {
       return view('hum');
   }
}
