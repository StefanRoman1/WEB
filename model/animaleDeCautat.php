<?php
$con = mysqli_connect("localhost", "tudor", "tudor", "gradina_zoo");
if (mysqli_connect_errno()){
    echo 'Failed to connect';
}

$animal=$_GET["q"];
$animaleAfisate = "";

if(strlen($animal)) {
    $sql = "SELECT nume,denumire_stiintifica,descriere FROM animals where nume like '%$animal%' or denumire_stiintifica like '%$animal%'";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        echo "Conectare esuata";
    } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result)) {
            $animaleAfisate = $animaleAfisate . '<div class="casuta-animal">
                <div class="casuta-imagine">
                    <div class="imagine"
                        style="background-image:url(../../img/animals/'.$row['nume'].'_mainimg);">
                    </div>
                </div>
                <div class="detalii-animal-casuta">
                    <h3 class="nume-animal">'.$row["nume"].'</h3>
                    <h3 class="nume-animal-latina"><i>'.$row["denumire_stiintifica"].'</i></h3>
                    <div class="descriere-animal">
                        <h3 class="descriere-animal-titlu">Descriere</h3>
                        <p class="descriere-animal-continut">'.$row["descriere"].'</p>
                    </div> 
                </div>
            </div>';
        }
    }
}

if($animaleAfisate == "") {
    echo "<h1 style='font-weight=800;'>NE PARE RĂU! ANIMALELE CĂUTATE NU EXISTĂ!</h1>";
} else {
    echo $animaleAfisate;
}
?>