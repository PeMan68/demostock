@extends('layouts.basic')

@section('title','Imortera filer')

@section('header','Uppdatera prisfil från Excel-fil')

@section('content')

	<div class="card-body">
		<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="file" class="form-control">
			<br>
			<button class="btn btn-success">Importera</button>
		</form>
	</div>
@endsection
