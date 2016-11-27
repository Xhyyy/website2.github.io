<?php
include("header.php");
?>
    <!-- Page Content -->
    <div class="container page-content">
    	<div class="page-content-inner">
        <div class="row">
          <div class="col-lg-12 single-content">
            <div class="promo-info">
							<?php
              $heading = "";
              $introduction = "";
              
              $mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
              $query="SELECT * FROM pages WHERE page_name = 'howto'";
              if ($result = $mysqli->query($query)) {
              
                  /* fetch object array */
                  while ($row = $result->fetch_assoc()) {
                    $heading = $row['heading'];
                    $introduction = $row['introduction'];
                  }
                  /* free result set */
                  $result->close();
              }
              ?>
              <h4><?php echo($heading); ?></h4>
							<?php echo($introduction); ?>    


				<div class="gallery-wrapper">
					<div class="row">
					<div class="col-md-3 lightbox-gallery">
					<a href="images/aa1.jpg"><figure><img src="images/aa1.jpg" style="width:100%; height:200px;" /></figure></a>
					</div>
					<div class="row">
					<div class="col-md-3 lightbox-gallery">
					<a href="images/aa2.jpg"><figure><img src="images/aa2.jpg" style="width:100%; height:200px;" /></figure></a>
					</div>
					<div class="row">
					<div class="col-md-3 lightbox-gallery">
					<a href="images/aa3.jpg"><figure><img src="images/aa3.jpg" style="width:100%; height:200px;" /></figure></a>
					</div>
					<div class="row">
					<div class="col-md-3 lightbox-gallery">
					<a href="images/aa4.jpg"><figure><img src="images/aa4.jpg" style="width:100%; height:200px;" /></figure></a>
					</div>
					
				</div>
				
				
            </div>
          </div>
        </div><!-- /.row -->
			</div><!-- /.page-content-inner -->
    </div>
    <!-- /.container -->
<?php
include("footer.php");
?>