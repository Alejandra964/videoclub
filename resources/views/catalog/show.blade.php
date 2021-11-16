@extends('layouts.master')
@section('content')
    <h1 class="my-5 text-center">Vista Detalle de la Pelicula</h1>
    <hr>
    <div class="row">
        <div class="col-md-4">
            @if (strpos($pelicula->poster,'http')!==false)
                <img src="{{$pelicula->poster}}" class="img-fluid" alt="{{$pelicula->titulo}}">
            @else
                <img src="{{asset("storage/".$pelicula->poster)}}" class="img-fluid" alt="{{$pelicula->titulo}}">

            @endif
        </div>
        <div class="col-md-8" >
            <h2 class="text-center mb-3">{{$pelicula->titulo}}</h2>
            <div class="mb-3"><span class="fw-bold">Director: </span>{{$pelicula->director}}</div>
            <div class="mb-3"><span class="fw-bold">Sinopsis: </span>{{$pelicula->sinopsis}}</div>
            <div class="mb-3"><span class="fw-bold">Año: </span>{{$pelicula->year}}</div>
            <div class="mb-3"><span class="fw-bold">Rentada:</span>
                @if ( $pelicula['rentada'])
                    La pelicula fue rentada
                @else
                    La pelicula no fue rentada
                    @endif
            </div>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                @if ( $pelicula['rentada'])
                    <a type="button" class="btn btn-outline-danger"><i class="fa-solid fa-box-circle-check"></i> Devolución</a>

                @else
                    <a type="button" class="btn btn-outline-success"><i class="fa-solid fa-calendar-check"></i> Prestar</a>
                @endif
            </div>
                <a href=""  type="button" class="btn btn-outline-warning"><i class="fa-solid fa-user-pen"></i> Editar datos</a>
                <a href="{{url('/catalog')}}" type="button" class="btn btn-outline-info"><i class="fa-solid fa-clapperboard"></i> Revisar catalogo</a>

        </div>
    </div>
@stop
