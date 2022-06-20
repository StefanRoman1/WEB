<?php
include "nav.php";
//include "../../model/animale_db.php";
include "../../model/upload_file.php";

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    include "add_form.php";
}
else{
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['submit']))
        {   
            //if there is a XML file uploaded
            upload_xml();

            //upload to DB only if denpop (Denumire populara) field has been filled
            if(empty($_POST['denpop']) == false){ 
                $nume = $_POST['denpop'];
                $denumire_stiintifica = $_POST['densnf'];
                $descriere = $_POST['message'];
                $statut = $_POST['statut'];
                $clasa_biologica = $_POST['clasa'];
                $habitat = $_POST['habitat'];
                $continent = $_POST['continent'];
                $raspandire = $_POST['raspandire'];
                $trasaturi_distinctive = $_POST['trasaturi'];
                $hrana = $_POST['hrana'];
                $descriere_hrana = $_POST['descriere-hrana'];
                $viata_sociala = $_POST['viata-sociala'];
                $descriere_viata_sociala = $_POST['descriere-viata-sociala'];
                $reproducere = $_POST['reproducere'];
                $altele = $_POST['altele'];
                add_animal($nume, $denumire_stiintifica, $descriere, $statut, $clasa_biologica, $habitat, $continent, $raspandire, $trasaturi_distinctive, $hrana, $descriere_hrana, $viata_sociala, $descriere_viata_sociala, $reproducere, $altele);
            }

            upload_photos($nume);
        }
    }
}
?>