@extends('layouts.master')
@section('content')

    <h1 class="my-5 text-center">Modificar Pelicula</h1>
<hr>
<div class="row" style="padding-left: 2em; margin-bottom: 1em">
    <div class="col" >
        <form action="" >
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
                <label for="titulo">Titulo</label>
              </div>

              <div class="form-floating">
                <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                <label for="director">Director</label>
              </div>

              <div class="form-floating">
                <input type="text" class="form-control" id="poster" name="poster" placeholder="Poster">
                <label for="poster">Poster</label>
              </div>



              <div class="form-floating">
                <input type="number" class="form-control" id="year" name="year" placeholder="Year">
                <label for="year">Año</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="prestado" name="prestado">
                <label class="form-check-label" for="prestado">
                  Prestado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="devuelto" name="devuelto" checked>
                <label class="form-check-label" for="devuelto">
                  Devuelto
                </label>
              </div>

              <div class="form-floating ">
                <textarea class="text" placeholder="sinopsis" name="sinopsis" id="sinopsis" style="height: 100px"></textarea>
                <label for="sinopsis"></label>
              </div>

              <button class="btn btn-primary" type="submit">Modificar Pelicula</button>
        </form>
    </div>
</div>

@stop
