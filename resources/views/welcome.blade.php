@yield('cabecera', View::make('head'))
<body>
  <div class="container">
    <div class="row sesiones justify-content-md-center align-items-center">
      <div class="col-sm-3 sesiones__details">
        <!-- <div class="row justify-content-md-between">
          <div class="col-sm-4">
            <img src="image/ministerio.PNG" alt="">
          </div>
          <div class="col-sm-4">
            <img src="image/ministerio.PNG" alt="">
          </div>
          <div class="col-sm-4">
            <img src="image/cuadrantes.PNG" alt="">
          </div>
        </div>
        <div class="row justify-content-md-center mt-3">
          <img src="image/ven911sucre.png" alt="">
        </div> -->
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1"><strong>Usuario</strong></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese usuario de Ven9-1-1">
            <!-- <small id="emailHelp" class="form-text text-muted">mensaje</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><strong>Contraseña</strong></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" >
          </div>
          <button type="submit" class="btn btn-danger">Enviar</button>
        </form>
      </div>
      <!-- <div class="col-sm-4">
        otro
      </div> -->
    </div>
  </div>
  @section('footer')
  
  @endsection
</body>
</html>