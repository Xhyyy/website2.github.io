<?php
define("SERVERNAME","localhost");
define("USERNAME","xhyrhylle");
define("PASSWORD","123456");
define("DBNAME","xhy_db");

try {
    $conn = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
		$sql = "CREATE TABLE IF NOT EXISTS `pages` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`page_name` varchar(255) NOT NULL,
			`heading` varchar(255) NOT NULL,
			`introduction` text NOT NULL,
			PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
			echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

if(isset($_POST['page']))
{
	$pagename=$_POST['page'];
	$heading=stripslashes($_POST['heading']);
	$introduction=stripslashes($_POST['introduction']);
	
	$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
	$result = $mysqli->query("SELECT * FROM pages WHERE page_name = '$pagename'");

	if($result->num_rows == 0) {
		//ADD NEW IF PAGE INTRODUCTION IS NOT YET SET
		$sql = "INSERT INTO pages (page_name, heading, introduction)
		VALUES ('$pagename', '$heading', '$introduction')";
	} else {
		$sql = "UPDATE pages SET page_name = '$pagename', heading = '$heading', introduction = '$introduction' WHERE page_name = '$pagename';";
	}
	$mysqli->close();
	
	//execute query
	try {
			$conn = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// use exec() because no results are returned
			$conn->exec($sql);
			header('Location: admin.php?page='.$pagename."&success=true");
			exit;
	}
	catch(PDOException $e)
	{
			die($e->getMessage());
	}
	$conn = null;
}
?>