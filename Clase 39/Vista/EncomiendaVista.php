<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilardazos.css">
    <title>Agencia</title>
</head>
<body>
    <center>
    <?php
    echo"<table border='1'>
    <tr><td colspan='6'><h1 align='center'>Encomienda</h1></td></tr>
    <tr><td>Numero</td><td>Fecha</td><td>Tipo</td><td>Despachante</td><td>Destinatario</td><td>Precio</td></tr>";
    
 

    foreach ($datos as $dato) {
        if($dato["tipo"]== "sobre"){
            $precio=100;
        }else if($dato["tipo"]=="paquete"){
            $precio=200;
        }else if($dato["tipo"]=="caja"){
            $precio=300;
        } 
    
    echo "<tr><td>".$dato["numero"]."</td><td>".$dato["fecha"]."</td><td>".$dato["tipo"]."</td><td>".$dato["despachante"]."</td><td>".$dato["destinatario"]."</td><td>$".$precio."</td></tr>";
}
"</table>"

    ?>
    </center>
</body>
</html>