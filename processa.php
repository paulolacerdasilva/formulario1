<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($nome && $idade && $email){
        echo 'Dados recebidos com sucesso!';
        echo 'Nome:'.$nome.'<br>';
        echo 'Idade:'.$idade.'<br>';
        echo 'Email:'.$email.'<br>';
    }else{
        echo 'Erro: Verifique os campos preenchidos.';
    }
?>