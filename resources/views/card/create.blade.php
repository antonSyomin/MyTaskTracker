@extends('layouts.app')

@section('header', 'Создать новую карточку')

@section('content')
{{ html()->modelForm($card, 'POST', route('cards.store'))->open() }}
    @include('card.form')
    {{ html()->submit('Создать') }}
{{ html()->closeModelForm() }}
@endsection
