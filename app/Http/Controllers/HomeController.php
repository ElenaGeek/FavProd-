<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        //$user = Auth::user();
        // $user = User::find(1);   // для отладки
        $catalog = Catalog::all();

        //dump($catalog); 
        //return view('index', ['user' => $user]);
        return view('index', ['catalog' =>$catalog]);
    }
}
