<!DOCTYPE html>
<html>
<head>
    <title>Ordenar arreglo</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/arraysorder.css">
    
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
    <h1>Ingrese los números que quiere ordenar</h1>

    <form method="post">
        <input type="text" name="numeros" placeholder="Ingrese los números separados por comas" />
        <input type="submit" value="Ordenar" />
    </form>

    <?php
    if(isset($_POST['numeros'])) {
        $numeros = explode(",", $_POST['numeros']);
        $numeros = array_map('intval', $numeros);

        function ordenar_arreglo($arreglo) {
            sort($arreglo); // Función para ordenar el arreglo de menor a mayor
            return $arreglo;
        }

        $numeros_ordenados = ordenar_arreglo($numeros);

        echo "<h2>Arreglo original:</h2><p>" . implode(", ", $numeros) . "</p>";
        echo "<h2>Arreglo ordenado:</h2><p>" . implode(", ", $numeros_ordenados) . "</p>";
    }
    ?>

    </div>

    
</body>
</html>