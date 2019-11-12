<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clientes | Admin</title>
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
   $total = 0;
   if(isset($_GET['id'])   ) {

     if($_GET['id'] > 0) {

     $sql = "SELECT *FROM clientes WHERE id = " . $_GET['id'];
       $query = $connection->prepare($sql);
       $query->execute();
       $total = $query->rowCount();
     }

   }
//eliminar Clientes
    if(isset($_POST['id']) && isset($_POST['eliminar'])) {

      if(['id'] > 0) {
         $sql = "DELETE FROM clientes WHERE id = " . $_POST['id'];
         $query = $connection->prepare($sql);
         //$query->execute();

         try {
           var_dump($query->execute());
           //header('Location : usuarios.php');
           $mensaje = '<p class=" alert alert-success"> clientes eliminado</p>';


         } catch (PDOExepcion $e) {
           
            $mensaje ='<p class=" alert alert-warnig"> Error al eliminado clientes '. $e->getMessage() .'   </p>';
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
        Editar cliente
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><span>Clientes</span></li>
      </ol>

    </section>
    <section class="content container-fluid">
      
<div class="panel">
     <div class="row">
        <div class="col-md-12">
       <?php  if($total > 0)  {   ?>
          <form action="clientes_dele.php" method="POST">
             <P class="alert alert-warnig"> Confirmar  </P>
             <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
             <button type="sumit" name="eliminar" class="btn btn-danger">Eliminar Registro </button>
        </form>

       <?php } ?>

          </div>
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
</body>
</html>