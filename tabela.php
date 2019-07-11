<?php
include "config.php";

$sql = "DROP TABLE valorsms";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "CREATE TABLE valorsms (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    idusuario VARCHAR NOT NULL,
    quantidade VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sql = "INSERT INTO valorsms (idusuario, quantidade)
    VALUES ('1', '40')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = "INSERT INTO valorsms (idusuario, quantidade)
    VALUES ('1', '40')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>

