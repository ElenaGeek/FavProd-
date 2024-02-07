<div class="maindata container-narrow">

<h3 class="maindata__title">Выберите блюдо</h3>
<p>текст</p>

<div class="maindata__choice">
<div class="maindata__selblocks">

<!--
<form method="POST" class="maindata__selblocks" action="{{ isset($catalog) ? route('/', $catalog) : route('catalog') }}" novalidate>
<form method="post" class="maindata__selblocks" action="$_POST['selected']">   
-->   
<form method="post" class="maindata__selblocks" action="">    
@csrf
          
            <div class="maindata__selblock">
                  <label class="maindata__label" for="catalog_item">Прием пищи</label>
                  <select class="maindata__list" name="catalog_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="category_item">Вид блюда</label>
                  <select class="maindata__list" name="category_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="type_item">Основной состав</label>
                  <select class="maindata__list" name="type_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="group_item">Ценность ингредиентов</label>
                  <select class="maindata__list" name="group_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="class_item">Назначение</label>
                  <select class="maindata__list" name="class_item[]" multiple>
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">  
                  <p class="maindata__label">Кнопка</p>
                  <input type="submit" name="submit" value="Подобрать">
            </div>
      </form>

</div>
      
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
          
            if(!empty($_POST['class_item'])) { 
                  foreach($_POST['class_item'] as $selected_class){
                        echo 'Your class: ' . $selected_class;
                  }          
            }  
      }
      else {
            echo 'Please select any value';
          }
?>
      

</div>

<!----------------------------------------------------------->


<h3 class="maindata__title">Выберите состав ингредиентов</h3>
<p>текст</p>

<div class="maindata__choice">
<div class="maindata__selblocks">

<!--
<form method="POST" class="maindata__selblocks" action="{{ isset($catalog) ? route('/', $catalog) : route('catalog') }}" novalidate>
<form method="post" class="maindata__selblocks" action="$_POST['selected']">   
-->   
<form method="post" class="maindata__selblocks" action="">    
@csrf
          
            <div class="maindata__selblock">
                  <label class="maindata__label" for="catalog_item">Белки</label>
                  <select class="maindata__list" name="catalog_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="category_item">Углеводы</label>
                  <select class="maindata__list" name="category_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="type_item">Овощи</label>
                  <select class="maindata__list" name="type_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="group_item">Фрукты, напитки</label>
                  <select class="maindata__list" name="group_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="class_item">Масла, сладости, приправы</label>
                  <select class="maindata__list" name="class_item[]" multiple>
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">  
                  <p class="maindata__label">Кнопка</p>
                  <input type="submit" name="submit" value="Подобрать">
            </div>
      </form>

</div>
      
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
          
            if(!empty($_POST['class_item'])) { 
                  foreach($_POST['class_item'] as $selected_class){
                        echo 'Your class: ' . $selected_class;
                  }          
            }  
      }
      else {
            echo 'Please select any value';
          }
?>
      

</div>

</div>

<!----------------------------------------------------------->

@php
//echo $array['name'];
//dd($array['name']);
//dump($array['name']);
@endphp

<select name="type">
      @foreach ($data as $item =>$array)
                  <h3>Каталог {{ $array['name']}}</h3>
      <h3>Выберите:</h3>
      <option value="{{ $array['name']}}">{{ $array['name']}}</option>
      @endforeach
</select>

<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Действие
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Действие</a></li>
    <li><a class="dropdown-item" href="#">Другое действие</a></li>
    <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Отделенная ссылка</a></li>
  </ul>
</div>

<h3>Выберите ингредиент:</h3>
<select>
  <option value="овощи">Овощи</option>
  <option value="куриное филе">Куриное филе</option>
  <option value="соус">Соус</option>
  <option value="спагетти">Спагетти</option>
  <option value="бекон">Бекон</option>
  <option value="сыр">Сыр</option>
  <option value="яйцо">Яйцо</option>
  <option value="шоколад">Шоколад</option>
</select>