<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles.css">
  </head>
<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="show.php" >Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 35%;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Desea... .
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../html/contraDu.html">Crear Producto(Solo accesible para el dueño)</a></li>
                  <li><a class="dropdown-item" href="../html/agreProd.html">Agregar Producto</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    </nav>
</header>
<body >
  <div class = "col">
    <div class="card" style="width: 30rem; margin-left: 36%; margin-top: 1%;" >
        <div class="card-body">
            <form action="mandarEstanteria.php" method = "GET">
                <div>
                    <div class="row">
                        <div class="col">
                        <h3>
                            <label for="" class="form-label">Estanterias: </label>
                        </h3>
                        <label for="id" class="form-label">ID: </label>
                        <br>
                            <input type="text" name="id" id="id" value="" class="form-control">
                            <br>
                            <label for="fila" class="form-label">Fila: </label>
                        <br>
                            <input type="text" name="fila" id="fila" value="" class="form-control">
                        </div>
                        <div>
                            <label for="columna" class="form-label">Columna: </label>
                        <br>
                            <input type="text" name="columna" id="columna" value="" class="form-control">
                        <br>
                    </div>
                        <div class="col">
                            <h3>
                                <label for="" class="form-label">Pallet: </label>
                            </h3>
                                <label for="productos" class="form-label">Productos: </label>
                            <br>
                            <input type="text" name="productos" id="productos" value="" class="form-control">
                            <br>  
                            <label for="filaP" class="form-label">Fila: </label>
                            <br>
                            <input type="text" name="filaP" id="filaP" value="" class="form-control">
                            <br>
                            <br>
                            <label for="columnaP" class="form-label">Columna: </label>
                            <br>
                            <input type="text" name="columnaP" id="columnaP" value="" class="form-control">
                            </div>
                            <br>
                            <label for="fechaLl" class="form-label">Fecha de Llegada: </label>
                            <br>
                            <input type="date" name="fechaLl" id="fechaLl" value="" class="form-control">
                            </div>
                            <br>
                            <label for="fechaSa" class="form-label">Fecha de Salida: </label>
                            <br>
                            <input type="date" name="fechaSa" id="fechaSa" value="" class="form-control">
                            <br>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <br>
                <button type="reset" class="btn btn-primary">Borrar</button>
            </form>
        </div>
      </div>
    </div>
  </div> 
</body>
</html>
