<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/potencia.css">
    <title>Calculadora de Potencia</title>
   
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

    
    <form method="post" class="form">
    <h1>Calculadora de Potencia</h1>
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="number" name="numero" required>
        </div>
        <div class="form-group">
            <label for="potencia">Potencia:</label>
            <input type="number" name="potencia" required>
        </div>
        <input class="button" type="submit" value = "Calcular Potencia">
        <br>
        <?php
        function calcular_potencia($numero, $potencia) {
            $resultado = pow($numero, $potencia);
            echo "<p>El resultado de elevar $numero a la potencia $potencia es: $resultado</p>";
        }

        if (isset($_POST['numero']) && isset($_POST['potencia'])) {
            $numero = $_POST['numero'];
            $potencia = $_POST['potencia'];
            calcular_potencia($numero, $potencia);
        }
        ?>
    </form>
    
    
</body>
</html>

