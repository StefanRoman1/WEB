<?php 
    function checkfile(){
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
                $name = (string) $xml->name;
                $description = (string) $xml->description;
                add_animal($name, $description);
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
?> 