<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_comentario
{

    public function salvar()
    {

        $mensagem = addcslashes($_REQUEST['mensagem']);
        $data = addcslashes($_REQUEST['data']);
        $hora = addcslashes($_REQUEST['hora']);
        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $publicacao_idpublicacao = addcslashes($_REQUEST['publicacao_idpublicacao']);

        $array = array($mensagem, $data, $hora, $usuarios_idUser, $publicacao_idpublicacao);

        $sql = "INSERT INTO comentario (mensagem,data_coment,hora,usuarios_idUser,publicacao_idpublicacao) values (?,?,?,?,?)";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;

        //   INSERT INTO `comentario` (`idcomentario`, `mensagem`, `data_coment`, `hora`, `usuarios_idUser`, `publicacao_idpublicacao`) VALUES ('1', 'Como estao meus bradas', '2018-05-08', '2018-05-08 00:00:00', '1', '1'), ('2', 'Tou Bem brow', '2018-05-23', '2018-05-08 00:00:00', '1', '1');
    }

    public function buscar()
    {
        $sql = "SELECT * from comentario";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM comentario where idUser=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }


    public function actualizar()
    {
        $id = addcslashes($_REQUEST['id']);
        $mensagem = addslashes($_REQUEST['mensagem']);
        $data_coment = addslashes($_REQUEST['data_coment']);
        $hora = addslashes($_REQUEST['hora']);
        $usuarios_idUser = addslashes($_REQUEST['usuarios_idUser']);
        $pub = addslashes($_REQUEST['publicacao_idpublicacao']);


        //   INSERT INTO `comentario` (`idcomentario`, `mensagem`, `data_coment`, `hora`, `usuarios_idUser`, `publicacao_idpublicacao`) VALUES ('1', 'Como estao meus bradas', '2018-05-08', '2018-05-08 00:00:00', '1', '1'), ('2', 'Tou Bem brow', '2018-05-23', '2018-05-08 00:00:00', '1', '1');
        $sql = "UPDATE comentario SET mensagem=$mensagem,data_coment=$data_coment,hora=$hora,usuarios_idUser=$usuarios_idUser,publicacao_idpublicacao=$pub WHERE idcomentario=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>