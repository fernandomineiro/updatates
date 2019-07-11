<?php
include "config.php";

$sql = "UPDATE valorsms SET quantidade=quantidade + 40 WHERE idusuario=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


?>
