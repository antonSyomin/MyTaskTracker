@extends('layouts.main')

@section('main.content')
    <div class="text-center">
        @yield('main.content')
        <h1>
            {{ __('Главная страница') }}
        </h1>
    </div>
@endsection