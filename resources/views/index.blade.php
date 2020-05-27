<!DOCTYPE html>
<html lang="es">
  
    @yield('cabecera')
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <a class="navbar-brand" href="#">
        <img src="image/ven911sucre.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
        <p class="text-name mt-3">VEN 9-1-1 Sucre</p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li><button type="button" class="btn btn-outline-light">
            Notificaciones <span class="badge badge-light">4</span>
          </button>
        </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
        @yield('prueba-contenido')
    </div>
    @yield('footer')
  </body>
</html>