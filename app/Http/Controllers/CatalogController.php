<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{
    /*
private $catalog =[

1=> ['title' => 'Политика'],
2=> ['title' => 'Экономика'],
3=> ['title' => 'Культура'],
4=> ['title' => 'Погода']
];
*/
public function index(Catalog $catalogs)
{

$catalogs = $catalogs->getCatalogs();
$return =['catalogs'=>$catalogs];
return view('catalog', $return);

//$return =['catalogs'=>$this->catalogs];
//return view('catalog',['catalogs'=>$this->catalogs]);

}

}
