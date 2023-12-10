@extends('layouts.base')

@section('title')
    Мой сайт - @parent
@stop

@section('content')
    <main class="main">

        <section class="">
            <x-banner/>
        </section>
        
        <section class="">
        <x-maindata :data="$catalog"></x-maindata>
        </section>

        <section class="">
            <x-daily/>
        </section>
        
        <section class="">
            <x-popular/>
        </section>
        
        <section class="">
            <x-articles/>
        </section>

        <section class="">
            <x-stories/>
        </section>

        <section class="">
            <x-reference/>
        </section>

    </main>

@endsection