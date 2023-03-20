<?php
    #LOCALIZA O IP DO BANCO OU NOME DO COMPUTADOR
    $servidor="localhost";
    #NOME DO BANCO
    $banco="cybercafe";
    #USUARIO DO BANCO
    $usuario="admin";
    #SENHA DE USUARIO
    $senha="senha";

#conexão ou link de acesso
$link=mysqli_connect($servidor,$usuario,$senha,$banco);
    
?>