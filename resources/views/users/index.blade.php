@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Listagem dos Usuários
    <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white px-4 text-sm">Pesquisar</button>
</form>

<table class="min-w-full leadind-normal shadow-md rounded-lg overflow-hidden">
    <thead">
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nome</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">E-mail</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Ações</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

    @foreach ($users as $user)
    <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->name }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->email }}</td>
        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
            <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection


