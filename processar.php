<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$servico = $_POST['services'];
$dataHora = $_POST['dataHora'];

$sql = "INSERT INTO agendamentos (nome, email, telefone, servico, dataHora)
VALUES ('$nome', '$email', '$tel', '$servico', '$dataHora' )";

if ($conn->query($sql) === TRUE) {
  echo "Dados inseridos com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    //setcookie("Nome do cliente: ", $nome, time() + (86400 * 30), "/"); // expira em 30 dias
    setcookie("E-mail", $email, time() + (86400 * 30)); // expira em 30 dias
    setcookie("Nome", $nome, time() + (86400 * 30)); // expira em 30 dias
    setcookie("Telefone", $tel, time() + (86400 * 30)); // expira em 30 dias
    setcookie("Servico", $servico, time() + (86400 * 30)); // expira em 30 dias
    setcookie("DataAgendada", $dataHora, time() + (86400 * 30)); // expira em 30 dias
?>