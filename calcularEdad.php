<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Edad</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/array.css">
    
</head>
<body>
<header class="header">
        <div class="logo">
            <img src="img/Mountain.png" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="calcularEdad.php">Calcular Edad</a></li>
                <li><a href="juego.php">Piedra, Papel o tijeras.</a></li>
                <li><a href="potencia.php">Potencia</a></li>
                <li><a href="arrays.php">Arrays</a></li>
                <li><a href="calcularFecha.php">Fecha</a></li>
                
           </ul>            
        </nav>
        <a class="btn" href="index.php"><button>Home</button></a>
    </header>
    <br>
    <div class = "body">
    <h1>Calculadora de Edad</h1>
    <form method="post">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento">
        <input type="submit" value="Calcular Edad">
    </form>
    <?php
      function calcular_edad($fecha_nacimiento) {
        // Convierte la fecha de nacimiento en un objeto DateTime
        $fecha_nacimiento = new DateTime($fecha_nacimiento);
        // Obtiene la fecha actual
        $fecha_actual = new DateTime();
        // Obtiene el año de nacimiento
        $anio_nacimiento = $fecha_nacimiento->format('Y');
        // Obtiene el año actual
        $anio_actual = $fecha_actual->format('Y');
        // Calcula la edad
        $edad = $anio_actual - $anio_nacimiento;
        // Si el cumpleaños aún no ha pasado, resta un año
        if ($fecha_nacimiento->format('m') > $fecha_actual->format('m') || ($fecha_nacimiento->format('m') == $fecha_actual->format('m') && $fecha_nacimiento->format('d') > $fecha_actual->format('d'))) {
            $edad--;
        }
        // Retorna la edad en años
        return $edad;
    }

    if (isset($_POST['fecha_nacimiento'])) {
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $edad = calcular_edad($fecha_nacimiento);
        echo "<p>Tu edad es: $edad años.</p>";
    }
    ?>

    </div>

</body>
</html>
