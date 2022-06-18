<?php
 $con = mysqli_connect("localhost", "tudor", "tudor", "tudor");
 if (mysqli_connect_errno()){
     echo 'Failed to connect';
 }

 $q=$_GET["q"];

 $sql = "SELECT nume,numeLatina,descriere FROM animals";
 $stmt = mysqli_stmt_init($con);
 if(!mysqli_stmt_prepare($stmt,$sql)) {
     echo "Conectare esuata";
 } else {
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     while($row = mysqli_fetch_assoc($result)) {
         echo '<div class="casuta-animal">
            <div class="casuta-imagine">
                <div class="imagine"
                    style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                </div>
            </div>
            <div class="detalii-animal-casuta">
                <h3 class="nume-animal">'.$row["nume"].'</h3>
                <h3 class="nume-animal-latina"><i>'.$row["numeLatina"].'</i></h3>
                <div class="descriere-animal">
                    <h3 class="descriere-animal-titlu">Descriere</h3>
                    <p class="descriere-animal-continut">'.$row["descriere"].'</p>
                </div> 
            </div>
        </div>';
     }
 }
?>