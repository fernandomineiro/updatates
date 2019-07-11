<?php
include "config.php";

$sql = "INSERT INTO valorsms (idusuario, quantidade)
VALUES ('2', '40')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
