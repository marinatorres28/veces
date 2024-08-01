<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veces que se repiten los numeros</title>
</head>
<body>
<?php
    $array=[1,2,3,4,2,3,5,6,7,7,8,9,9,9,10,0];
    echo "Array original<br>";
    print_r($array);
    echo "<br>";
    $arrayContador=array();
    foreach ($array as $valor){
        if (array_key_exists($valor,$arrayContador)){
            $arrayContador[$valor]=$arrayContador[$valor]+1;
        }else{
            $arrayContador[$valor]=1;
        }
    }
    echo "<br>";
    ksort($arrayContador);
    print_r($arrayContador);
    echo "<br>Contador de veces que se repiten los numeros<br>";
    foreach ($arrayContador as $clave=>$valor){
        echo "El numero $clave se repite $valor".($valor==1?" vez":" veces")."<br>";
    }







?>
</body>
</html>

<?php
