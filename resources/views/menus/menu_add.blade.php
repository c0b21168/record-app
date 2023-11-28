<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <form action="menu_add/menus" method="POST">
                @csrf
                <input type="hidden" name="menus[user_id]" value="{{$user_id}}">
                <input type="text" name="menus[name]"></input>
                <p class="title__error" style="color:red">{{ $errors->first('menus.name') }}</p>
                <button class="rounded bg-indigo-600 px-4 py-2 mt-4" type=“button”  onclick="location.href='/menus/menu_add'">
                    <div class="text-white">登録</div>
                </button>
            </form>
        </body>
    </x-app-layout>
</html>