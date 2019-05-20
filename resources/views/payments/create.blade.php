@extends('layouts.app')

@section('content')
	<a href="{{ route('payment.index', [$usuario->_id]) }}" class="btn btn-primary" >Volver a la lista</a>

	@include('payments.partials.form')

@endsection