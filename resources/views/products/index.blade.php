@extends('layouts.basic')

@section('title','Alla Produkter')

@section('header','Produkter')

@section('content')

@foreach ($products as $product)
	<div class="row">
		<div class="col-sm-3">{{ $product->item }}</div>
		<div class="col-sm-5">{{ $product->item_description}}</div>
		<div class="col-sm-2">{{ $product->listprice}}</div>
		<div class="col-sm-2">{{ $product->created_at}}</div>
	</div>
@endforeach

@endsection


