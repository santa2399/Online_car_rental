<?php 
// DB credentials.
define('DB_HOST','mydbcarrent.mysql.database.azure.com');
define('DB_USER','sangeetha');
define('DB_PASS','Azure@123');
define('DB_NAME','carrental');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
