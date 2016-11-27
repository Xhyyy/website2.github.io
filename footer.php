    <!-- Footer -->
    <footer>
    	<div class="container">
				<div class="copyright">Copyright &copy; 2016</div>
      </div>
    </footer>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.lightbox-0.5.js"></script>
		<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
		
		$(document).ready(function() {
			$( ".lightbox-gallery a").lightBox();
		})		
    </script>
</body>

</html>