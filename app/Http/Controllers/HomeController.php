<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

//        $category =[
//            1=> ['name' => 'Любой'],
//            2=> ['name' => 'Салат'],
//            3=> ['name' => 'Суп'],
//            4=> ['name' => 'Закуска']
//            ];
        $kind =[
            1=> ['name' => 'Любой'],
            2=> ['name' => 'Мясо'],
            3=> ['name' => 'Рыба'],
            4=> ['name' => 'Творог']
            ];
        $group =[
            1=> ['name' => 'Любая'],
            2=> ['name' => 'Железо'],
            3=> ['name' => 'Кальций'],
            4=> ['name' => 'Магний']
            ];
        $rubric =[
            1=> ['name' => 'Любое'],
            2=> ['name' => 'Для костей'],
            3=> ['name' => 'Для сосудов'],
            4=> ['name' => 'Для похудения']
            ];

        $protein =[
            1=> ['name' => 'Любой'],
            2=> ['name' => 'Говядина'],
            3=> ['name' => 'Лосось'],
            4=> ['name' => 'Творог']
                ];
        $carb =[
            1=> ['name' => 'Любой'],
            2=> ['name' => 'Хлеб'],
            3=> ['name' => 'Мука'],
            4=> ['name' => 'Свекла']
                ]; 
        $dairyveg =[
            1=> ['name' => 'Любой'],
            2=> ['name' => 'Морковь']
                ];
        $fruitdrink =[
            1=> ['name' => 'Любой'],
            2=> ['name' => 'Яблоко']
                ];
        $oilnut =[
            1=> ['name' => 'Любой'],
            2=> ['name' => 'Оливковое']
                ];
        $sweet =[
            1=> ['name' => 'Любой'],
            2=> ['name' => 'Мёд']
                ];  
                                 


        //$user = Auth::user();
        //$user = User::find(1);   // для отладки
        $catalog = Catalog::all();
        $category = Category::all();

        //dump($catalog);
        //dd($carb); 
        //return view('index', ['user' => $user]);

        return view('index', [
            'catalog' =>$catalog,
            'category' =>$category,
            'kind' =>$kind,
            'group' =>$group,
            'rubric' =>$rubric,
            'protein' =>$protein,
            'carb' =>$carb,
            'dairyveg' =>$dairyveg,
            'fruitdrink' =>$fruitdrink,
            'oilnut' =>$oilnut,
            'sweet' =>$sweet
            ]);
    }
}
