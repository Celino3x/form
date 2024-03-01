<?php

    function send(array $data){
        $email = new PHPMailer\PHPMailer\PHPMailer;
	    $email->CharSet = 'UTF-8';
        $email->SMTPSecure = 'plain';
        $email->isSMTP();
        $email->Host = 'smtp.mailtrap.io';
        $email->Port = 465;
        $email->SMTPAuth = true;
        $email->Username = '37c6dde777fe53';
        $email->Password = 'febd5f5ee48f5d';
        $email->isHTML(true);
        $email->setFrom('celino3x@gmail.com');
        $email->FromName = $data['quem'];
        $email->addAddress($data['para']);
        $email->Body = $data['mensagem'];
        $email->Subject = $data['assunto'];
        $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
        $email->MsgHTML($data['mensagem']);

        return $email->send();
    }