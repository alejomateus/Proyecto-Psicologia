<?php

$myjson = json_decode($_POST['enviado'], true);
var_dump($myjson);
//foreach ($array as &$myjson["hijos"]) {
//}

$servername = "localhost";
$username = "Alejandro";
$password = "123456";
$dbname = "Dataplus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn->query("INSERT INTO encuesta VALUES "
                . "('null','" . $myjson['nombre'] . "','En diseño')") === TRUE) {
    echo "OK";
} else {
    echo "FALLO";
}
$conn->close();
?>
