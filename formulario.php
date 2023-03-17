<?php

if (isset($_POST['agendar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $servicos = $_POST['services'];
    $data = $_POST['data'];

    //setcookie("Nome do cliente: ", $nome, time() + (86400 * 30), "/"); // expira em 30 dias
    setcookie("E-mail: ", $email, time() + (86400 * 30), "/"); // expira em 30 dias
    setcookie("Telefone para contato: ", $telefone, time() + (86400 * 30), "/"); // expira em 30 dias
    setcookie("Serviço: ", $servicos, time() + (86400 * 30), "/"); // expira em 30 dias
    setcookie("Data agendada: ", $data, time() + (86400 * 30), "/"); // expira em 30 dias
    setcookie("Horário agendado: ", $hora, time() + (86400 * 30), "/"); // expira em 30 dias
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="header">
            <h1>Agendamento</h1>
        </div>

        <form action="processar.php" method="POST" class="form" id="form" class="form">
            <label for="">Nome completo:</label>
            <input type="text" name="nome" id="nome" required placeholder="Preencha seu nome completo...">

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="" required placeholder="Preencha seu nome completo...">

            <label for="telefone">Telefone para contato:</label>
            <input type="tel" name="telefone" id="" required placeholder="Preencha seu nome completo...">

            <label for="services">Serviços:</label>
            <select name="services" id="">
                <option value="">-----</option>
                <option value="lavagem especial">Lavagem Especial</option>
                <option value="corte de cabelo">Corte de Cabelo</option>
                <option value="escova">Escova</option>
                <option value="luzes">Luzes</option>
                <option value="entrelace">Entrelace</option>
                <option value="coloração">Coloração</option>
                <option value="penteado festo">Penteado Festo</option>
                <option value="selagem">Selagem</option>
            </select><br>

            <label for="dataHora">Data e hora:</label>
            <input type="datetime-local" id="dataHora" name="dataHora" min="<?php echo date('Y-m-d\TH:i'); ?>">
            <span id="horarioInvalido" style="display:none; color:red;">Horário inválido</span>

            <button name="agendar">Agendar</button>

        </form>

    </div>
</body>

</html>