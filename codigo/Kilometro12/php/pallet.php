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
        $sql = "SELECT p.fila, p.columna, e.id FROM pallet p inner join estanteria e on p.estanteria = e.id";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo 
            '
            <div class="col-2">
            <div class="card" style="width: 18rem;">
            <h5 class="card-title" class="form-label">
                <label for="disabledSelect" class="form-label">Pallets: </label>
              </h5>
              <h5 class="card-title" class="form-label">
                <label for="disabledSelect" class="form-label">Id de estanteria '.$row['id'].'</label>
              </h5>    
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Ubicacion (Fila) '.$row['fila'].'</label>
        </h5>
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Ubicacion (Columna) '.$row['columna'].'</label>
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
