<?php
$servername = "localhost";
$username = "tudor";
$password = "tudor";

$inipath = "php.ini";

if ($inipath) {
    //echo 'Loaded php.ini: ' . $inipath;
} else {
    //echo 'A php.ini file is not loaded';
}

try {
    $db = new PDO("mysql:host=$servername;dbname=gradina_zoo", $username,$password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
