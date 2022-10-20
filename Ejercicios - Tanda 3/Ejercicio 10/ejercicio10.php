<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
    Escriba un número: <input type="text" name="val">
    <input type="submit" value="Calcular">
    

    <?php    
        if (isset($_POST['val'])) {
            $n = $_POST['val'];
            $total = $_POST['total'];
            $intentos = $_POST['intentos'];

            if ($n >= 0) {
              echo '<input type="hidden" name="total" value="'.$total + $n. '">';
                echo '<input type="hidden" name="intentos" value="'.$intentos + 1 .'">';    
            }else{
                echo "La media de las notas es: " . round($total / $intentos, 2);
            } 
        }else{
           echo '<input type="hidden" name="total" value=0>';
           echo '<input type="hidden" name="intentos" value=0>';
            }
            ?>
    </form>
</body>
</html>