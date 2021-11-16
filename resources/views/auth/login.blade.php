@extends('layouts.master')
@section('content')

<h1 class="my-5 text-center">Login Usuario</h1>
<hr>
<div class="row" style="padding-left: 2em; margin-bottom: 1em">
    <div class="col">
          <form class="row g-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre">
              </div>
              <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido">
              </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="col-md-6">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="col-12">
              <label for="direccion" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="direccion" placeholder="1234 Main St">
            </div>

            <div class="col-12">
              <label for="inputState" class="form-label">Departamento</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
              </div>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-outline-success">Sign in</button>
            </div>
          </form>
    </div>
</div>
@stop
