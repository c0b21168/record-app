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
            <form action="/pos" method="POST">
                @csrf
                <input type="hidden" name="max_records[user_id]" value="{{$user_id}}"></input>
                日付: 
                <input type="date" name="max_records[training_date]"></input>
                <p class="title__error" style="color:red">{{ $errors->first('max_records.training_date') }}</p>
                <div class="weight">
                    重さ: 
                    <input
                        type="text"
                        name = "max_records[max_weight]"
                        pattern="^([1-9]\d*|0)(\.\d+)?{1,5}$"
                        inputmode="numeric"
                    >
                    <p class="title__error" style="color:red">{{ $errors->first('max_records.max_weight') }}</p>
                <div class="menus">
                    <select class="form-select" id="menu_id" name="max_records[menu_id]">
                        @foreach ($menus as $menus)
                            <option value="{{ $menus->id }}" >{{$menus->name}}</option></option>
                        @endforeach
                    </select>
                    </label>
                </div>
                <button class="rounded bg-indigo-600 px-4 py-2 mt-4" type=“button”>
                    <div class="text-white">登録</div>
                </button>
            </form>
        </body>
    </x-app-layout>
</html>