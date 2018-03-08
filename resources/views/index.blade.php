@extends('layouts/default')
@section('title', trans('title.index'))
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css') }}">
@stop
@section('content')
	<center>
		<h1>Selamat Datang di TeaShop</h1>
		<div class="menu">
			<a href="{{ route('menu.how_to_order') }}">
				<h3>{{ trans('menu/index.1') }}</h3>
			</a>
		</div>
		<div class="menu">
			<a href="{{ route('menu.price_list') }}">
				<h3>{{ trans('menu/index.2') }}</h3>
			</a>
		</div>
		<div class="menu">
			<a href="{{ route('menu.how_to_order') }}">
				<h3>{{ trans('menu/index.3') }}</h3>
			</a>
		</div>
	</center>
@stop