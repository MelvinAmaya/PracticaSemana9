<!DOCTYPE html>
<html>
<head>
    <title>Piedra, papel o tijera</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/form.css">
 
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

    <div class= "cuerpo">

            
       
        <br>
        <form method="post" action="">
            <label>Elige tu opción:</label>
            <select name="opcion">
            <option value="piedra">Piedra</option>
            <option value="papel">Papel</option>
            <option value="tijera">Tijera</option>
            </select>
            <input type="submit" name="jugar" value="Jugar">
            <?php
            $opciones = array('piedra', 'papel', 'tijera');
            $generada = $opciones[array_rand($opciones)];
            $seleccionada = isset($_POST['opcion']) ? $_POST['opcion'] : null;

            function jugar($generada, $seleccionada) {
            if ($generada == $seleccionada) {
                return 'Empate';
            } else if (($generada == 'piedra' && $seleccionada == 'tijera') ||
                        ($generada == 'papel' && $seleccionada == 'piedra') ||
                        ($generada == 'tijera' && $seleccionada == 'papel')) {
                return 'Perdiste';
            } else {
                return 'Ganaste';
            }
            }

            if (isset($_POST['jugar'])) {
            $resultado = jugar($generada, $seleccionada);
            echo "<div class = 'div'>";
            echo "<p>Generada: $generada</p>";
            echo "<p>Seleccionada: $seleccionada</p>";
            echo "<h2>Resultado: $resultado</h2>";
            echo "</div>";
            }
        ?>
        </form>


    </div>
  
</body>
</html>
