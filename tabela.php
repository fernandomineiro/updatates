<?php
include "config.php";
$sql = "DROP TABLE IF EXISTS image";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "DROP TABLE IF EXISTS registro";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "DROP TABLE IF EXISTS sms";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "DROP TABLE IF EXISTS usuario";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "DROP TABLE IF EXISTS valorsms";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE `image` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `location` varchar(200) NOT NULL,
  `id_usuario` varchar(200) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE `registro` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `sms` varchar(120) NOT NULL,
  `enviado` varchar(50) DEFAULT NULL,
  `naoenviado` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `idusuario` int(200) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO registro (sms, enviado, naoenviado, usuario, idusuario)
VALUES ('Içougue Atacado: promoção nova todo dia. Já conferiu hoje ? https://icougue.com/atacado', '910', '0', 'fernando', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "CREATE TABLE `sms` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `sms` varchar(30) NOT NULL,
  `idusuario` int(200) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nome` varchar(200) DEFAULT NULL,
  `sobrenome` varchar(11) DEFAULT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `datadenascimento` varchar(200) DEFAULT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "INSERT INTO sms (sms, idusuario,  nome, sobrenome, empresa, estado, cidade, datadenascimento) VALUES
('35998919045', '1',  'Fernando', 'Fernandes', 'nenhuma', 'MG', 'Lambari', '29/10/1992')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "CREATE TABLE `usuario` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



$sql = "INSERT INTO usuario (nome, email, senha, tipo, idusuario) VALUES
('agoravai', 'fernandofitilan@hotmail.com', '123456', 'admin', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "CREATE TABLE `valorsms` (
  `idusuario` int(99) NOT NULL,
  `quantidade` int(200) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


  $sql = "INSERT INTO valorsms (idusuario, quantidade) VALUES
('1', '40')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
