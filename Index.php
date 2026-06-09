<?php

require_once "libro.php";
require_once "socio.php";
require_once "prestamo.php";

$libro1 = new Libro("Jumanji", "La Roca", 1999, 167);
$libro2 = new Libro("El Principito", "Antonio Exupery", 1943, 96);
$libro3 = new Libro("Metamorfosis", "Franz Kafka", 1915, 120);

$socio1 = new Socio("Julio", 67, "julio67@gmail.com");
$socio2 = new Socio("Juan", 69, "juan69@gmail.com");
$socio3 = new Socio("Jaime", 42, "jaime42@gmail.com");

$prestamo1 = new Prestamo($socio1,$libro1,"27/03/2026","03/04/2026");
$prestamo2 = new Prestamo($socio2,$libro2,"05/03/2026","16/03/2026");
$prestamo3 = new Prestamo($socio3,$libro3,"17/02/2026","25/02/2026");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>

    <div class="font">
      BIBLIOTECA<span>.</span>
    </div>

    <ul>
      <li><a href="#"><b>Inicio</b></a></li>
      <li><a href="#"><b>Libros</b></a></li>
      <li><a href="#"><b>Socios</b></a></li>
      <li><a href="#"><b>Prestamos</b></a></li>
      <li><a href="#"><b>Contacto</b></a></li>
    </ul>

  </nav>




<div class="container">

    <h1 class="titulo"><br><br><b>Bienvenidos</b></h1>

    <div class="row">

        <div class="col-12">

            <div class="card">
                <div class="card text-white bg-dark mb-3">
                     <b>Libros</b>
                </div>

                <div class="card-body">
                    <?php
                    echo $libro1->mostrarInfo();
                    echo "<hr>";
                    echo $libro2->mostrarInfo();
                    echo "<hr>";
                    echo $libro3->mostrarInfo();
                    ?>
                </div>
            </div>

        </div>

        <div class="col-12">

            <div class="card">
                <div class="card text-white bg-dark mb-3">
                    Socios
                </div>

                <div class="card-body">
                    <?php
                    echo $socio1->mostrarInfo();
                    echo "<hr>";
                    echo $socio2->mostrarInfo();
                    echo "<hr>";
                    echo $socio3->mostrarInfo();
                    ?>
                </div>
            </div>

        </div>

        <div class="col-12">

            <div class="card">
                <div class="card text-white bg-dark mb-3">
                    Préstamos
                </div>

                <div class="card-body">
                    <?php
                    echo $prestamo1->mostrarInfo();
                    echo "<hr>";

                    echo $prestamo2->mostrarInfo();
                    echo "<hr>";

                    echo $prestamo3->mostrarInfo();
                    ?>
                </div>
            </div>

        </div>

    </div>

    <footer class="bg-dark text-white">
        Biblioteca de los guri
    </footer>

</div>

</body>
</html>