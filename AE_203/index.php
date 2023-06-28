<?php
function suma()
{
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if (is_numeric($numero1) && is_numeric($numero2)) {
            $resultado = $numero1 + $numero2;
            return $resultado;
        } else {
            return "Error: Por favor, ingrese dos números válidos.";
        }
    }
}

function resta()
{
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if (is_numeric($numero1) && is_numeric($numero2)) {
            $resultado = $numero1 - $numero2;
            echo "El resultado de la resta es: " . $resultado;
        } else {
            echo "Error: Por favor, ingrese dos números válidos.";
        }
    }
}

function comparaMayor()
{
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Verificar si se ingresaron números válidos
        if (is_numeric($numero1) && is_numeric($numero2)) {
            if ($numero1 > $numero2) {
                echo "El número $numero1 es mayor que $numero2.";
            } elseif ($numero1 < $numero2) {
                echo "El número $numero2 es mayor que $numero1.";
            } else {
                echo "Los números son iguales.";
            }
        } else {
            echo "Error: Por favor, ingrese dos números válidos.";
        }
    }
}

function comparaMenor()
{
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Verificar si se ingresaron números válidos
        if (is_numeric($numero1) && is_numeric($numero2)) {
            if ($numero1 < $numero2) {
                return $numero1;
            } elseif ($numero1 > $numero2) {
                return $numero2;
            } else {
                return "Los números son iguales.";
            }
        } else {
            return "Error: Por favor, ingrese dos números válidos.";
        }
    }
}

function sumaParametros($numero1, $numero2)
{
    
    if (is_numeric($numero1) && is_numeric($numero2)) {
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma es: " . $resultado;
    } else {
        echo "Error: Por favor, ingrese dos números válidos.";
    }
}

sumaParametros(5, 3);

function restaParametros($numero1, $numero2)
{
   
    if (is_numeric($numero1) && is_numeric($numero2)) {
        $resultado = $numero1 - $numero2;
        return $resultado;
    } else {
        return "Error: Por favor, ingrese dos números válidos.";
    }
}

$resta = restaParametros(10, 5);
echo "El resultado de la resta es: " . $resta;

function opera($numero1, $numero2, $operacion)
{

    if (is_numeric($numero1) && is_numeric($numero2)) {
        if ($operacion === 's') {
            $resultado = $numero1 + $numero2;
            return $resultado;
        } elseif ($operacion === 'r') {
            $resultado = $numero1 - $numero2;
            return $resultado;
        } else {
            return "Error: El tercer parámetro debe ser 's' o 'r'.";
        }
    } else {
        return "Error: Por favor, ingrese dos números válidos.";
    }
}

$resultadoSuma = opera(5, 3, 's');
echo "El resultado de la suma es: " . $resultadoSuma;

$resultadoResta = opera(10, 5, 'r');
echo "El resultado de la resta es: " . $resultadoResta;


function numAleatorio($min, $max) {
  // Generar número aleatorio dentro del rango
  $randomNumber = rand($min, $max);
  return $randomNumber;
}

// Verificar si se enviaron los parámetros por formulario
if(isset($_POST['min']) && isset($_POST['max'])) {
  // Obtener los valores enviados por el formulario
  $minValue = $_POST['min'];
  $maxValue = $_POST['max'];

  // Validar que los valores sean números
  if(is_numeric($minValue) && is_numeric($maxValue)) {
    // Llamar a la función numAleatorio() y obtener el número aleatorio
    $random = numAleatorio($minValue, $maxValue);
    echo "El número aleatorio generado es: " . $random;
  } else {
    echo "Por favor, ingresa valores numéricos.";
  }
}

function comparaCadena($cadena1, $cadena2) {
  // Comparar las cadenas
  if ($cadena1 === $cadena2) {
    echo "Son iguales";
  } else {
    // Ordenar las cadenas alfabéticamente
    $cadenas = array($cadena1, $cadena2);
    sort($cadenas);
    echo $cadenas[0] . " " . $cadenas[1];
  }
}

// Ejemplo de uso
$cadenaA = "Hola";
$cadenaB = "Mundo";
comparaCadena($cadenaA, $cadenaB);


function suma1($n1, $n2) {
  return $n1 + $n2;
}

function resta1($n1, $n2) {
  return $n1 - $n2;
}

function multiplicacion1($n1, $n2) {
  return $n1 * $n2;
}

// Verificar si se enviaron los números por formulario
if (isset($_POST['n1']) && isset($_POST['n2'])) {
  // Obtener los valores enviados por el formulario
  $num1 = $_POST['n1'];
  $num2 = $_POST['n2'];

  // Validar que los valores sean numéricos
  if (is_numeric($num1) && is_numeric($num2)) {
    // Calcular la suma, resta y multiplicación
    $resultadoSuma = suma1($num1, $num2);
    $resultadoResta = resta1($num1, $num2);
    $resultadoMultiplicacion = multiplicacion1($num1, $num2);

    // Mostrar los resultados
    echo "Suma: " . $resultadoSuma . "<br>";
    echo "Resta: " . $resultadoResta . "<br>";
    echo "Multiplicación: " . $resultadoMultiplicacion;
  } else {
    echo "Por favor, ingresa valores numéricos.";
  }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Suma de dos números</title>
</head>
<body>

    <form method="POST" action="">
        Número 1: <input type="text" name="numero1"><br>
        Número 2: <input type="text" name="numero2"><br>
        <input type="submit" value="Sumar">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $resultado = suma();
        echo "El resultado de la suma es: " . $resultado;
    }
    ?>

    <form method="POST" action="">
        Número 1: <input type="text" name="numero1"><br>
        Número 2: <input type="text" name="numero2"><br>
        <input type="submit" value="Restar">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        resta();
    }
    ?>


    <form method="POST" action="">
            Número 1: <input type="text" name="numero1"><br>
            Número 2: <input type="text" name="numero2"><br>
            <input type="submit" value="Comparar">
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            comparaMayor();
        }
        ?>

        <form method="POST" action="">
        Número 1: <input type="text" name="numero1"><br>
        Número 2: <input type="text" name="numero2"><br>
        <input type="submit" value="Comparar">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $menor = comparaMenor();
        echo "El número más pequeño es: " . $menor;
    }
    ?>


    <form method="post" action="">
    <label for="min">Valor mínimo:</label>
    <input type="text" name="min" id="min" required>
  
    <label for="max">Valor máximo:</label>
    <input type="text" name="max" id="max" required>
  
    <input type="submit" value="Generar número aleatorio">
    </form>

    <form method="post" action="">
    <label for="n1">Número 1:</label>
    <input type="text" name="n1" id="n1" required>
  
    <label for="n2">Número 2:</label>
    <input type="text" name="n2" id="n2" required>
  
    <input type="submit" value="Calcular">
    </form>
    </body>
    </html>



