@extends('athletelist.masterathletelist')


@section('header')
    Athlete List

@stop


@section('pagebody')


    @foreach($users as $atleta)
        <p>{{ $atleta->name }} {{ $atleta->lastname1 }} {{ $atleta->lastname2 }}</p>
    @endforeach

@stop
