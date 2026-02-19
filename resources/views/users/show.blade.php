<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8"/>
            <title>Document</title>
        </head>
    <body>
        @extends('layouts.app')

        @section('title', 'Listagem do Usuário') 

        @section('content')
            <h1>Listagem do Usuário {{ $user->name }}</h1>

            <ul>
                <li>{{ $user->name }}</li>
                <li>{{ $user->email }}</li>
            </ul>

            <form action="{{route('users.delete', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button>Deletar</button>
            </form>

        @endsection
    </body>
</html>