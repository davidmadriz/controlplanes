<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test2",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */


 $bdd = new PDO(
    	"mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
    	getenv("MYSQL_ADDON_USER"),
    	getenv("MYSQL_ADDON_PASSWORD")
  );

$databaseHost = 'b6w7dnsloorszuyrgvfl-mysql.services.clever-cloud.com';
$databaseName = 'b6w7dnsloorszuyrgvfl';
$databaseUsername = 'u3jmsprzk9lazeno';
$databasePassword = 'U5X9zSyPrHYhCJPyZOz6';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>
