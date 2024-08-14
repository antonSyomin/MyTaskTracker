@extends('layouts.base')

@section('title', 'Доски')

@section('content')
<h1 class="mb-5">{{ $subTitle }}</h1>

@if(empty($boards))
<div>
    {{ __('В вашем пространстве еще нет досок') }}
</div>
@else
@foreach($boards as $board)
    <div class="mb-4">
        <h5>
            <a href="{{ route('user.boards.show', $board->id) }}">{{ $board->title }}</a>
        </h5>
        <p>
            {{ $board->content }}
        </p>
    </div>
@endforeach
@endif
@endsection