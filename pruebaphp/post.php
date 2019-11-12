<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curso de PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
 <div class="container">
        <div class="col-md-12">
           <h1>POST y GET</h1>
            <ul>
                <li><a href="variables.php">Variables</a></li>
                <li><a href="martiz.php">Matriz</a></li>
                <li><a href="ciclo.php">Ciclo</a></li> 
                <li><a href="funcion.php">Funcion</a></li>  
                <li><a href="condicion.php">Condicion</a></li> 
                <li><a href="post.php?accion">Post y Get</a></li> 
            
            </ul>
        </div>

        <div class="col-md-6">
            <h2>Formulario GET</h2>

            <form method="POST" action="post.php">

             <div class="form-group">
                    <label for="">Valor 1</label>
                    <input type="number" name="valor1" id="valor1" value="<?php if( isset($_GET['valor1'] ) ){  echo $_GET['valor1'];  }?>" required class="form-control" >
            </div>

              <div class="form-group">
                    <label for="">Valor 2</label>
                    <input type="number" name="valor2" id="valor2" value="<?php if( isset($_GET['valor2'] ) ){  echo $_GET['valor2'];  }?>"" required class="form-control" >
            </div>
            
   


         <button type="reset" class="btn btn-default" > Limpiar </button>
         <button type="submit"  class="btn btn-primary" name="operacion" value="sumar"> Sumar </button>
         <button type="submit"  class="btn btn-primary" name="operacion" value="restar"> Restar </button>
         <button type="submit"  class="btn btn-primary" name="operacion" value="multiplicar"> Multipicar </button>
         <button type="submit"  class="btn btn-primary" name="operacion" value="dividir"> Dividir </button>
            
            
            </form>


        </div>

        <div class="col-md-4 well">
                <h2>Resultado</h2>

         <?php  var_dump($_POST);     ?>

         <?php include('funcion.php'); ?>

         <?php 
         
         
         if(  isset($_GET['operacion'])   && isset($_GET['valor1'] )  && isset($_GET['valor2'])  ) {

                    echo calcular($_GET['valor1'], $_GET['valor2'], $_GET['operacion']);
                     //    calcular($valor1, $valor2, $operacion)   

                /*    //Opreacion sumar
                    if($_GET['operacion'] == 'sumar'){
                        echo 'El resultado de la suma es:' . ($_GET['valor1'] + $_GET['valor2']);
                    }

                       //Opreacion restar
                    if($_GET['operacion'] == 'restar'){
                        echo 'El resultado de la suma es:' . ($_GET['valor1'] - $_GET['valor2']);
                    }

                     if($_GET['operacion'] == 'multiplicar'){
                        echo 'El resultado de la suma es:' . ($_GET['valor1'] * $_GET['valor2']);
                    }

                      if($_GET['operacion'] == 'dividir'){
                        echo 'El resultado de la suma es:' . ($_GET['valor1'] / $_GET['valor2']);
                    }
                */    


         }    
         
         ?>



     


        </div>
 </div>
    
</body>
</html>