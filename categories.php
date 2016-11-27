<?php
include("header.php");
?>
    <!-- Page Content -->
    <div class="container page-content">
    	<div class="page-content-inner">
        <div class="row">
          <div class="col-lg-12 single-content">
          	<div class="form-wrapper">
            <div class="promo-content">
              <div class="promo-content-inner">
                <div class="promo-info">
									<?php
                  $heading = "";
                  $introduction = "";
      
                  $mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
                  $query="SELECT * FROM pages WHERE page_name = 'categories'";
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
                  <p><?php echo($introduction); ?></p>
                </div>
            
                <div class="promo-info">
             
                  <ul>
                    <h4><a href="images/photo1.jpg">Clothes</a></h4>
                    <h4><a href="images/photo2.jpg">Gadgets</h4>
                    <h4><a href="images/photo3.jpg">Decorations</h4>
					<h4><a href="images/photo4.jpg">School Supplies</h4>
					<h4><a href="images/photo5.jpg">Houseware</h4>
					<h4><a href="images/photo6.jpg">Shoes</h4>
					<h4><a href="images/photo7.jpg">Gift Ideas</h4>
					<h4><a href="images/photo8.jpg">Accessories</h4>