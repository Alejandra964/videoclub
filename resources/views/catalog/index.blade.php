@extends('layouts.master')
@section('content')
    <div class="row">
        <h1 class="my-5 text-center">Listado de Peliculas</h1>
        <hr>
        @foreach ($arrayPeliculas as  $p )
            <div class="col-4" style="margin-bottom: 2em" >
                <div class="card h-100" id="carta">
                    @if (strpos($p->poster,'http')!==false)
                        <img src="{{$p->poster}}" class="card-img-top h-100" alt="{{$p->titulo}}">
                    @else
                    <img src="{{asset("storage/".$p->poster)}}" class="card-img-top h-100" alt="{{$p->titulo}}">

                    @endif
                    <div class="card-body">
                      <h5 class="card-title">{{$p->titulo}}</h5>
                      <p class="card-text">{{$p->director}}</p>
                      <div class="d-grid gap-2">
                        <a href="{{url('/catalog/show/'.$p->id)}}" class="btn btn-outline-secondary stretched-link">Más Información...</a>
                      </div>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@stop
