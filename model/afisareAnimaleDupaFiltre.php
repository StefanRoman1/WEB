<?php
$con = mysqli_connect("localhost", "tudor", "tudor", "gradina_zoo");
if (mysqli_connect_errno()){
    echo '<h3>Failed to connect</h3>';
}

$numberOfFilters = $_GET["numberOfFilters"];
$sql = "SELECT nume, denumire_stiintifica, descriere FROM animals";

if($numberOfFilters != 0) {
    $sql = $sql . " where ";
    for($i = 0; $i < $numberOfFilters - 1; $i++) {
        $filterName = $_GET["filterName" . $i];
        $filter = $_GET["filter" . $i];
        $sql = $sql . $filterName . " = '" . $filter . "' and " ;
    }
    $filterName = $_GET["filterName" . $numberOfFilters - 1];
    $filter = $_GET["filter" . $numberOfFilters - 1];
    $sql = $sql . $filterName . " = '" . $filter . "'" ;
}

$stmt = mysqli_stmt_init($con);

if(!mysqli_stmt_prepare($stmt,$sql)) {
    echo "<h2>Conectare esuata</h2>";
    } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while($row = mysqli_fetch_assoc($result)) {
    echo '<div onclick="paginaAnimal(this)" class="casuta-animal">
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

?>