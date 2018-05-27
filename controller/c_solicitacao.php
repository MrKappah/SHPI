<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_solicitacao
{

    public function salvar()
    {

        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $descricao_solicitacao = addcslashes($_REQUEST['descricao_solicitacao']);
        $hora = addcslashes($_REQUEST['hora']);
        $data_sol = addcslashes($_REQUEST['data_sol']);
        $array = array($usuarios_idUser, $descricao_solicitacao, $hora, $data_sol);

//INSERT INTO `solicitacao` (`idsolicitacao`, `usuarios_idUser`, `descricao_solicitacao`, `hora`, `data_sol`) VALUES ('1', '1', 'o meu pc nao esta ligar', '2018-05-09 00:00:00', '2018-05-15'), ('2', '3', 'minha impressora nao esta imprimir', '2018-05-17 00:00:00', '2018-05-16');
        $sql = "INSERT INTO solicitacao (usuarios_idUser,descricao_solicitacao,hora,data_sol) values (?,?,?,?)";
        $controle = new controle();
        $con = $controle->salvar($array, $sql);
        return $con;
    }

    public function buscar()
    {
        $sql = "SELECT * from solicitacao";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM solicitacao where idsolicitacao=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['idsolicitacao']);
        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $descricao_solicitacao = addcslashes($_REQUEST['descricao_solicitacao']);
        $hora = addcslashes($_REQUEST['hora']);
        $data_sol = addcslashes($_REQUEST['data_sol']);

        $sql = "UPDATE solicitacao SET usuarios_idUser=$usuarios_idUser,descricao_solicitacao=$descricao_solicitacao,hora=$hora,data_sol=$data_sol WHERE idsolicitacao=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>