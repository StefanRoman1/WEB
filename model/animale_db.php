<?php 
    include "database.php";

    function get_animals() {
        global $db;
        $query = 'SELECT * FROM animale WHERE ID = 4';
        $statement = $db->prepare($query);
        $statement->execute();
        $animal_info = $statement->fetchAll();
        $statement->closeCursor();
        return $animal_info;
    }
    
    function get_animal_by_name($name){
        global $db;
        $query = 'SELECT * FROM animale WHERE NUME = :name';
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
            $query = "INSERT INTO animale (nume, descriere) VALUES ('$name', '$description')";
            $db->exec($query);
        }
        else{
            $query = 'UPDATE animale SET nume =:name, descriere = :description WHERE nume =:name';
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':description', $description);
            //$statement->bindValue(':id', $id);
            $statement->execute();
        }
    }
?>  