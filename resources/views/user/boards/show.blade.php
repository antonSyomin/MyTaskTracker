@extends('layouts.main')

@section('title', 'Доска')

@section('main.content')
<x-title>
    <x-slot name="link">
        <a href="{{ route('user.boards.index') }}">
            {{ __('назад') }}
        </a>
    </x-slot>

    {{ $board->title }}

    <x-slot name="right">
        <x-button-link href="{{ route('user.boards.edit', $board->id) }}">
            {{ __('Редактировать') }}
        </x-button-link>
    </x-slot>
</x-title>

<div class="mb-4">
    <p>
        {{ $board->content }}
    </p>
</div>
@endsection