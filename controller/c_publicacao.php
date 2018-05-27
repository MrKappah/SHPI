<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_publicacao
{


    public function salvar()
    {

        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $texto = addcslashes($_REQUEST['texto']);
        $data_pub = addcslashes($_REQUEST['data_pub']);
        $cabecalho = addcslashes($_REQUEST['cabecalho']);

        //INSERT INTO `publicacao` (`idpublicacao`, `usuarios_idUser`, `texto`, `data_pub`, `cabecalho`) VALUES ('1', '2', 'Sejam bem vindos ao grupo chat', '2018-05-09', NULL), ('2', '3', 'O meu muito obrigado', '2018-05-01', NULL);
        $array = array($usuarios_idUser, $texto, $data_pub, $cabecalho);
        $sql = "INSERT INTO publicacao (usuarios_idUser,texto,data_pub,cabecalho) values (?,?,?,?)";
        $controle = new controle();
        $con = $controle->salvar($array, $sql);
        return $con;


    }

    public function buscar()
    {
        $sql = "SELECT * from publicacao";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM publicacao where idpublicacao=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['idpublicacao']);
        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $texto = addcslashes($_REQUEST['texto']);
        $data_pub = addcslashes($_REQUEST['data_pub']);
        $cabecalho = addcslashes($_REQUEST['cabecalho']);

        $sql = "UPDATE publicacao SET usuarios_idUser=$usuarios_idUser,texto=$texto,data_pub=$data_pub,cabecalho=$cabecalho WHERE idpublicacao=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}



?>