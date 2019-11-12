<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

         <script>
         function subir_imagen(input, carpeta)
        {
            self.name = 'opener';
           
            remote = open('gestor/subir_imagen.php?name='+name+'&input='+input+'&carpeta='+carpeta ,'remote', 'align=center,width=800,height=400,resizable=yes,status=yes');
            remote.focus();
        }
        </script>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple fixed">
<div class="wrapper">

  <!-- HEADER -->
  <?php include 'includes/header.php'; ?>
  <?php
    //Validad si existe un post
    if(isset($_POST)){
        //Si existe un POST, validar que los campos cumplan con los requisitos
        if($_POST['guardar'] == 'guardar' && $_POST['titulo'] != ''){

            //Definir una variable con la consulta SQL.
     $sql = 'INSERT INTO cms (titulo, descripcion_corta, descripcion_larga, imagen, video, visible, fecha_add ) VALUES (:titulo, :descripcion_corta, :descripcion_larga, :imagen, :video, :visible, NOW())';
            
            
            //Definiendo una variable $data con los valores a guardase en la consulta sql
            $data = array(
                'titulo'            => $_POST['titulo'],
                'descripcion_corta' => $_POST['descripcion_corta'],
                'descripcion_larga' => $_POST['descripcion_larga'],
                'imagen'            => $_POST['imagen'],
                'video'             => $_POST['video'],
                'visible'           => $_POST['visible']
               
            );

           //Prepamos la conexion  
           $query = $connection->prepare($sql);
            
            //Definimos un try catch para que devuelta un estado
            try{
                 //Si sale bien se guarda los reigstros   
                   var_dump($query->execute($data));
                //   $mensaje ='<p class="aler alert-success">Registro correctamnete</p>';
                   echo '<script>window.local ="cms.php"; </script> ' ;

             

            } catch (PDOException $e) {
                //si sale mal devuelve el error con el motivo
               $mensaje ='<p class="aler alert-danger">Ocurio un error al guardar '.$e.'</p>';
                print_r($e);

               // $mensaje ='<p class="aler alert-danger">'. $e .'</p>';
           
            }
        } 

    }


  ?>
  <?php  include('includes/mensajes.php'); ?>
  <!-- ASIDE - SIDEBAR  -->
  <?php include 'includes/aside.php'; ?>

  <!-- CONTENIDO -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Nuevo contenido
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><span>contenido</span></li>
      </ol>

    </section>
    <section class="content container-fluid">
      
<div class="panel">
        <div class="row">
          <div class="col-xs-12">
            <a href="cms.php" class="btn btn-warning btn-lg pull-right" href=""> <i class="fa fa-close"></i> Salir</a>
        </div>
        </div>
      </div>

      <div class="panel">
        <div class="row">
            <form action="cms_add.php" method="POST" name="form">
             <div class="form-group col-md-4">
                    <label>Titulo </label>
                    <input type="text" name="titulo" class="form-control" id="titulo">
                </div>
                    
                  <div class="form-group col-md-4">
                    <label>Imagen</label>
                    <input type="text" name="imagen" class="form-control" id="imagen" onclick="subir_imagen('imagen', 'cms')">
                </div>
                                         
                <div class="form-group col-md-4">
                  <label>Visible</label>
                  <select name="visible" class="form-control" required>
                    <option value="1">Mostrar</option>
                    <option value="0">No mostrar</option>
                    </select>
                </div>

                   <div class="form-group col-md-11">
                    <label>Decripcion corta</label>
                    <textarea type="text" name="descripcion_corta" required class="form-control  inut lg"></textarea>
                 </div>

                   <div class="form-group col-md-11">
                    <label>Decripcion larga </label>
                     <textarea type="text" name="descripcion_larga" required class="form-control  inut lg"></textarea>
                 </div>
                   
                   <div class="col-md-2">
                        <br>
                      <button type="submit" name="guardar" value="guardar" class="btn btn-primary">Guardar</button> 
                </div>


            </form>
        </div>
      </div>
    </section>
  </div>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'descripcion_larga' );
</script>
</body>
</html>