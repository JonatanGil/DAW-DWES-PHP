<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       



    <form action="9.5.php" method = "post">
      
        Introduzca su nombre:
        <br>
        <input type="text" name="dni">
        <br>
        <input type="text" name="nombre">
        <br>
        <input type="number" name="sueldo">
        <br>
        <input type="number" name="plus" value="0">
        <br>
        <input type="submit" value="enviar">
       
    </form>



    <?php


if ( !isset ( $_POST["dni"] ) )  {
           # En caso contrario (es decir, si se ha pulsado antes el botón)...
           }else{



        $servidor = "localhost";
        $username = "miusuario";
        $password = "mipassword";
        $basedatos = "bdprueba";

        # Crear conexión
        $conn = mysqli_connect($servidor, $username, $password, $basedatos);
    
        if (!$conn) {
            die("Conexi&ocacuten fallida: " . mysqli_connect_error());
        }
        echo "Conexi&oacuten con &eacutexito <br><br>";

        $dni = $_POST["dni"];
        $nombreE = $_POST['nombre'];
        $sueldo = $_POST["sueldo"];
        $plus = $_POST["plus"];
        $consulta = "INSERT INTO ejercicio92(dni,nombre,sueldo,plus) VALUES ($dni,'$nombreE',$sueldo,$plus);";
        $result2 = mysqli_query($conn,$consulta);
        if ($result2==TRUE){
            echo "Se ha insertado la fila: ".$dni."/ ".$nombreE."/ ".$sueldo."/ ".$plus ."<br>";
        }else{
            # La siguiente función muestra el último error, en caso
            # de haberlo.
            echo mysqli_error($conn);
            die ("Hubo un error");
        }   # Como no se trata de un SELECT, mysqli_query devuelve TRUE
            


        mysqli_close($conn);
    }            
    ?>
    


</body>
</html>