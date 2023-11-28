<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menus</title>
        <!-- Fonts -->
        l<link href="https://fonts.googeapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
                {{ __('MAX記録') }}
            </h2>
        </x-slot>
        <body>
            <form action="/graph" method="POST">
                @csrf
                <input type="hidden" name="records[user_id]" value="{{$user_id}}">
                <div class="menus">
                    <select class="form-select" id="menu_id" name="records[menu_id]">
                        @foreach ($menus as $menus)
                            <option value="{{ $menus->id }}" >{{$menus->name}}</option></option>
                        @endforeach
                    </select>
                    </label>
                </div>
                <button class="rounded bg-indigo-600 px-4 py-2 mt-4" type=“button”>
                    <div class="text-white">グラフの表示</div>
                </button>
            </form>
            
            <button class="rounded bg-indigo-600 px-4 py-2 mt-4" type=“button”>
                <a class="text-white" href="/post">データ登録</a>
            </button>
            
        </body>
    </x-app-layout>
</html>