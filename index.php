<?php
session_start();


$error_id = '';

if (isset($_POST['ingreso'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $dsn = "mysql:host=192.168.0.206;dbname=clase1_grosso;charset=utf8";
        
        $usuario = "alumno";
        $contrasenia = "alumno";
        $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $pdo = new PDO($dsn, $usuario, $contrasenia, $opciones);
    
        $consulta = "SELECT * FROM alumno where id=  $id ";

        echo $consulta;
        $resultado = $pdo->query($consulta);

        //while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
           //echo $fila['columna1'] . " _ " . $fila ['columna2'] . "<Br>";

        //}
    } 
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperar datos</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main class="row flex flex-justify-center">
        <form class="col_4 login_cont" method="POST">
            <div class="col_12">
                <h1>recuperar datos </h1>
            </div>
            <div class="col_12 inputs">
                <input type="number" name="id" placeholder="Ingrese el id" value="<?=$id?>" autofocus>
                <output class="col_12 msg_error"><?=$error_id?></output>
            </div>
           
            <div class="col_12 flex flex-justify-center button_log">
                <button type="submit" name="ingreso">Ingresar</button>
            </div>
        </form>
    </main>
</body>
</html>