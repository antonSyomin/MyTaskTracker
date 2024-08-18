@extends('layouts.main')

@section('title', 'Мои доски')

@section('main.content')
<x-title>
    <x-slot name="right">
        <x-button-link color="success" href="{{ route('user.boards.create') }}">
            {{ __('Создать доску') }}
        </x-button>
    </x-slot>
    {{ __('Ваши доски') }}
</x-title>
@if(empty($boards))
    {{ __('У вас пока нет досок') }}
@else
<div class="row">
    @foreach($boards as $board)
        <div class="col-12 col-md-4">
            <x-post.card :board="$board"/>
        </div>
    @endforeach
</div>
@endif
@endsection