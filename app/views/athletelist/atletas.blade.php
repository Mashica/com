@extends('athletelist.masterathletelist')


@section('header')
	@if($atype == 'ex')

		<h1>Ex-Athlete List</h1><br>[<a href="/atletas">mostrar atletas Mashica actuales</a>]
		

	@else

		<h1>Athlete List</h1><br>[<a href="/exatletas">mostrar atletas Mashica anteriores</a>]
		
	@endif

@stop


@section('pagebody')


    @foreach($users as $atleta)
        <p>{{ $atleta->name }} {{ $atleta->lastname1 }} {{ $atleta->lastname2 }}</p>
    @endforeach

@stop
