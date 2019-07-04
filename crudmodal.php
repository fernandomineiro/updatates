<?php
session_start();
	include ('config.php');
 
	if(isset($_POST['edit'])){
		
            $id = $_GET['id'];
            $nome = $_POST['nome'];
			$email = $_POST['email'];
			$sql = "UPDATE usuario SET nome='$nome', email='$email' WHERE id='$id'";

if ($conn->query($sql) === FALSE) {
    die("erro");
} 
else{
    header('location: tableusuario.php');
}
	}
   else if(isset($_GET['id'])){
    $valor = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id='$valor'";

    if ($conn->query($sql) === TRUE) {
        echo "Excluido com sucesso";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    header('location: tableusuario.php');
		
 
	}
	
 

 