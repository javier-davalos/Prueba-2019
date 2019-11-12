<a href="index.php">Inicio</a>
<?php

   $nota = array(1, 2, 3, 4, 5, 6); 
   $persona = array('Juan', 'Jose', 'Maria', 'Lecitia', 'Jorge'); 


// for ($i=0; $i < 1000; $i++) { 
//     echo "<h2>La persona es, ". $persona[0] . ", y su nota es : ". $nota[0] . " </h2>";
// }

?>


<?php
    foreach ($persona  as $fila) {
        echo $fila .'<hr>';
    }

?>




<?php for($i=0; $i <  count($persona) ; $i++)  { ?>

<h2>La persona es,  <?php echo $persona[$i];  ?>, y su nota es : <?php for($e=0; $e<$i; $e++){ echo $e .",";  }  ?></h2>

<?php } ?>
