@extends('layouts.base')

@section('title')
@parent
	Sample
@endsection

@section('content')
<h1>Прием пищи</h1>
<h2>Приветствуем на странице категорий</h2>
<p>Для просмотра конкретной категории выберите и пройдите по ссылке</p>

	@php
	//dd($products);
	//dump($products);
	@endphp

    @forelse($products as $id => $item)
		<div>
            <img src='img/{{$item->id}}.png'></img><br>
            <a href='/product/{{$item->id}}'>
            {{$item->catalog_name}}{{$item->name}}{{$item->slug}}

            </a> 
            </div>

    @empty
    	Новостей нет !!!
    @endforelse

	<br><br>

	<?php

      if(isset($_POST['submit'])){
        
            $selected_catalog = $_POST['catalog_item'];
            echo 'Your catalog: ' . $selected_catalog;             

            $selected_category = $_POST['category_item'];
            echo 'Your category: ' . $selected_category;

            $selected_type = $_POST['type_item'];
            echo 'Your type: ' . $selected_type;

            $selected_group = $_POST['group_item'];
            echo 'Your group: ' . $selected_group;

            $selected_list1 = $_POST['list1_item'];
            echo 'Your list1: ' . $selected_list1;    
          
            if(!empty($_POST['class_item'])) { 
                  foreach($_POST['class_item'] as $selected_class){
                        echo 'Your class: ' . $selected_class;
                  }          
            } 
            
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
@endsection