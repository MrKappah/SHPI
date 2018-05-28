<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_problema
{

    public function salvar()
    {

        $hora = addcslashes($_REQUEST['hora']);
        $data_prob = addcslashes($_REQUEST['data_prob']);
        $solicitacao_idsolicitacao = addcslashes($_REQUEST['solicitacao_idsolicitacao']);
        $status = addcslashes($_REQUEST['status']);
        $Alocacao_idAlocacao = addcslashes($_REQUEST['Alocacao_idAlocacao']);
        $array = array($hora, $data_prob, $solicitacao_idsolicitacao, $status, $Alocacao_idAlocacao);

  //INSERT INTO `problema` (`idresolucao`, `hora`, `data_prob`, `solicitacao_idsolicitacao`, `status`, `Alocacao_idAlocacao`) VALUES ('1', '2018-05-10 00:00:00.000000', '2018-05-02', '1', 'pendente', '1'), ('2', '2018-05-01 00:00:00.000000', '2018-05-16', '2', 'resolvido', '2');
        $sql = "INSERT INTO problema (hora,data_prob,solicitacao_idsolicitacao,status,Alocacao_idAlocacao) values (?,?,?,?,?)";
        $controle = new controle();
        $con = $controle->salvar($array, $sql);
        return $con;

    }

    public function buscar()
    {
        $sql = "SELECT * from problema";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['idresolucao']);

        $sql = "DELETE FROM problema where idresolucao=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['id']);
        $hora = addcslashes($_REQUEST['hora']);
        $data_prob = addcslashes($_REQUEST['data_prob']);
        $solicitacao_idsolicitacao = addcslashes($_REQUEST['solicitacao_idsolicitacao']);
        $status = addcslashes($_REQUEST['status']);
        $Alocacao_idAlocacao = addcslashes($_REQUEST['Alocacao_idAlocacao']);

        $sql = "UPDATE problema SET hora=$hora,data_prob=$data_prob,solicitacao_idsolicitacao=$solicitacao_idsolicitacao,status=$status,Alocacao_idAlocacao=$Alocacao_idAlocacao WHERE idUser=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>