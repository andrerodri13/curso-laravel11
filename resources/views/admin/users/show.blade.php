@extends('admin.layouts.app')
@section('title', 'Detalhes do usuário')

@section('content')
    <h1>Detalhes do usuário {{$user->name}}</h1>

    <ul>
        <li>Nome: {{$user->name}}</li>
        <li>E-Mail: {{$user->email}}</li>
    </ul>

    <x-alert/>

    @can('owner', $user)
        Pode Deletar
    @endcan


    @can('is-admin')
        <form action="{{route('users.destroy', $user->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Deletar</button>
        </form>
    @endcan
@endsection

