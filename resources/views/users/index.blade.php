@extends('layouts.app')

@section('content')
	<h1>Usuarios</h1>
	<br>
	<a href="{{ route('user.create') }}" class="btn btn-primary" >Nuevo usuario</a>

	@include('users.partials.list')

@endsection