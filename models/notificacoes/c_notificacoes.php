<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_notificacoes
{

    public function salvar()
    {

        $comentario_idcomentario = addcslashes($_REQUEST['comentario_idcomentario']);
        $grupo_chat_idgrupo_chat = addcslashes($_REQUEST['grupo_chat_idgrupo_chat']);
        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $tipo_notificacao = addcslashes($_REQUEST['tipo_notificacao']);
        $corpo_notificao = addcslashes($_REQUEST['corpo_notificao']);
        $publicacao_idpublicacao = addcslashes($_REQUEST['publicacao_idpublicacao']);
        $solicitacao_idsolicitacao = addcslashes($_REQUEST['solicitacao_idsolicitacao']);
        $array = array($comentario_idcomentario, $grupo_chat_idgrupo_chat, $usuarios_idUser, $tipo_notificacao, $corpo_notificao, $publicacao_idpublicacao, $solicitacao_idsolicitacao);
//INSERT INTO `notificacoes` (`idnotificacoes`, `comentario_idcomentario`, `grupo_chat_idgrupo_chat`, `usuarios_idUser`, `tipo_notificacao`, `corpo_notificao`, `publicacao_idpublicacao`, `solicitacao_idsolicitacao`) VALUES ('1', '1', '1', '1', '1', 'Como vao colegas', '1', '2'), ('2', '2', '1', '2', '2', 'Tou nice brada', '1', '1');
        $sql = "INSERT INTO notificacoes (comentario_idcomentario,grupo_chat_idgrupo_chat,usuarios_idUser,tipo_notificacao,corpo_notificao,publicacao_idpublicacao,solicitacao_idsolicitacao) values (?,?,?,?,?,?,?)";
        $controle = new controle();
        $con = $controle->salvar($array, $sql);
        return $con;

    }

    public function buscar()
    {
        $sql = "SELECT * from notificacoes";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM notificacoes where idUser=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['idnotificacoes']);
        $comentario_idcomentario = addcslashes($_REQUEST['comentario_idcomentario']);
        $grupo_chat_idgrupo_chat = addcslashes($_REQUEST['grupo_chat_idgrupo_chat']);
        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $tipo_notificacao = addcslashes($_REQUEST['tipo_notificacao']);
        $corpo_notificao = addcslashes($_REQUEST['corpo_notificao']);
        $publicacao_idpublicacao = addcslashes($_REQUEST['publicacao_idpublicacao']);
        $solicitacao_idsolicitacao = addcslashes($_REQUEST['solicitacao_idsolicitacao']);

        $sql = "UPDATE notificacoes SET comentario_idcomentario=$comentario_idcomentario,grupo_chat_idgrupo_chat=$grupo_chat_idgrupo_chat,usuarios_idUser=$usuarios_idUser,tipo_notificacao=$tipo_notificacao,corpo_notificao=$corpo_notificao,publicacao_idpublicacao=$publicacao_idpublicacao,solicitacao_idsolicitacao=$solicitacao_idsolicitacao WHERE idnotificacoes=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>