<?php
$servername = "localhost";
$username = "root";
//$password = "password";

$inipath = "php.ini";

if ($inipath) {
    //echo 'Loaded php.ini: ' . $inipath;
} else {
    //echo 'A php.ini file is not loaded';
}

try {
    $db = new PDO("mysql:host=$servername;dbname=gradina_zoo", $username);
    // set the PDO error mode to exception
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
