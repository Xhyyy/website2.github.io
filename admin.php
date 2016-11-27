<?php
if(isset($_COOKIE["user"])) {
	define("USER_LOGGED",true);
}
include("header.php");
?>
    <!-- Page Content -->
    <div class="container page-content">
    	<div class="page-content-inner">
        <div class="row">
          <div class="col-lg-12">
          	<div class="form-content">
            <?php
						if(isset($_REQUEST['success']))
						{
						?>
            <div class="note">Page data has been successfully updated!</div>
            <?php
						}
						?>
          	<h3>Please select page to edit introduction</h3>
            <ul>
            	<li><a href="admin.php?page=home">Home</a></li>
            	<li><a href="admin.php?page=categories">Categories</a></li>
            	<li><a href="admin.php?page=howto">How To</a></li>
            	<li><a href="admin.php?page=gallery">Before and After Gallery</a></li>
            </ul>
            
            <?php
						if(isset($_REQUEST['page'])) {
							$pagename = $_REQUEST['page'];
							$heading = "";
							$introduction = "";

							$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
							$query="SELECT * FROM pages WHERE page_name = '$pagename'";
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
          	<form action="<?php $PHP_SELF; ?>" method="post">
            	<input type="hidden" name="page" value="<?php echo($_REQUEST['page']); ?>" />
            	<div>
              	<label for="heading">Heading:</label>
                <input type="text" id="heading" name="heading" value="<?php echo($heading); ?>" />
              </div>
            	<div>
              	<label for="heading">Introduction:</label>
                <textarea id="introduction" name="introduction"><?php echo($introduction); ?></textarea>
              </div>
              <div>
              	<input type="submit" value="Submit" />
              </div>
            </form>
            <?php
						}
						?>
            </div>
          </div>
        </div><!-- /.row -->
			</div><!-- /.page-content-inner -->
    </div>
    <!-- /.container -->
<?php
include("footer.php");
?>