@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')

<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Listagem dos Usuários
    (<a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>)
</h1>

<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white px-4 text-sm">Pesquisar</button>
</form>
<table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
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


