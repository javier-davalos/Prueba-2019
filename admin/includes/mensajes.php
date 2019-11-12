<div class="col-md-12" style="z-index:999999;">
	<?php if(isset($mensaje)) { ?>

    <?php if($mensaje != null ){   ?>
         <?php echo $mensaje;   ?>
         <?php $mensaje = null; ?>
         <?php }  ?>
	<?php }  ?>
</div>