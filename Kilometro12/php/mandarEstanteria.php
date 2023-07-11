<?php
include 'conexcion.php';
$id = $_GET['id'];
$filaEstan = $_GET['fila'];
$columEstan = $_GET['columna'];
$producto = $_GET['productos'];
$filaPallet = $_GET['filaP'];
$columPallet = $_GET['columnaP'];
$fechLlegada = $_GET['fechaLl'];
$fechSalida = $_GET['fechaSa'];

$ingresarPallet = "insert into pallet(ListProd, fila, columna, fechaSa, fechaLl, estanteria) values ('$producto', $filaPallet, $columPallet, '$fechSalida', '$fechLlegada', $id)";
$ingresarEstan = "insert into estanteria(id, fila, columna) values ($id, $filaEstan, $columEstan)";
if ($conexion->query($ingresarEstan) === TRUE) {
    header('location:show.php');
  } else {
    echo "Error: " . $ingresarEstan . "<br>" . $conexion->error;
  }
  if ($conexion->query($ingresarPallet) === TRUE) {
    header('location:show.php');
  } else {
    echo "Error: " . $ingresarPallet . "<br>" . $conexion->error;
  }
?>