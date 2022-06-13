<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;


class AppController extends Controller
{
    public function welcome()
    {
        $customers = customer::all();//requete sql equivalent à select all
     
        return view('welcome', ['customers' => $customers]);
    }
}
