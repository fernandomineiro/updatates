<?php
include "config.php";

$sql = "SELECT nome, tipo FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["nome"]; 
        echo  $row["tipo"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
