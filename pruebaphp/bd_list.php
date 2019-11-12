<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curso de PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />

</head>
<body>
 <div class="container">
     
    <div class="col-md-12">
       <?php require('../conexion/conexion.php');     ?>

         <?php
         
            $sql = "SELECT * FROM usuarios";
            $query = $connection->prepare($sql);
            $query->execute();

            //var_dump($query->execute());

            // foreach ($query->fetchAll() as $fila) {
            //     echo $fila['nombre'] . '<hr>'; 
            // }
            
         ?>

       <h1>Usuarios</h1>

       <table class="table table-bordered table-striped">
           <thead>
               <tr>
                   <td>ID</td>
                   <td>Nombre</td>
                   <td>Acciones</td>
               </tr>
           </thead>

           <tbody>
             <?php foreach ($query->fetchAll() as $fila)  {  ?>  
                <tr>
                   <td> <?php echo $fila['id']  ?>  </td>
                   <td><?php echo $fila['nombre']  ?></td>
                   <td>
                       <a href="?id=<?php echo $fila['id']  ?>">Editar</a>
                   </td>
               </tr>
             <?php  } ?>       

           </tbody>

       </table>


    </div>
           
 </div>
    
</body>
</html>