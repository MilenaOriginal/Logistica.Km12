<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kiosco25hs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="JavaScript.js">
    <link rel="stylesheet" href="../styles.css">
</head>
<style>
  *{
    margin: 0;
    padding: 0;
  }
</style>
<body>
<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
          <a class="navbar-brand" href="show.php" >Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 35%;">
          </div>
        </div>
      </nav>
    </header>
    <br></br>
    <div class = "row">
        <?php
        include 'conexcion.php';
        $sql = "SELECT p.fila, p.columna, e.id, p.ListProd, p.fechaSa, p.fechaLl FROM pallet p inner join estanteria e on p.estanteria = e.id";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo 
            '
            <div class="col-2">
            <div class="card" style="width: 18rem;">
            <h3 class="card-title" class="form-label">
                <label for="disabledSelect" class="form-label">Pallets: </label>
              </h3>
              <h4 class="card-title" class="form-label">
                <label for="disabledSelect" class="form-label">Id de estanteria </label>
              </h4>    
              <h5>
              '.$row['id'].'
              </h5>
              <h4 class="card-title" class="form-label">
              <label for="disabledSelect" class="form-label">Producto: </label>
            </h4>    
            <h5>
            '.$row['ListProd'].'
            </h5>
              <h4 class="card-title" class="form-label">
              <label for="disabledSelect" class="form-label">Ubicacion (fila): </label>
            </h4>    
            <h5>
            '.$row['fila'].'
            </h5>
            <h4 class="card-title" class="form-label">
            <label for="disabledSelect" class="form-label">Ubicacion (columna) </label>
          </h4>    
          <h5>
          '.$row['columna'].'
          </h5>
          <h4 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Llegó el: </label>
        </h4>    
        <h5>
        '.$row['fechaLl'].'
        </h5>
        <h4 class="card-title" class="form-label">
            <label for="disabledSelect" class="form-label">Salio el: </label>
          </h4>    
          <h5>
          '.$row['fechaSa'].'
          </h5>
      </div>
    </div>';
          }
        } else {
          echo "No se encontraron registros en la tabla de stock.";
        }
        ?>
      </div>
</body>
</html>
