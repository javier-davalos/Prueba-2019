<?php 
require '../conexion/conexion.php';
require('Calculadora.php');

		$calculadora = new Calculadora();
		echo $calculadora->sumar(1, 100);


        $sql = "SELECT * FROM usuarios";
				$query = $connection->prepare($sql);
				$query->execute();
				$total = $query->rowCount();
      

	      foreach ($query->fetchAll() as $file) {
	       	print_r($file['nombre']) . '<hr>';
	      }


	   	 //Insertar
	  /* 	 $sql = $connection->prepare('INSERT INTO usuarios (`nombre`) VALUES (:nombre)');
    
          $data = array(
            ':nombre' => 'Usuario ' . rand(50,3)
          );

          try {
            $sql->execute($data);
            $mensaje_success = "Nuevo registro insertado";
          } catch (PDOException $e) {
            $e->getMessage();
            $mensaje_error = "Error, intente nuevamente!";
          }
*/
          //Actualizar
			
			/*		$sql = "UPDATE usuarios SET `nombre` = 'Clara' WHERE id = " . 1;
      
		      $sql = $connection->prepare($sql);
		      try
		        {
		          $sql->execute();
		         echo $mensaje_success = "Registro actualizado";
		         
		          exit;
		        }
		        catch (PDOException $e)
		        {
		          $e->getMessage();
		        echo   $mensaje_error = "Error, intente nuevamente!";
						}
						*/

		        


 ?>