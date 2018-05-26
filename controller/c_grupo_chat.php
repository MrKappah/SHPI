<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_grupo_chat
{

    public function salvar()
    {

        $nome_do_grupo = addcslashes($_REQUEST['nome_do_grupo']);
        $data_criacao = addcslashes($_REQUEST['data_criacao']);
        $nr_integrantes = addcslashes($_REQUEST['nr_integrantes']);
        $susuarios_idUser = addcslashes($_REQUEST['senha']);
        $comentario_idcomentario = addcslashes($_REQUEST['comentario_idcomentario']);

        $array = array($nome_do_grupo, $data_criacao, $nr_integrantes, $susuarios_idUser, $comentario_idcomentario);
//INSERT INTO `grupo_chat` (`idgrupo_chat`, `nome_do_grupo`, `data_criacao`, `nr_integrantes`, `usuarios_idUser`, `comentario_idcomentario`) VALUES ('1', 'Tlhanga moz', '2018-05-15', '1', '1', '1'), ('2', 'Virtualizacao', '2018-05-09', '5', '1', '2');
        $sql = "INSERT INTO usuarios (nome,email,login,senha,nivel_acesso_id) values (?,?,?,?,?,?)";
        $controle = new controle();
        $con = $controle->salvar($array, $sql);
        return $con;

    }

    public function buscar()
    {
        $sql = "SELECT * from grupo_chat";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM grupo_chat where idUser=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['idgrupo_chat']);
        $nome_do_grupo = addslashes($_REQUEST['nome_do_grupo']);
        $data_criacao = addslashes($_REQUEST['data_criacao']);
        $nr_integrantes = addslashes($_REQUEST['nr_integrantes']);
        $comentario_idcomentario = addslashes($_REQUEST['$comentario_idcomentario']);

        //INSERT INTO `grupo_chat` (`idgrupo_chat`, `nome_do_grupo`, `data_criacao`, `nr_integrantes`, `usuarios_idUser`, `comentario_idcomentario`) VALUES ('1', 'Tlhanga moz', '2018-05-15', '1', '1', '1'), ('2', 'Virtualizacao', '2018-05-09', '5', '1', '2');
        $sql = "UPDATE usuarios SET nome_do_grupo=$nome_do_grupo,data_criacao=$data_criacao,nr_integrantes=$nr_integrantes,comentario_idcomentario=$comentario_idcomentario WHERE idgrupo_chat=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>