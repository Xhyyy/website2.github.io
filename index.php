<?php
include("header.php");
?>
    <!-- Page Content -->
    <div class="container page-content">
    	<div class="page-content-inner">
        <div class="row">
          <div class="col-lg-12 home-content">
            <img src="images/img-home.jpeg" alt="duolion mobile" class="pull-left" width="300"/>
            <?php
						$heading = "";
						$introduction = "";

						$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
						$query="SELECT * FROM pages WHERE page_name = 'home'";
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
          	<h3><?php echo($heading); ?></h3>
						<p><?php echo($introduction); ?></p>
          </div>
          <div class="col-lg-12 home-content">
          	<img src="images/img-home-child.png" alt="child tablet" class="pull-right" width="300" />
          	<h3>Page Contents:</h3>
            <ul>
              <li>Materials used for Revamp/DIY.</li>
              <li>Photo Gallery for Before and After</li>
              <li>DIY Tutorials</li>
            </ul>
          </div>
        </div><!-- /.row -->
			</div><!-- /.page-content-inner -->
    </div>
    <!-- /.container -->
<?php
include("footer.php");
?>