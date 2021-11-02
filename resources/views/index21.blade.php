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
			<firstvideo-component></firstvideo-component>
			<ponents-component></ponents-component>
			<program-component></program-component>
			<footer-component></footer-component>
		</div>
	</div>
	

@endsection
