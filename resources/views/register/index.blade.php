@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
<x-card>
    <x-card-header>
        <x-card-title>
            {{ __('Регистрация') }}
        </x-card-title>

        <x-slot name='right'>
            <a href="{{ route('login') }}">
                {{ __('Вход') }}
            </a>
        </x-slot>
    </x-card-header>
    <x-card-body>
        <x-form action="{{ route('register.store') }}" method="POST">
            @csrf
            <x-form-item>
                <x-label required>{{ __('Имя') }}</x-label>
                <x-input name="name" autofocus/>
            </x-form-item>
            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                <x-input type="email" name="email"/>
            </x-form-item>
            <x-form-item>
                <x-label required>{{ __('Пароль') }}</x-label>
                <x-input type="password" name="password"/>
            </x-form-item>
            <x-form-item>
                <x-label required>{{ __('Повторите пароль') }}</x-label>
                <x-input type="password" name="password_confirmation"/>
            </x-form-item>

            <x-form-item>
                <x-checkbox name="user_confirm">
                    {{ __('Я согласен на обработку пользовательских данных') }}
                </x-checkbox>
            </x-form-item>   

            <x-button>
                {{ __('Войти') }}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>
@endsection
