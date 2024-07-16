@extends('layouts.app')

@section('header', 'Изменить карточку')

@section('content')
{{ html()->modelForm($card, 'PATCH', route('cards.update', $card))->open() }}
    @include('card.form')
    {{ html()->submit('Обновить') }}
{{ html()->closeModelForm() }}
@endsection
