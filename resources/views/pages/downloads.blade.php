@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li class="active">Downloads</li>
    </ol>
    <h1>Downloads</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <h2>Download (belangrijke) informatie</h2>
        <br>
        <br>
        <br>
        <img src="http://cdn.wouwlite.eu/4dk.nl/images/404errorStarWars.gif">
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop