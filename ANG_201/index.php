<?php
$noches = $_POST['noches'];
$destino = $_POST['destino'];
$dias_alquiler = $_POST['dias_alquiler'];

// Cálculos para determinar el precio del viaje
$precio_base = 100;  // Precio base por noche

// Precios adicionales según el destino
$precio_destino = 0;
if ($destino == 'paris') {
    $precio_destino = 200;
} elseif ($destino == 'barcelona') {
    $precio_destino = 150;
} elseif ($destino == 'nuevayork') {
    $precio_destino = 300;
} elseif ($destino == 'badajoz') {
    $precio_destino = 100;
}

$precio_alquiler = $dias_alquiler * 50;  // Precio del alquiler del coche ($50 por día)

// Cálculo del precio total
$precio_total = ($noches * $precio_base) + $precio_destino + $precio_alquiler;
?>









<!DOCTYPE html>
<html>
<head>
    <title>Página de Viajes</title>
    <style>
        body {
            background-image: url('https://www.howlanders.com/blog/wp-content/uploads/2019/02/souvenirs-recuerdos-coleccionar-de-viajes.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            opacity: 0.8;
            border-radius: 5px;
        }
        
        .container h2 {
            text-align: center;
        }
        
        .container form {
            display: flex;
            flex-direction: column;
        }
        
        .container form label {
            margin-bottom: 10px;
        }
        
        .container form select,
        .container form input[type="number"] {
            padding: 5px;
            margin-bottom: 10px;
        }
        
        .container form input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        .container form input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Viajes</h2>
        <form action="" method="post">
            <label for="noches">Noches deseadas:</label>
            <input type="number" id="noches" name="noches" min="1" required>
            
            <label for="destino">Destino:</label>
            <select id="destino" name="destino" required>
                <option value="paris">París</option>
                <option value="barcelona">Barcelona</option>
                <option value="nuevayork">Nueva York</option>
                <option value="badajoz">Badajoz</option>
            </select>
            
            <label for="dias_alquiler">Días de alquiler de coche:</label>
            <input type="number" id="dias_alquiler" name="dias_alquiler" min="0" required>
            
            <input type="submit" value="Calcular Precio">
        </form>
    </div>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Cálculo</title>
    <style type="text/css">
     .precio_total{
        max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            opacity: 0.8;
            border-radius: 5px; 
     }  
    </style>
</head>
<body>
    <div class="precio_total">
    <h2>Resultado del Cálculo</h2>
    <p>Noches deseadas: <?php echo $noches; ?></p>
    <p>Destino: <?php echo ucfirst($destino); ?></p>
    <p>Días de alquiler de coche: <?php echo $dias_alquiler; ?></p>
    <p>Precio Total: $<?php echo $precio_total; ?></
    </div>
</body>
</html>
