<?php
include "nav.php";
include "../../model/animale_db.php";
include "../../model/upload_file.php";

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    include "add_form.php";
}
else{
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['submit']))
        {   
            //if there is a XML file uploaded
            if(checkfile() == true){
                echo "Successfully uploaded xml file";
            }

            //upload to DB only if denpop (Denumire populara) field has been filled
            if(empty($_POST['denpop']) == false){ 
                $name = $_POST['denpop'];
                $description = $_POST['message'];
                add_animal($name, $description);
            }
        }
    }
}
?>