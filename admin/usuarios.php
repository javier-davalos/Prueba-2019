<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Usuarios | Admin</title>
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
    $sql = "SELECT * from usuarios ORDER by nombre";
    $query = $connection->prepare($sql);
    $query->execute();


  ?>
  
  <!-- ASIDE - SIDEBAR  -->
  <?php include 'includes/aside.php'; ?>

  <!-- CONTENIDO -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><span>Usuarios</span></li>
      </ol>
    </section>
    <section class="content container-fluid">
      
<div class="panel">
        <div class="row">
          <div class="col-xs-12">
            <a href="usuarios_add.php" class="btn btn-primary btn-lg pull-right" > <i class="fa fa-plus"></i></a>
        </div>
        </div>
      </div>

      <div class="panel">
        <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>AVATAR</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>ACTIVO</th>
            <th class="text-center" width="10%">
              <i class="fa fa-cogs"></i>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query->fetchAll() as $file ) {  ?>
           <tr>
            <td><?php echo $file['id']; ?></td>
            <td>
              <?php if($file['avatar'] != '' ) { ?>

              <img src="../images/usuarios/<?php echo $file['avatar']; ?>" width="60px">
        
             <?php } else { ?>
               <img src="../images/usuarios/no_avatar.png" width="60px">
             <?php } ?>
             </td>
            <td><?php echo $file['nombre']; ?>  </td>
            <td><?php echo $file['email']; ?></td>
            <td>
                <?php if( $file['activo'] == 1 ) {  ?>
                   <i class="fa fa-check text-green"></i>
                <?php } else {   ?>
                    <i class="fa fa-remove text-red"></i>
                <?php }  ?>
            </td>
      <td class="text-center">
      <a class="btn btn-warning btn-xs" href="usuarios_edit.php?id=<?php echo $file['id']; ?>"> <i class="fa fa-edit"></i></a>
      <a class="btn btn-danger btn-xs"  href="usuarios_dele.php?id=<?php echo $file['id']; ?>"> <i class="fa fa-remove"></i></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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