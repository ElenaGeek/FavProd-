@extends('layouts.base')

@section('title')
    Мой сайт - @parent
@stop

@section('content')
    <main>
  
        <x-action/>

        @php
        //dump($catalog);
        @endphp

        <section class="presentation container">

        <x-main/>
     
        @foreach ($catalog as $item =>$array)
        <h3>Каталог {{ $array['name']}}</h3>
        @endforeach

        <x-popular/>

        </section>

    </main>

@endsection