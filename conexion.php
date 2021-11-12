<?php
$link = @mysqli_connect('localhost', 'root', '', 'estacionamiento');

if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}
  ?>
