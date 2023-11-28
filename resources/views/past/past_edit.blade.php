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
            <form action="/past_record/{{$records->id}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="records[user_id]" value="{{$user_id}}">
                日付: 
                <input type="date" name="records[training_date]" value = {{$records->training_date}}></input>
                <p class="title__error" style="color:red">{{ $errors->first('records.training_date') }}</p>
                <div class="weight">
                    重量: 
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
                    種目:
                    <select class="form-select" id="menu_id" name="records[menu_id]">
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