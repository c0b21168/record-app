<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menus</title>
        <!-- Fonts -->
        l<link href="https://fonts.googeapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
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
                <input type="submit" value="グラフの表示"/>
            </form>
            
            <a href="/post">データ登録</a>
        </body>
    </x-app-layout>
</html>