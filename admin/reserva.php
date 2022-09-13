<?php 
    require_once ("conexao.php");
    header('Content-type: application/json; charset=utf-8');
    header('Access-Control-Allow-Method: POST');

    $data = file_get_contents("php://input");
    $objData = json_decode($data);

    $codFunc = $objData->codFunc;
    $dataReserva = $objData->dataReserva;
    $codCliente = $objData->codCliente;
    $codServico = $objData->codServico;

    $obsReserva = "Reserva realizada pelo APP";
    $dataReserva = $dataReserva;
    $horaReserva =  $dataReserva;
    $statusReserva = "AGUARDANDO";


    $codFunc = stripcslashes($codFunc);
    $codCliente = stripcslashes($codCliente);
    $codServico = stripcslashes($codServico);


    $codFunc = trim($codFunc);
    $codCliente = trim($codCliente);
    $codServico = trim($codServico);



    $conexao = Conexao::conexaoDB();
    $conexao->exec("SET NAMES utf8");
    
    if($conexao){
        $query = $conexao->prepare("INSERT INTO reserva (obsReserva, dataReserva, horaReserva, statusReserva, idFuncionario, idCliente, idServico) VALUES ('".$obsReserva."','".$dataReserva."','".$horaReserva."','".$statusReserva."','".$codFunc."','".$codCliente."','".$codServico."');");

        $query->execute();
        $dadosCadastro = array('mens' => 'Dados reserva com sucesso.');
        echo json_encode($dadosCadastro);

    }else{

        $dadosCadastro = array('mes' => 'Não foi possível realizar a reserva com sucesso.');
        echo json_encode($dadosCadastro);

    }

    
    
    

?>