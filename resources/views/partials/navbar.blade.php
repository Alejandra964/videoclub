<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-clapperboard"></i> VideoClub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" style="margin-left:30em">
            <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}"> <i class="fa-solid fa-house"></i>Principal</a>
              </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/catalog')}}"><i class="fa-solid fa-table-list"></i>Listado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/catalog/create')}}"><i class="fa-solid fa-pencil"></i>Crear</a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{url('/catalog')}}">Index</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>-->
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
