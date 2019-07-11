<?php
include "config.php";

$sql = "DROP TABLE valorsms";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$sql = "CREATE TABLE valorsms (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    idusuario INT(30) NOT NULL,
    quantidade INT(30) NOT NULL,
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

$sql = "SELECT idusuario, quantidade FROM valorsms";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo row["idusuario"];
        echo row["valorsms"];
    }
} else {
    echo "0 results";
}
$sql = "SELECT idusuario FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo row["idusuario"];
        
    }
} else {
    echo "0 results";
}
?>


