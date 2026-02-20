

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Listagem do Capeador</title>
    </head>
    <body>
    @extends('layouts.app')

    @section('title', 'Capeador') 

    @section('content')
        <h1>Capeador</h1>

        @if ($errors->any())
            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="#" method="post">
            @csrf
            <h4>Pesquisa Geral</h4>
            <input type="text" name="name" placeholder="Pesquisa por ID, nome...:" value="{{ old ('name') }}">
            <input type="email" name="email" placeholder="Todos" value="{{ old ('email') }}">
            <input type="password" name="password" placeholder="Senha:">
            <button  type="submit">
                Pesquisar
            </button>
        </form>

    @endsection
    </body>
</html>