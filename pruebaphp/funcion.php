
<?php 


function mi_funcion(){

    //Lo que hace la funcion

}



function sumar($valor1, $valor2){

    $resultado = $valor1 + $valor2;
    return $resultado;
}

function restar($valor1, $valor2){

    $resultado = $valor1 - $valor2;
    return $resultado;
}


function multiplicar($valor1, $valor2){

    $resultado = $valor1 * $valor2;
    return $resultado;
}

function dividir($valor1, $valor2){

    $resultado = $valor1 / $valor2;
    return $resultado;
}


function calcular($valor1, $valor2, $operacion){
    
    if($operacion == 'sumar'){
            $resultado = $valor1 + $valor2;
    }

     if($operacion == 'restar'){
            $resultado = $valor1 - $valor2;
    }

     if($operacion == 'dividir'){
            $resultado = $valor1 / $valor2;
    }

     if($operacion == 'multiplicar'){
            $resultado = $valor1 * $valor2;
    }
    
    return $resultado;
}

//echo calcular(sumar(50,250),  dividir(3000, restar(50, 20)), 'suma') . '<br>';


?>