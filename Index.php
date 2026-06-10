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
      <li><a href="Index.php"><b>Inicio</b></a></li>
      <li><a href="verlibro.php"><b>Libros</b></a></li>
      <li><a href="versocio.php"><b>Socios</b></a></li>
      <li><a href="verprestamo.php"><b>Prestamos</b></a></li>
      <li><a href="#"><b>Contacto</b></a></li>
    </ul>

  </nav>

<div class="container">

    <h1 class="titulo"><br><br><b>Bienvenidos</b></h1>

    <div class="row mt-5">

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="https://statics.forbesuruguay.com/2024/11/crop/67407a774a603__600x390.webp" alt="Libros">
                <div class="card-body">
                    <h5 class="card-title">Libritos</h5>
                    <p class="card-text">Libritos disponibles</p>
                    <a href="verlibro.php" class="btn btn-primary">Ver Libritos</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="https://portalsocios.com/assets/img/comunidad-portal-socios1.png" alt="Socios">
                <div class="card-body">
                    <h5 class="card-title">Socios</h5>
                    <p class="card-text">Sociedad de lectores</p>
                    <a href="versocio.php" class="btn btn-primary">Ver Socios</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLfB2R3avYAP-mu4DI27Gz26QW7mcJDZTMn3TafilEoWUBRZ4kJoS_Bywt&s=10" alt="Prestamos">
                <div class="card-body">
                    <h5 class="card-title">Prestamos</h5>
                    <p class="card-text">Prestamos hechos</p>
                    <a href="verprestamo.php" class="btn btn-primary">Ver Prestamos</a>
                </div>
            </div>
        </div>

    </div>

    <footer class="bg-dark text-white text-center p-3 mt-5">
        Biblioteca de los guri
    </footer>

</div>
</body>
</html>