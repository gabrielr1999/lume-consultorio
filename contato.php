<?php

    if(isset($_POST['email']) && !empty($_POST['email'])) {
    
        $nome = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $assunto = addslashes($_POST['subject']);
        $mensagem = addslashes($_POST['message']);

        $to = "contato@lumeconsultorio.com.br";
        $subject = "Mensagem enviada da página de Contato";
        $body = "Nome: " . $nome . "\r\n" .
                "E-mail: " . $email . "\r\n" .
                "Assunto: " . $assunto . "\r\n" .
                "Mensagem: " . $mensagem;
        $header = "From: $nome" . "\r\n" . "Reply-To:" . $email . "\r\n" . "X=Mailer:PHP/" . phpversion();
        $envio = mail($to,$subject,$body,$header);

        if ($envio) {
            echo "<script>alert('E-mail enviado com sucesso!')</script>";
            echo "<script>location.href='https://lumeconsultorio.com.br/contato'</script>";
        } else {
            echo "<script>alert('E-mail não pode ser enviado');</script>";
            echo "<script>location.href='https://lumeconsultorio.com.br/contato'</script>";
        }

    }


?>