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
            <form action="/record_post" method="POST">
                @csrf
                <input type="hidden" name="records[user_id]" value="{{$user_id}}">
                日付: 
                <input type="date" name="records[training_date]"></input>
                <div class="weight">
                    重さ: 
                    <input
                        type="text"
                        name = "records[weight]"
                        pattern="^([1-9]\d*|0)(\.\d+)?{1,5}$"
                        inputmode="numeric"
                    >
                <div class="times">
                    回数: 
                    <input
                        type="text"
                        name = "records[times]"
                        pattern="^[1-9][0-9]*{1,2}$"
                        inputmode="numeric"
                    >
                </div>
                </div>
                <div class="menus">
                    <select class="form-select" id="menu_id" name="records[menu_id]">
                        @foreach ($menus as $menus)
                            <option value="{{ $menus->id }}" >{{$menus->name}}</option></option>
                        @endforeach
                    </select>
                    </label>
                </div>
                <input type="submit" value="登録"/>
            </form>
        </body>
    </x-app-layout>
</html>