<?php 
ob_start();

try {

    $con = new PDO("mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_e7fb4290fc89849", "b371c2527fbe50", "779ad6d2");
    $con->query("SET NAMES 'utf8'");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}


?>