<?php

require_once "socio.php";

$socio1 = new Socio("Julio", 67, "julio67@gmail.com");
$socio2 = new Socio("Juan", 69, "juan69@gmail.com");
$socio3 = new Socio("Jaime", 42, "jaime42@gmail.com");

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

    <footer class="bg-dark text-white">
        Biblioteca de los guri
    </footer>

</div>

</body>
</html>