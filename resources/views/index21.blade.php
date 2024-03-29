@extends('templates.themeVue')

@section('title', 'School Of Computer Science UNSA')

@section('scripts')

@endsection

@section('home', 'active')

@section('body')

	<div class="body" style="height: 100vh;">
		<div id="app">
			<header-component></header-component>
			<aboutus-component></aboutus-component>
			{{-- <firstvideo-component></firstvideo-component> --}}
			<ponents-component></ponents-component>
			<div class="container">
				<hr>
			</div>
			<program-component></program-component>
			<div class="container">
				<hr>
			</div>
			<comite-component></comite-component>
			<div class="container">
				<hr>
			</div>
			<sponsors-component></sponsors-component>
			<modal-persona-component></modal-persona-component>
			<custom-modal-component></custom-modal-component>
			<footer-component></footer-component>
		</div>
	</div>
	

@endsection
