<?php 
    include "database.php";
    
    function get_animal_by_name($nume){
        global $db;
        $query = 'SELECT * FROM animals WHERE NUME = :nume';
        $statement = $db->prepare($query);
        $statement->bindValue(':nume', $nume);
        $statement->execute();
        $animal_info = $statement->fetchAll();
        $statement->closeCursor();
        return $animal_info;
    }

    function add_animal($nume, $denumire_stiintifica, $descriere, $statut, $clasa_biologica, $habitat, $continent, $raspandire, $trasaturi_distinctive, $hrana, $descriere_hrana, $viata_sociala, $descriere_viata_sociala, $reproducere, $altele){
        global $db;
        if(empty($id = get_animal_by_name($nume))){
            $query = "INSERT INTO animals (nume, denumire_stiintifica, descriere, Statut, Clasa, Habitat, Continent, raspandire, trasaturi_distinctive, Hrana, descriere_hrana, Social, descriere_viata_sociala, reproducere, altele) VALUES (:nume, :denumire_stiintifica, :descriere, :statut, :clasa_biologica, :habitat, :continent, :raspandire, :trasaturi_distinctive, :hrana, :descriere_hrana, :viata_sociala, :descriere_viata_sociala, :reproducere, :altele)";
            $statement = $db->prepare($query);
            $statement->bindValue(':nume', $nume);
            $statement->bindValue(':denumire_stiintifica', $denumire_stiintifica);
            $statement->bindValue(':descriere', $descriere);
            $statement->bindValue(':statut', $statut);
            $statement->bindValue(':clasa_biologica', $clasa_biologica);
            $statement->bindValue(':habitat', $habitat);
            $statement->bindValue(':continent', $continent);
            $statement->bindValue(':raspandire', $raspandire);
            $statement->bindValue(':trasaturi_distinctive', $trasaturi_distinctive);
            $statement->bindValue(':hrana', $hrana);
            $statement->bindValue(':descriere_hrana', $descriere_hrana);
            $statement->bindValue(':viata_sociala', $viata_sociala);
            $statement->bindValue(':descriere_viata_sociala', $descriere_viata_sociala);
            $statement->bindValue(':reproducere', $reproducere);
            $statement->bindValue(':altele', $altele);
            $statement->execute();        
        }
        else{
            $query = 'UPDATE animals SET nume =:nume, denumire_stiintifica=:denumire_stiintifica, descriere = :descriere, Statut=:statut, Clasa=:clasa_biologica, Habitat=:habitat, Continent=:continent, raspandire=:raspandire, trasaturi_distinctive=:trasaturi_distinctive, Hrana=:hrana, descriere_hrana=:descriere_hrana, Social=:viata_sociala, descriere_viata_sociala=:descriere_viata_sociala, reproducere=:reproducere, altele=:altele WHERE nume =:name';
            $statement = $db->prepare($query);
            $statement->bindValue(':nume', $nume);
            $statement->bindValue(':denumire_stiintifica', $denumire_stiintifica);
            $statement->bindValue(':descriere', $descriere);
            $statement->bindValue(':statut', $statut);
            $statement->bindValue(':clasa_biologica', $clasa_biologica);
            $statement->bindValue(':habitat', $habitat);
            $statement->bindValue(':continent', $continent);
            $statement->bindValue(':raspandire', $raspandire);
            $statement->bindValue(':trasaturi_distinctive', $trasaturi_distinctive);
            $statement->bindValue(':hrana', $hrana);
            $statement->bindValue(':descriere_hrana', $descriere_hrana);
            $statement->bindValue(':viata_sociala', $viata_sociala);
            $statement->bindValue(':descriere_viata_sociala', $descriere_viata_sociala);
            $statement->bindValue(':reproducere', $reproducere);
            $statement->bindValue(':altele', $altele);
            $statement->execute();
        }
        $statement->closeCursor();
    }

    function get_animals_for_catalog(){
        global $db;
        
        $query = "SELECT nume,descriere FROM animals";
        $statement = $db->prepare($query);
        $statement->execute();
        $animal_info = $statement->fetchAll();

        foreach($animal_info as $animal){
            echo '<div class="casuta-animal">
            <div class="casuta-imagine">
                <div class="imagine"
                    style="background-image:url(../../img/animals/'.$animal['nume'].'_mainimg);">
                </div>
            </div>
            <div class="detalii-animal-casuta">
                <h3 class="nume-animal">'.$animal["nume"].'</h3>
                <h3 class="nume-animal-latina"><i>'.$animal["numeLatina"].'.</i></h3>
                <div class="descriere-animal">
                    <h3 class="descriere-animal-titlu">Descriere</h3>
                    <p class="descriere-animal-continut">'.$animal["descriere"].'</p>
                </div> 
            </div>
        </div>';
        }
        $statement->closeCursor();
    }
?>  