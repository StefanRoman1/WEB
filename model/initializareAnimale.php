<?php
 $con = mysqli_connect("localhost", "tudor", "tudor", "gradina_zoo");
 if (mysqli_connect_errno()){
     echo '<h3>Failed to connect</h3>';
 }

 $q=$_GET["q"];

 $sql = "SELECT nume,denumire_stiintifica,descriere FROM animals";
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
                style="background-image:url(../../img/pages/catalog/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
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