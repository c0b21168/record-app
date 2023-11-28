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
            @foreach ($record as $record)
                <div>記録{{$record->Menu->name}}|{{$record->weight}}kg{{$record->times}}回
                    <button class="rounded bg-indigo-600 px-4 py-2 mt-4" type=“button”>
                        <a href="past_record/{{ $record->id }}/past_edit">
                            <div class="text-white">edit</div>
                        </a>
                    </button>
                </div>
            @endforeach
            
        </body>
    </x-app-layout>
</html>