<?php
// DB credentials.
define('DB_HOST', 'db4free.net');
define('DB_USER', 'uef_root');
define('DB_PASS', 'uef_root');
define('DB_NAME', 'resest_2023');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
