<?php

    if(isset($_POST['email']) && !empty($_POST['email'])) {
    
        $nome = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['phone']);
        $opcao = addslashes($_POST['option']);
        $data = addslashes($_POST['data']);
        $hora = addslashes($_POST['time']);

        $to = "contato@lumeconsultorio.com.br";
        $subject = "Mensagem enviada da página Home - Agendamento";
        $body = "Nome: " . $nome . "\r\n" .
                "E-mail: " . $email . "\r\n" .
                "Telefone: " . $telefone . "\r\n" .
                "Opção: " . $opcao . "\r\n" .
                "Data: " . $data . "\r\n" .
                "Hora: " . $hora;
        $header = "From: $nome" . "\r\n" . "Reply-To:" . $email . "\r\n" . "X=Mailer:PHP/" . phpversion();
        $envio = mail($to,$subject,$body,$header);

        if ($envio) {
            echo "<script>alert('E-mail enviado com sucesso!')</script>";
            echo "<script>location.href='https://lumeconsultorio.com.br'</script>";
        } else {
            echo "<script>alert('E-mail não pode ser enviado');</script>";
            echo "<script>location.href='https://lumeconsultorio.com.br'</script>";
        }

    }


?>