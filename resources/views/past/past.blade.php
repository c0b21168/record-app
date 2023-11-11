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
        <form action="/past_record" method="POST">
            @csrf
            日付を選択してください
            <div>
                <select name="post[training_date]">
                    @foreach($records as $records)
                        <option value="{{ $records->training_date}}">{{ $records->training_date }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="表示"/>
        </form>
        </body>
    </x-app-layout>
</html>