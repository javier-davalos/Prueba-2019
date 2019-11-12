<a href="index.php">Inicio</a>
<?php 

$valor1 = 1;
$valor2 = '2';


if ($valor1 == $valor2 && $valor2  < 5 && $valor1 > 1) {
   echo 'esto es verdadero';
}  else {
    echo 'esto es falso';
}

$valor = 3;

if ($valor = 1) {
    echo 'Es un uno';
}
if ($valor = 2) {
    echo 'Es un dos';
}
if ($valor = 3) {
    echo 'Es un tres';
}
if ($valor = 4) {
    echo 'Es un cuatro';
}


switch ($valor) {
    case '1':
          echo 'Es un uno';
        break;
    
    case '2':
            echo 'Es un dos';
            break;

    default:
        echo 'Valores no validos';
        break;
}



?>
