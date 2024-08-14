@extends('layouts.base')

@section('title', 'Доска')

@section('content')
<a href="{{ route('user.boards.index') }}">{{ __(назад) }}</a>
<h1>{{ $board->title }}</h1>
<div class="mb-4">
    <p>
        {{ $board->content }}
    </p>
</div>
@endsection
