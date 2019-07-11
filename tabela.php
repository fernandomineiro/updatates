<?php
include "config.php";

$sql = "UPDATE usuario SET idusuario='2' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}




?>
