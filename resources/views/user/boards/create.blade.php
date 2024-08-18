@extends('layouts.main')

@section('title', 'Создать доску')

@section('main.content')
<x-title>
    {{ __('Создать доску') }}
    <x-slot name="link">
        <a href="{{ route('user.boards.index') }}">{{ __('к постам') }}</a>
    </x-slot>
</x-title>
<div class="row">
    <x-form action="{{ route('user.boards.store') }}" method="POST">
        <x-label required>{{ __('Название доски') }}</x-label>
        <x-input name="title" autofocus/>

        <x-label required>{{ __('Содержание доски') }}</x-label>
        <input id="x" type="hidden" name="content">
        <trix-editor class="mb-3" rows='10'></trix-editor>
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
