<?php 
    require_once "conexao.php";

    $conexao = Conexao::conexaoDB();
    $conexao->exec("SET NAMES utf8");


    $sqlServicos = $conexao->prepare("SELECT * FROM funcionario WHERE statusFuncionario = 'ATIVO' ORDER BY nomeFuncionario ASC");

    $sqlServicos->execute();

    $json = array();
    while ($r = $sqlServicos->fetch(PDO::FETCH_ASSOC)){
        array_push($json, $r);
    }
    echo json_encode($json, JSON_UNESCAPED_UNICODE)

?>