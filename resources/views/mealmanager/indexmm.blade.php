@extends('adminlte::page')

@section('title', '4DK Manager')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="/home">Dashboard</a></li>
        <li> <a href="/clients">MealManager</a></li>
        <li class="active">Overview</li>
    </ol>
    <h1>Meals Overview</h1>
@stop

@section('content')
    @if(Auth::user()->admin === 1)
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Naam</th>
                    <th>Ontbijt</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->code }}</td>
                        <td>{{ $client->name }}</td>
                        <td><i class="fa fa-times fa-2x text-danger"></i></td>
                        <td><i class="fa fa-check fa-2x text-success"></i></td>
                        <td><i class="fa fa-times fa-2x text-danger"></i></td>
                        {{--<td>{{ $client->function }}</td>--}}
                        {{--<td>{{ $client->tent }}</td>--}}
                        {{--<td>{{ $client->field }}</td>--}}
                        <td>
                            <button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-primary"><i class="fa fa-wrench" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger disabled"><i class="fa fa-ban" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        @include('layouts.unauthorized-error-return')
    @endif
@stop