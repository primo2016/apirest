@extends('layouts.app')

@section('content')
	<a href="{{ route('payment.create', [$usuario->_id]) }}" class="btn btn-primary" >Nuevo pago</a>

	@include('payments.partials.list')

@endsection