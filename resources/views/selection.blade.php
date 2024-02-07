@extends('layouts.base')

@section('title')
@parent
	Selection
@endsection

@section('content')

<div class="selection container-narrow">
<h1>Рецепты</h1>
<h2>Найдено ХХ рецептов</h2>
<p>Сортировать по </p>

	@php
	//dd($products);
	//dump($products);
	@endphp

<br>

<?php

if(isset($_POST['submit'])){
  
      $selected_catalog = $_POST['catalog_item'];
      echo '' . $selected_catalog;             

      $selected_category = $_POST['category_item'];
      echo '  >  ' . $selected_category;

      $selected_kind = $_POST['kind_item'];
      echo '  >  ' . $selected_kind;

      $selected_group = $_POST['group_item'];
      echo '  >  ' . $selected_group;

      $selected_rubric = $_POST['rubric_item'];
      echo '  >  ' . $selected_rubric;    
    
//      if(!empty($_POST['rubric_item'])) { 
//            foreach($_POST['rubric_item'] as $selected_rubric){
//                  echo '  >  ' . $selected_rubric;
//            }          
//      } 
      
//	dump($catalogs);	
//      dump($catalog);
//      dump ($products);
//      dump ($product);
//      dump($selected_catalog);
     
}
else {
//            echo 'Please select any value';
    }
?>
<br></br>
<div class="selection__blocks">

    @forelse($product as $id => $item)

                  <div class="selection__block">   
                        <div class="selection__blocksm">
                        <img src='/storage/images/products/{{$item->id}}.png'></img><br>
                        </div>
                        <div class="selection__blocklt">
                        <br>
                        <h4>
                              <a href='/product/{{$item->id}}'>
                              {{$item->catalog_name}}{{$item->name}}{{$item->slug}}
                              </a> 
                        </h4>
                        <br>       
                              <p><i style="color:blue">Порций ~ {{$item->id}}</i></p>
                              <p><i style="color:red">Минут приготовления ~ {{$item->id}}</i></p>
                        </div>
                  </div>


    @empty
    	Новостей нет !!!
    @endforelse
</div>
	<br><br>

	<?php

      if(isset($_POST['submit'])){
        
            $selected_catalog = $_POST['catalog_item'];
            echo 'Your catalog: ' . $selected_catalog;             

            $selected_category = $_POST['category_item'];
            echo 'Your category: ' . $selected_category;

            $selected_kind = $_POST['kind_item'];
            echo 'Your kind: ' . $selected_kind;

            $selected_group = $_POST['group_item'];
            echo 'Your group: ' . $selected_group;

            $selected_rubric = $_POST['rubric_item'];
            echo 'Your list1: ' . $selected_rubric;    
          
//            if(!empty($_POST['rubric_item'])) { 
//                  foreach($_POST['rubric_item'] as $selected_rubric){
//                        echo 'Your rubric: ' . $selected_rubric;
//                  }          
//            } 
            
//	dump($catalogs);	
//      dump($catalog);
//      dump ($products);
//      dump ($product);
//      dump($selected_catalog);
           
      }
      else {
//            echo 'Please select any value';
          }
?>

</div>
@endsection