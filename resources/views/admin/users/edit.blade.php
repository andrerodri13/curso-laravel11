@extends('admin.layouts.app')
@section('title', 'Editar o usuário')

@section('content')

    <h1>Editar usuário {{$user->name}}</h1>

    {{--    @include('admin.includes.errors')--}}
    <x-alert/>

    <form action="{{route('users.update', $user->id)}}" method="POST">
        @method('put')
        @include('admin.users.partials.form')
    </form>
@endsection
