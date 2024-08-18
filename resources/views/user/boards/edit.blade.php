@extends('layouts.main')

@section('title', 'Редактировать доску')

@section('main.content')
<x-title>
    {{ __('Редактировать доску') }}
    <x-slot name="link">
        <a href="{{ route('user.boards.show', $board->id) }}">{{ __('назад') }}</a>
    </x-slot>
</x-title>  
<div class="row">
    <x-form action="{{ route('user.boards.update', $board->id) }}" method="POST">
        @method('PUT')
        <x-label required>{{ __('Название доски') }}</x-label>
        <x-input name="title" value="{{ $board->title }}" autofocus/>

        <x-label required>{{ __('Содержание доски') }}</x-label>
        <input id="content" value="{{ $board->content}}" type="hidden" name="content">
        <trix-editor input="content"></trix-editor>
        <x-button>
            {{ __('Сохранить') }}
        </x-button>
    </x-form>
</div>
@endsection


@push('css')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
@endpush
@push('js')
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush