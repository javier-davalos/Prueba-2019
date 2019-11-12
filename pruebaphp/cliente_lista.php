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
       <div class="row">
           <div class="col-md-12">
                <h1>Usarios</h1>
             <?php require('../conexion/conexion.php'); ?>

             <?php
                $sql = "SELECT * from sliders";
                $query = $connection->prepare($sql);
                $query->execute(); 
                // var_dump($query->fetchAll());
             ?>

                <table class="table tabl-bordered table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>NOMBRE</td>
                            <td>ACCIONES</td>
                        <tr>
                    </thead>   
                    
                    <tbody>
                      <?php foreach ($query->fetchAll() as $fila) {  ?>      
                        <tr>
                            <td><?php echo $fila['id']; ?></td>
                            <td><?php echo $fila['name']; ?></td>
                            <td>ACCIONES</td>
                        <tr>
                      <?php } ?>       
                    
                    </tbody>
 
                </table>
               

           </div>
       </div> 
   </div>
    
</body>
</html>