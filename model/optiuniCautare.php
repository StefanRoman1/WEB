<?php
$con = mysqli_connect("localhost", "tudor", "tudor", "gradina_zoo");
if (mysqli_connect_errno()){
    echo 'Failed to connect';
}

$q=$_GET["q"];
$hint = "";

if(strlen($q)) {
    $sql = "SELECT nume FROM animals where nume like '%$q%' or denumire_stiintifica like '%$q%'";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        echo "Conectare esuata";
    } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowsNr = 5;
        while($row = mysqli_fetch_assoc($result)) {
            $hint = $hint . "<p onclick='trimitereSpreCautare(this)'>" . $row['nume'] . "</p>";
            $rowsNr--;
            if($rowsNr == 0) break;
        }
    }
}

if($hint == "") {
    echo "<p onclick='trimitereSpreCautare(this)'>Nicio sugestie!</p>";
} else {
    echo $hint;
}

?>

