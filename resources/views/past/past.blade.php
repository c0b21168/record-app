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
                {{ __('過去の記録') }}
            </h2>
        </x-slot>
        <body>
        <form action="/past_record" method="POST">
            @csrf
            <input type="hidden" name="records[user_id]" value="{{$user_id}}">
            日付を選択してください
            <div>
                <select name="post[training_date]">
                    @foreach($records->unique("training_date") as $records)
                        <option value="{{ $records->training_date}}">{{ $records->training_date }}</option>
                    @endforeach
                </select>
            </div>
            <p class="title__error" style="color:red">{{ $errors->first('post.training_date') }}</p>
            <button class="rounded bg-indigo-600 px-4 py-2 mt-4" type=“button”>
                <div class="text-white">表示</div>
            </button>
        </form>
        </body>
    </x-app-layout>
</html>