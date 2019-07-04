<?php
include "config.php";

$sql = "UPDATE usuario SET tipo='admin' WHERE nome='fernando'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
