<?php
include "config.php";

$sql = "SELECT idusuario, quantidade FROM valorsms";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idusuario"]. " - Name: " . $row["quantidade"]. ";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
