<?php
// header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include_once 'database.php';

// $database = new Database();
// $db = $database->getConnection(); 

// // $name = $_REQUEST["name"];

// $query = "SELECT nume,numeLatina,descriere FROM animals";

// $stmt = $db->prepare($query);
// $stmt->execute();

// $num = $stmt->rowCount();

// if($num>0) {
//     $animals_arr = array();

//     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         $animal[] = array(
//             "nume" => $row['nume'],
//             "numeLatina" => $row['numeLatina'],
//             "descriere" => $row['descriere']
//         );
//     }
//     http_response_code(200);
//     echo json_encode($animals_arr);
// }
// else {
//     http_response_code(404);
//     echo json_encode(
//         array("message" => "Nu exista animale!")
//     );
// }

$con = mysqli_connect("localhost", "tudor", "tudor", "tudor");
if (mysqli_connect_errno()){
    echo 'Failed to connect';
}

$sql = "SELECT nume,numeLatina,descriere FROM animals";
$result = mysqli_query($con,$sql);
$list = array();
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $list[] = array (
        "nume" => $row['nume'],
        "numeLatina" => $row['numeLatina'],
        "descriere" => $row['descriere']
    );
}

mysqli_free_result($result);
mysqli_close($con);

echo json_encode($list);

?>

