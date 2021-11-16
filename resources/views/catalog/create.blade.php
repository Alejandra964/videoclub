@extends('layouts.master')
@section('content')
<h1 class="my-5 text-center">Añadir Pelicula</h1>
<hr>
<div class="row" style="padding-left: 2em; margin-bottom: 1em">
    <div class="col" >
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
                <label for="titulo">Titulo</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                <label for="director">Director</label>
              </div>

              <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>
                <input class="form-control" type="file" id="poster" name="poster">
              </div>



              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="year" name="year" placeholder="Year">
                <label for="year">Año</label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="rentada" name="rentada">
                <label class="form-check-label" for="rentada">
                  Rentada
                </label>
              </div>

              <div class="form-floating mb-3 ">
                <textarea class="form-control" placeholder="Sinopsis" name="sinopsis" id="sinopsis" style="height: 100px"></textarea>
                <label for="sinopsis">Sinopsis</label>
              </div>

              <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
</div>

@stop
