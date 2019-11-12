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
     <div class="col-md-6">
         <form action="#" method="POST" >
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>


                <button type="submit" class="btn btn-primary" >Enviar</button>
         </form>
     </div>

     <div class="col-md-6 well" >

         <?php  
         
       //var_dump($_GET);

         if( isset($_POST['email']) && isset($_POST['password'])  ){
            
            $email = 'jesus@cti.com.py';
            $password = '123456';

            if($_POST['email'] == $email  && $_POST['password'] == $password){
                echo "Hola has iniciado session:";
            } else {
                echo "Datos incorrectos";
            }


         }


         ?>

     </div>
           
 </div>
    
</body>
</html>