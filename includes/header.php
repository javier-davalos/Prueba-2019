<header>
	<nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navbar" aria-expanded="false">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
	      		<a class="navbar-brand" href="index.php">
	      			<?php if(parametros()['logo'] == '') { ?>
	      			<img src="images/3.jpg" width="100px">
	      		<?php } else { ?>
	      		<img src="images/uploads/<?php echo parametros()['logo']; ?>" width="100px">
                 <?php } ?>
	      		</a>
	    	</div>
			<div class="collapse navbar-collapse" id="menu-navbar">      
			    <ul class="nav navbar-nav navbar-right">
			    	
			     <?php if($menu_padre = getMenuPadre(1)) { ?>
                  
                    <?php foreach ($menu_padre as $fila) { ?> 
                         

                         <?php if($fila_hijo = getMenuHijo($fila['id'])) { ?>
                          <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			         		<?php echo $fila['nombre'] ?><span class="caret"></span>
			         	 </a>

                           <ul class="dropdown-menu">

                   	      <?php foreach ($fila_hijo as $fila_hijo) { ?>

			                 <li><a href="<?php echO $fila_hijo['url']; ?>"><?php echO $fila_hijo['nombre']; ?></a></li>


                         <?php  } ?> 
                          </ul>
                        <li>
                      <?php  } else {?> 
                      	<li><a href="<?php echO $fila_hijo['url']; ?>"><?php echO $fila_hijo['nombre']; ?></a></li>
                  <?php  } ?> 
                   
                 <?php  } ?> 

               <?php }  ?> 

			        </li>
			    </ul>
			</div>
		</div>
	</nav>
</header>