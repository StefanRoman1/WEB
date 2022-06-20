<?php 
    function upload_xml(){
        //checks if there is an uploaded file
        if($_FILES['uploadedfile']['error'] == 0){
            $filename = $_FILES['uploadedfile']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //checks if the uploaded file is 
            if($ext == 'xml'){
                if (move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], 'uploadedfile')) {
                    echo "The file has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
                $xml=simplexml_load_file('uploadedfile') or die("Error: Cannot create object");
                $nume = (string) $xml->nume;
                $denumire_stiintifica = (string) $xml->denumire_stiintifica;
                $descriere = (string) $xml->descriere;
                $statut = (string) $xml->statut;
                $clasa_biologica = (string) $xml->clasa_biologica;
                $habitat = (string) $xml->habitat;
                $continent = (string) $xml->continent;
                $raspandire = (string) $xml->raspandire;
                $trasaturi_distinctive = (string) $xml->trasaturi_distinctive;
                $hrana = (string) $xml->hrana;
                $descriere_hrana = (string) $xml->descriere_hrana;
                $viata_sociala = (string) $xml->viata_sociala;
                $descriere_viata_sociala = (string) $xml->descriere_viata_sociala;
                $reproducere = (string) $xml->reproducere;
                $altele = (string) $xml->altele;
                add_animal($nume, $denumire_stiintifica, $descriere, $statut, $clasa_biologica, $habitat, $continent, $raspandire, $trasaturi_distinctive, $hrana, $descriere_hrana, $viata_sociala, $descriere_viata_sociala, $reproducere, $altele);
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    function upload_photos($nume){
        $target_path = '../../img/animals/';
        if($_FILES['mainimg']['error'] == 0){
            $filename = $_FILES['mainimg']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //checks if the uploaded file is 
            if($ext == 'png' || $ext == 'jpg'){
                if (move_uploaded_file($_FILES["mainimg"]["tmp_name"], $target_path.$nume.'_mainimg')) {
                    echo "The file has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        if($_FILES['habitatimg']['error'] == 0){
            $filename = $_FILES['habitatimg']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //checks if the uploaded file is 
            if($ext == 'png' || $ext == 'jpg'){
                if (move_uploaded_file($_FILES["habitatimg"]["tmp_name"], $target_path.$nume.'_habitatimg')) {
                    echo "The file has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        if($_FILES['trasaturiimg']['error'] == 0){
            $filename = $_FILES['trasaturiimg']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //checks if the uploaded file is 
            if($ext == 'png' || $ext == 'jpg'){
                if (move_uploaded_file($_FILES["trasaturiimg"]["tmp_name"], $target_path.$nume.'_trasaturiimg')) {
                    echo "The file has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        if($_FILES['hranaimg']['error'] == 0){
            $filename = $_FILES['hranaimg']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //checks if the uploaded file is 
            if($ext == 'png' || $ext == 'jpg'){
                if (move_uploaded_file($_FILES["hranaimg"]["tmp_name"], $target_path.$nume.'_hranaimg')) {
                    echo "The file has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        if($_FILES['socialimg']['error'] == 0){
            $filename = $_FILES['socialimg']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //checks if the uploaded file is 
            if($ext == 'png' || $ext == 'jpg'){
                if (move_uploaded_file($_FILES["socialimg"]["tmp_name"], $target_path.$nume.'_socialimg')) {
                    echo "The file has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        if($_FILES['reproducereimg']['error'] == 0){
            $filename = $_FILES['reproducereimg']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //checks if the uploaded file is 
            if($ext == 'png' || $ext == 'jpg'){
                if (move_uploaded_file($_FILES["reproducereimg"]["tmp_name"], $target_path.$nume.'_reproducereimg')) {
                    echo "The file has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
?> 