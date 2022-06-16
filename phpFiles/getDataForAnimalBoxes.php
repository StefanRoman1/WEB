<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$database = new Database();
$db = $database->getConnection(); 

$name = $_REQUEST["name"];

$response = "";

$query = "SELECT nume,numeLatina,descriere FROM animals where nume=" . $name;

$stmt = $db->prepare($query);
$stmt->execute();

$num = $stmt->rowCount();

if($num>0) {
    $animals_arr = array();
    $animals_arr["records"]=array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $animal = array(
            "nume" => $row['nume'],
            "numeLatina" => $row['numeLatina'],
            "descriere" => $row['descriere']
        );
        array_push($animals_arr["records"],$animal);
    }
    http_response_code(200);
    echo json_encode($animals_arr);
}
else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Nu exista animale!")
    );
}

?>

