<?php
    include("config.php");
    switch(@$_REQUEST["acao"]){

        case 'cadastrar';
            $nome = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email' FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha');
            $data_nasc = filter_input(INPUT_POST, 'data_nasc');

            $sql = $pdo->prepare("INSERT INTO usuario (nome, email, senha, data_nasc) VALUES ('$name', '$email', '$senha', '$data_nasc')");
            $sql->execute();

            header("Location: index.php");
            exit;


        
            break;

        case 'editar';
        break;

        case 'excluir';
        break;
    }

?>