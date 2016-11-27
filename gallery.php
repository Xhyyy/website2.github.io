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
              $query="SELECT * FROM pages WHERE page_name = 'gallery'";
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
            </div>
            
            <div class="gallery-wrapper">
            	<div class="row">
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo1.jpg"><figure><img src="images/photo1.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
                </div>
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo2.jpg"><figure><img src="images/photo2.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
                </div>
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo3.jpg"><figure><img src="images/photo3.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
                </div>
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo4.jpg"><figure><img src="images/photo4.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
                </div>
							</div>
              
            	<div class="row" style="padding-top:10px;">
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo5.jpg"><figure><img src="images/photo5.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
                </div>
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo6.jpg"><figure><img src="images/photo6.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
                </div>
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo7.jpg"><figure><img src="images/photo7.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
                </div>
                <div class="col-md-3 lightbox-gallery">
                  <a href="images/photo8.jpg"><figure><img src="images/photo8.jpg" alt="" style="width:100%; height:200px;" /></figure></a>
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