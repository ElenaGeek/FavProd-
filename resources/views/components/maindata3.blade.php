<div class="maindata container-narrow">

<h3 class="maindata__title">Выберите блюдо и состав ингредиентов</h3>
<p>текст</p>
<button class="maindata__button" type="submit" form="mainform" name="submit" value="submit">
                        Подобрать
                  </button>

<div class="maindata__blocks">
<div class="maindata__block">


<!--
      
<form method="POST" class="maindata__selection" action="{{ isset($catalog) ? route('/', $catalog) : route('catalog') }}" novalidate>
<form method="post" class="maindata__selection" action="$_POST['selected']"> 

<form method="post" class="maindata__selection" action="">

<form method="POST" class="maindata__selection" action="{{ isset($catalog) ? route('/', $catalog) : route('catalog') }}" novalidate> 
-->  
<form id="mainform" method="POST" action="{{ isset($product) ? route('/', $sample) : route('sample') }}" novalidate>       
@csrf

<div class="maindata__selection">
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
<!--              <label class="maindata__label" for="submit">Кнопка</label>
                  <p class="maindata__button">Кнопка</p> -->
                  <input class="maindata__button" type="submit" name="submit" value="Подобрать">
            </div>

</div>

<div class="maindata__ingr">

<!--      <img class="maindata__img" src="/storage/images/mainft.png"></img> -->

<div class="maindata__selection ingr__overlay">


            <div class="maindata__selblock">
                  <label class="maindata__label" for="list1_item">Белки</label>
                  <select class="maindata__list" name="list1_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list2_item">Углеводы</label>
                  <select class="maindata__list" name="list2_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list3_item">Овощи</label>
                  <select class="maindata__list" name="list3_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list4_item">Масла, приправы</label>
                  <select class="maindata__list" name="list4_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list5_item">Фрукты, напитки</label>
                  <select class="maindata__list" name="list5_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="list6_item">Cладости</label>
                  <select class="maindata__list" name="list6_item[]" multiple>
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
</div>
</div>



      </form>




<button class="ingr__button">
      <p>Ингредиенты, детали</p>
<!--                    <img src="" width="32" height="23" alt="Ингредиенты, детали"> -->
</button>

<button class="ingr__close">
      <img src="storage/images/delete.png" alt="Delete">
</button>
      
<?php

      if(isset($_POST['submit'])){
        
            $selected_catalog = $_POST['catalog_item'];
            echo 'Catalog: ' . $selected_catalog;  

            $selected_category = $_POST['category_item'];
            echo 'Category: **' . $selected_category;

            $selected_type = $_POST['type_item'];
            echo 'Type: ' . $selected_type;

            $selected_group = $_POST['group_item'];
            echo 'Group: ' . $selected_group;
          
            if(!empty($_POST['class_item'])) { 
                  foreach($_POST['class_item'] as $selected_class){
                        echo 'Class: ' . $selected_class;
                  }          
            }  

      }
      else {
//            echo 'Please select any value';
          }
?>
      

</div>

<!--------------------------------------------------------

<div class="maindata__block">
      <div class="maindata__ingr"> --->

<!--      <img class="maindata__img" src="/storage/images/mainft.png"></img> -->
<!----
<div class="maindata__selection ingr__overlay">

<button class="ingr__close">
      <img src="storage/images/delete.png" alt="Delete">
</button>
      -->
<!--
<form method="POST" class="maindata__selection" action="{{ isset($catalog) ? route('/', $catalog) : route('catalog') }}" novalidate>
<form method="post" class="maindata__selection" action="$_POST['selected']">   

<form method="post" class="maindata__selection" action=""> 
--> 
<!--  
<form id="mainform" method="POST" class="maindata__selection" action="{{ isset($product) ? route('/', $sample) : route('sample') }}" novalidate>      
@csrf
          
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list1_item">Белки</label>
                  <select class="maindata__list" name="list1_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list2_item">Углеводы</label>
                  <select class="maindata__list" name="list2_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list3_item">Овощи</label>
                  <select class="maindata__list" name="list3_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list4_item">Масла, приправы</label>
                  <select class="maindata__list" name="list4_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">
                  <label class="maindata__label" for="list5_item">Фрукты, напитки</label>
                  <select class="maindata__list" name="list5_item">
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>
            <div class="maindata__selblock">                 
                  <label class="maindata__label" for="list6_item">Cладости</label>
                  <select class="maindata__list" name="list6_item[]" multiple>
                        @foreach ($data as $item =>$array)
                        <h3>{{ $array['name']}}</h3>
                        <option value="{{ $array['name']}}">{{ $array['name']}}</option>
                        @endforeach
                  </select>
            </div>

            <div class="maindata__selblock">  
            <p class="maindata__button">Кнопка</p> 
                  <input class="maindata__button" type="submit" name="submit" value="Подобрать">
            </div>

      </form>
      -->      
</div>

      
<?php

      if(isset($_POST['submit'])){
        
            $selected_list1 = $_POST['list1_item'];
            echo 'Your list1: ' . $selected_list1;             

            $selected_list2 = $_POST['list2_item'];
            echo 'Your list2: ' . $selected_list2;

            $selected_list3 = $_POST['list3_item'];
            echo 'Your list3: ' . $selected_list3;

            $selected_list4 = $_POST['list4_item'];
            echo 'Your list4: ' . $selected_list4;

            $selected_list5 = $_POST['list5_item'];
            echo 'Your list5: ' . $selected_list5;
          
            if(!empty($_POST['list6_item'])) { 
                  foreach($_POST['class_item'] as $selected_list6){
                        echo 'Your class: ' . $selected_list6;
                  }          
            }  
      }

?>
      

</div>
</div>
</div>

</div>

<!----------------------------------------------------------->

@php
//echo $array['name'];
//dd($array['name']);
//dump($array['name']);
@endphp

<!--
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

-->

<script>

document.querySelector(".ingr__button").onclick = function(){
    document.querySelector(".ingr__overlay").classList.add("ingr__overlay__open");
}

document.querySelector(".ingr__close") .onclick = function(){
    document.querySelector(".ingr__overlay").classList.remove("ingr__overlay__open");
}        

</script>