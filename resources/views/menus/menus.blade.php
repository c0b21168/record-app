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
        <body>
            @foreach($menus as $menus)
                <div class="menus">種目名: {{$menus->name}}</div>
            @endforeach
            <button type=“button” onclick="location.href='/menus/menu_add'">追加</button>
        </body>
    </x-app-layout>
</html>
            