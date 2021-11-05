@extends('templates.themeVue')

@section('title', 'School Of Computer Science UNSA')

@section('scripts')

@endsection

@section('home', 'active')

@section('body')

	<div class="body" style="height: 100vh;">
		<div id="app">
			<header-component></header-component>
			<div class="container">
				<hr>
			</div>
			<comite-component></comite-component>
			<modal-persona-component></modal-persona-component>
			<custom-modal-component></custom-modal-component>


		</div>
	</div>
	

@endsection
