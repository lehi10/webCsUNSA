@extends('templates.themeVue')

@section('title', 'School Of Computer Science UNSA')

@section('scripts')

@endsection

@section('home', 'active')

@section('body')

	<div class="body theme-bg-primary" style="height: 100vh;">
		<div id="app" class="theme-bg-primary">
			<header-component></header-component>
			<footer-component></footer-component>
		</div>
	</div>
	

@endsection
