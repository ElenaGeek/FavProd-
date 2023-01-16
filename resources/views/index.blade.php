@extends('layouts.main')

@section('title')
    Города России - @parent
@stop

@section('content')
    <main>

        <div class="performance wrapper">
            <div class="container">
                <h1 class="performance__title">
                    Еда
                </h1>
                <h2 class="performance__text">
                    Многообразие впечатляет, главное - выбрать то, что нужно
                </h2>
            </div>
        </div>

        @php
        //dump($catalog);
        @endphp

        <section class="presentation container wrapper">

        @foreach ($catalog as $item =>$array)
        <h3>Каталог {{ $array['name']}}</h3>
        @endforeach

        </section>

    </main>

@endsection