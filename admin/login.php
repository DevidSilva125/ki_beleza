<?php 
    require_once ("conexao.php");
    
    $conexao = Conexao::conexaoDB();
    $conexao->exec("SET NAMES utf8");
    if(!$conexao){
        echo "Não foi possivel conectar ao banco de dados!";
    }

    if(isset($_GET['email']) || isset($_GET['senha'])){
        $email = $_GET['email'];
        $senha = $_GET ['senha'];
       
    
        $sqlDetalhe = $conexao->prepare("SELECT * FROM cliente WHERE emailCliente = '$email' and senhaCliente = '$senha' ");
        
       
        
        $sqlDetalhe->execute();
        
        
        
        $json = array();
        
        $dadosDetalhe = $sqlDetalhe->fetch(PDO::FETCH_ASSOC);

        if(!$dadosDetalhe == false){

            $loginJson = array(
                "msg" => array(
                    "Logado"=>"sim",
                    "texto"=>"logado com sucesso"
                ),
                "Dados"=> $dadosDetalhe
                  
            );
            array_push($json, $loginJson);
        }

      

        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }
    
    

?>