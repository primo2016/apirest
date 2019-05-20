@extends('layouts.app')

@section('content')
	<a href="{{ route('user.index') }}" class="btn btn-primary" >Volver a la lista</a>
	@include('users.partials.form')

@endsection