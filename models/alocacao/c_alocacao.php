<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_alocacao
{

    public function salvar()
    {

        $data_aloc = addcslashes($_REQUEST['data_aloc']);
        $hora = addcslashes($_REQUEST['hora']);
        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $desc_recurso_alocado = addcslashes($_REQUEST['desc_recurso_alocado']);

        $array = array($data_aloc,$hora, $usuarios_idUser, $desc_recurso_alocado);
        $sql = "INSERT INTO alocacao (data_aloc,hora,usuarios_idUser,desc_recurso_alocado) values (?,?,?,?)";
        $controle = new controle();
        $con = $controle->salvar($sql);
        return $con;

      //INSERT INTO `alocacao` (`idAlocacao`, `data_aloc`, `hora`, `usuarios_idUser`, `desc_recurso_alocado`) VALUES ('1', '2018-05-01', '2018-05-08 00:00:00', '1', 'yes yes yes');

    }

    public function buscar()
    {
        $sql = "SELECT * from alocacao";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM alocacao where idAlocacao=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['idAlocacao']);
        $data_aloc = addslashes($_REQUEST['data_aloc']);
        $hora = addslashes($_REQUEST['hora']);
        $usuarios_idUser = addslashes($_REQUEST['usuarios_idUser']);
        $desc_recurso_alocado = addslashes($_REQUEST['desc_recurso_alocado']);

        $sql = "UPDATE usuarios SET data_aloc=$data_aloc,hora=$hora,usuarios_idUser=$usuarios_idUser,desc_recurso_alocado=$desc_recurso_alocado WHERE idAlocacao=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>