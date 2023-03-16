<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="post" class="form">
            <label for="">Nome completo:</label>
            <input type="text" name="nome" id="" required placeholder="Preencha seu nome completo..." value="<?php if (isset($_COOKIE['nome'])) {echo $_COOKIE['nome'];} ?>"><br>

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="" required placeholder="Preencha seu nome completo..." value="<?php if (isset($_COOKIE['nome'])) {echo $_COOKIE['nome'];} ?>"><br>

            <label for="telefone">Telefone para contato:</label>
            <input type="tel" name="telefone" id="" required placeholder="Preencha seu nome completo..." value="<?php if (isset($_COOKIE['nome'])) {echo $_COOKIE['nome'];} ?>"><br>

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

            <label for="">Data de atendimento:</label>
            <input type="date" name="data" id="" required value="<?php if (isset($_COOKIE['nome'])) {echo $_COOKIE['nome'];} ?>"><br>

            <label for="">Hora de atendimento:</label>
            <input type="time" name="hora" id="" required value="<?php if (isset($_COOKIE['nome'])) {echo $_COOKIE['nome'];} ?>"><br>

            <button name="agendar" type="submit">Agendar</button>

        </form>

        <div>
            <?php

            if (isset($_POST['agendar'])) {
                
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $servicos = $_POST['services'];
                $data = $_POST['data'];
                $hora = $_POST['hora'];

                //setcookie("Nome do cliente: ", $nome, time() + (86400 * 30), "/"); // expira em 30 dias
                setcookie("E-mail: ", $email, time() + (86400 * 30), "/"); // expira em 30 dias
                setcookie("Telefone para contato: ", $telefone, time() + (86400 * 30), "/"); // expira em 30 dias
                setcookie("Serviço: ", $servicos, time() + (86400 * 30), "/"); // expira em 30 dias
                setcookie("Data agendada: ", $data, time() + (86400 * 30), "/"); // expira em 30 dias
                setcookie("Horário agendado: ", $hora, time() + (86400 * 30), "/"); // expira em 30 dias
            }

            
            ?>
        </div>

    </div>
</body>

</html>