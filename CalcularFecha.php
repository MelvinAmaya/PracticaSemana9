<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de días</title>
	<link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fehca.css">
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
	<h1>Calculadora de días</h1>

    <div class = "body">

    <form method="post">
		<label for="fecha_inicio">Fecha de inicio:</label>
		<input type="date" id="fecha_inicio" name="fecha_inicio" required>
		<label for="fecha_fin">Fecha de fin:</label>
		<input type="date" id="fecha_fin" name="fecha_fin" required>
		<input type="submit" value="Calcular">
	</form>
    <?php
		if(isset($_POST["fecha_inicio"]) && isset($_POST["fecha_fin"])){
			$fecha_inicio = $_POST["fecha_inicio"];
			$fecha_fin = $_POST["fecha_fin"];

			$dias = round(abs(strtotime($fecha_fin) - strtotime($fecha_inicio)) / 86400);

			echo "<p>Entre el $fecha_inicio y el $fecha_fin hay $dias días de diferencia.</p>";
		}
	?>

    </div>
	
	
</body>
</html>