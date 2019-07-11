<?php
$sql = "TRUNCATE TABLE 'image'";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "TRUNCATE TABLE 'registro'";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "TRUNCATE TABLE 'sms'";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "TRUNCATE TABLE 'usuario'";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `id_usuario` varchar(200) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE `registro` (
  `id` int(6) UNSIGNED NOT NULL,
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

$sql = "INSERT INTO `registro` (`sms`, `enviado`, `naoenviado`, `usuario`, `idusuario`, `reg_date`) VALUES
('Içougue Atacado: promoção nova todo dia. Já conferiu hoje ? https://icougue.com/atacado', '910', '0', 'fernando', 1, '2019-07-11 20:08:42')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "CREATE TABLE `sms` (
  `id` int(6) UNSIGNED NOT NULL,
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



$sql = "INSERT INTO `sms` (`sms`, `idusuario`, `reg_date`, `nome`, `sobrenome`, `empresa`, `estado`, `cidade`, `datadenascimento`) VALUES
('35998919045', 1, '2019-07-11 20:22:59', 'Fernando', 'Fernandes', 'nenhuma', 'MG', 'Lambari', '29/10/1992')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "CREATE TABLE `usuario` (
  `id` int(6) UNSIGNED NOT NULL,
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



$sql = " INSERT INTO `usuario` (`nome`, `email`, `senha`, `tipo`, `idusuario`, `reg_date`) VALUES
( 'agoravai', 'fernandofitilan@hotmail.com', '123456', 'admin', 1, '2019-07-09 12:26:36')";

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



  $sql = "INSERT INTO `valorsms` (`idusuario`, `quantidade`, `reg_date`) VALUES
(1, 40, '2019-07-11 18:35:04')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
