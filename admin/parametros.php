<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parametros | Admin</title>
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
                var name = 'nombre';
                remote = open('gestor/subir_imagen.php?name='+name+'&input='+input+'&carpeta='+carpeta ,'remote', 'align=center,width=600,height=300,resizable=yes,status=yes');
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
  
        //Actualizar datos del usuario
  if (isset($_POST)) {
    if ($_POST['actualizar'] == 'actualizar' && $_POST['id'] > 0) {
      $sql = "UPDATE parametros set empresa = :empresa, logo=:logo, favicon=:favicon, email=:email, direccion=:direccion, whatsapp=:whatsapp, phone=:phone, horarios=:horarios, facebook=:facebook, twitter=:twitter, instagram=:instagram, youtube=:youtube, map=:map   WHERE id = " . $_POST['id'];
        
      $data = array(
        'empresa' => $_POST['empresa'],
        'logo' => $_POST['logo'],
        'favicon' => $_POST['favicon'],
        'email' => $_POST['email'],
        'direccion' => $_POST['direccion'],
        'whatsapp' => $_POST['whatsapp'],
        'phone' => $_POST['phone'],
        'horarios' => $_POST['horarios'],
        'facebook' => $_POST['facebook'],
        'twitter' => $_POST['twitter'],
        'instagram' => $_POST['instagram'],
        'youtube' => $_POST['youtube'],
        'map' => $_POST['map']
      );
      $query = $connection->prepare($sql);
      try {
        $query->execute($data);
       
      } catch (Exception $e) {
      }
    }
  }

         //Obtener el registro del usuario
  $total = 0;
  //Recuperar los valores del parametro
  $sql = "SELECT * FROM parametros WHERE id = 1 ";
  $query = $connection->prepare($sql);
  $query->execute();
  $total = $query->rowCount();

  //Si no hay un parametro registrado, crear el primer registro
  if(!$total > 0){
    $sql = 'INSERT INTO parametros (id) VALUES (1)';
    $query2 = $connection->prepare($sql);
    $query2->execute();
  }  

  $query->execute();
  ?>
  
  <!-- ASIDE - SIDEBAR  -->
  <?php include 'includes/aside.php'; ?>

  <!-- CONTENIDO -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Página Inicial
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
      </ol>
    </section>
    <section class="content container-fluid">
      <div class="row">
        <?php if ($total > 0) {
          $parametros = $query->fetchAll()[0];
                // var_dump($usuario);                 
          ?>  
            <form action="parametros.php" method="POST" name="form">
                <div class="form-group col-md-4">
                    <label>Empresa</label>
                    <input type="text" name="empresa" value="<?php echo $parametros['empresa']; ?>" required class="form-control">

                </div>

               <div class="form-group col-md-4">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $parametros['email']; ?>" required class="form-control">
                </div>

                 <div class="form-group col-md-4">
                    <label>Direccion</label>
                    <input type="text" name="direccion" value="<?php echo $parametros['direccion']; ?>" required class="form-control">
                </div>

                  <div class="form-group col-md-4">
                    <label>Whatsapp</label>
                    <input type="text" name="whatsapp" value="<?php echo $parametros['whatsapp']; ?>" required class="form-control">
                </div>

                   <div class="form-group col-md-4">
                    <label>Telefono</label>
                    <input type="text" name="phone" value="<?php echo $parametros['phone']; ?>" required class="form-control">
                </div>


              <div class="form-group col-md-4">
                    <label>Horarios</label>
                    <input type="text" name="horarios" value="<?php echo $parametros['horarios']; ?>" required class="form-control">
                </div>

                  <div class="form-group col-md-4">
                    <label>Facebook</label>
                    <input type="text" name="facebook" value="<?php echo $parametros['facebook']; ?>" required class="form-control">
                </div>


                <div class="form-group col-md-4">
                    <label>Twitter</label>
                    <input type="text" name="twitter" value="<?php echo $parametros['twitter']; ?>" required class="form-control">
                </div>

                 <div class="form-group col-md-4">
                    <label>Instagram</label>
                    <input type="text" name="instagram" value="<?php echo $parametros['instagram']; ?>" required class="form-control">
                </div>

                   <div class="form-group col-md-4">
                    <label>Youtube</label>
                    <input type="text" name="youtube" value="<?php echo $parametros['youtube']; ?>" required class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label>Mapa</label>
                    <input type="text" name="map" value="<?php echo $parametros['map']; ?>" required class="form-control">
                </div>

                  <div class="form-group col-md-2">
                    <label>Logo</label>
                    <input type="text" name="logo" value="<?php echo $parametros['logo']; ?>"  class="form-control" id="logo"  onclick="subir_imagen('logo', 'uploads')">
                </div>

                 <div class="form-group col-md-2">
                    <label>Favicon</label>
                    <input type="text" name="favicon" value="<?php echo $parametros['favicon']; ?>"  class="form-control" id="favicon"  onclick="subir_imagen('favicon', 'uploads')">
                </div>

                <div class="col-md-2">
                        <br>
                        <input type="hidden" name="id"  value="<?php echo $parametros['id']; ?>">
                       <button type="submit" name="actualizar" value="actualizar" class="btn btn-primary">Actualizar</button> 
                </div>

            </form>
          <?php 
        } else { ?>

            <a href="sliders.php" class="btn btn-warning">El registro no exite, volver a la lista</a>
          
          <?php 
        } ?>
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
</body>
</html>