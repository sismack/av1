<?php

$servidor = "localhost";
$banco = "mensagens";
$usuario = "root";
$senha = "123456";
//$db = mysql_select_db($banco, $link);
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];

if($email != null && $msg !=null){
    $sql = "INSERT INTO msg_Recebidas (email, mensagem, nome) VALUES (" . '"'. $email .'"'.",". '"' . $msg . '"'. ",". '"' . $nome . '"' ." ); ";
} else {
    die("email ou mensagem não preenchidos");
}

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(mysqli_query($conn, $sql)) {
    echo "Recebido com sucesso";
    header('location: /av1/mail.php?recebidoComSucesso=True');
} else {
    //echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    header('location: /av1/mail.php?recebidoComSucesso=False');
}




?>