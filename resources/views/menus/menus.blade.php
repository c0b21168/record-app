<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSSの読み込み -->
        <link href=""{{ asset('css/style.css') }}"" rel="stylesheet" >
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
                {{ __('種目一覧') }}
            </h2>
        </x-slot>
        <body>
            @foreach($menus as $menus)
                <div class="menus mt-4 text-xl rounded shadow-lg bg-white hover:bg-gray-600">種目名: {{$menus->name}}</div>
            @endforeach
            <button class="rounded bg-indigo-600 px-4 py-2 mt-4" type=“button”  onclick="location.href='/menus/menu_add'">
                <div class="text-white">追加</div>
            </button>
        </body>
    </x-app-layout>
</html>
            