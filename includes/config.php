<?php 
// DB credentials.
define('DB_HOST','mydb123.mysql.database.azure.com');
define('DB_USER','sangeetha');
define('DB_PASS','Azureuser@12345');
define('DB_NAME','sk');
// Establish database connection.
try {
    $dbh = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME,
        DB_USER,
        DB_PASS,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::MYSQL_ATTR_SSL_CA => '/path/to/ca-cert.pem', // Path to CA certificate
            PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false // Set to false if server certificate verification is not needed
        )
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
