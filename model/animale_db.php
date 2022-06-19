<?php 
    include "database.php";

    function get_animals() {
        global $db;
        $query = 'SELECT * FROM animals WHERE a_id = 4';
        $statement = $db->prepare($query);
        $statement->execute();
        $animal_info = $statement->fetchAll();
        $statement->closeCursor();
        return $animal_info;
    }
    
    function get_animal_by_name($name){
        global $db;
        $query = 'SELECT * FROM animals WHERE NUME = :name';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $animal_info = $statement->fetchAll();
        $statement->closeCursor();
        return $animal_info;
    }

    function add_animal($name, $description){
        global $db;
        if(empty($id = get_animal_by_name($name))){
            $query = "INSERT INTO animals (nume, descriere) VALUES ('$name', '$description')";
            $db->exec($query);
        }
        else{
            $query = 'UPDATE animals SET nume =:name, descriere = :description WHERE nume =:name';
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':description', $description);
            //$statement->bindValue(':id', $id);
            $statement->execute();
        }
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
                    style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
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