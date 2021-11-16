@extends('layouts.master')
@section('content')
    <h1>Pantalla principal</h1>
    <hr>
    <a href="{{url('/auth/login')}}" type="button" class="btn btn-outline-info"><i class="fa-solid fa-user"></i> Login Usuario</a>

@stop
