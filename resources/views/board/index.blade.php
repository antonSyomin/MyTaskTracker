@extends('layouts.main')

@section('title', 'Доски')

@section('main.content')
    <x-title>
        {{ $subTitle }}
    </x-title>
    @if(empty($boards))
        <div>
            {{ __('В вашем пространстве еще нет досок') }}
        </div>
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