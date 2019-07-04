<?php
include "config.php";
$sql = "CREATE TABLE image (
image_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
`location` varchar(200) NOT NULL,
`id_usuario` varchar(200) NOT NULL
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Criado com sucesso";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
