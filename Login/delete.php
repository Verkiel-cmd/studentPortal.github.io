<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
    
    $id = $_GET["id"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_stu";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM studentawt WHERE id=$id";
    $conn->query($sql);
}

header("Location: listStud.php");
exit;

?>