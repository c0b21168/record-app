<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
                {{ __('筋トレ記録') }}
            </h2>
        </x-slot>
        <body>
            <form action="/record_post" method="POST">
                @csrf
                <input type="hidden" name="records[user_id]" value="{{$user_id}}">
                <p class="title__error" style="color:red">{{ $errors->first('records.user_id') }}</p>
                日付: 
                <input type="date" name="records[training_date]"></input>
                <p class="title__error" style="color:red">{{ $errors->first('records.training_date') }}</p>
                <div class="weight">
                    重さ: 
                    <input
                        type="text"
                        name = "records[weight]"
                        pattern="^([1-9]\d*|0)(\.\d+)?{1,5}$"
                        inputmode="numeric"
                    >
                    <p class="title__error" style="color:red">{{ $errors->first('records.weight') }}</p>
                <div class="times">
                    回数: 
                    <input
                        type="text"
                        name = "records[times]"
                        pattern="^[1-9][0-9]*{1,2}$"
                        inputmode="numeric"
                    >
                    <p class="title__error" style="color:red">{{ $errors->first('records.times') }}</p>
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
                <p class="title__error" style="color:red">{{ $errors->first('records.menu_id') }}</p>
                <input type="submit" value="登録" />
            </form>
        </body>
    </x-app-layout>
</html>