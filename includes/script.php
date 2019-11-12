<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
	$(document).ready(function(){
		$("#slides").owlCarousel({
		  	items: 1,
		  	margin: 0,
		  	nav: true,
		  	dots: true,
		  	loop: true,
		  	autoplay: true,
		  	autoplayTimeout: 10000,
		  	autoplayHoverPause: true,
		  	navText: [
	        '<img src="images/arrow_left.png" alt="Left" class="img-responsive">',
	        '<img src="images/arrow_right.png" alt="Left" class="img-responsive">'
	    	]
		});
	});
</script>