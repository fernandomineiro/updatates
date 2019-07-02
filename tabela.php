<?php
include "config.php";
$sql = "CREATE TABLE registro (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
sms VARCHAR(120) NOT NULL,
enviado VARCHAR(50),
naoenviado VARCHAR(50),
usuario VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Criado com sucesso";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>