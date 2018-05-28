<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_usuarios
{

    public function salvar()
    {

        $nome = addcslashes($_REQUEST['nome']);
        $email = addcslashes($_REQUEST['email']);
        $login = addcslashes($_REQUEST['login']);
        $senha = addcslashes($_REQUEST['senha']);
        $nivel_acesso_id = addcslashes($_REQUEST['nivel_acesso_id']);

        $array = array($nome, $email, $login, $senha, $nivel_acesso_id);
        //INSERT INTO usuarios (`idUser`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `created`, `modified`, `usuarios_idUser`, `departamento_iddepartamento`) VALUES ('3', 'fg', 'dfg', 'dfg', 'dfg', '1', '2018-05-15', '2018-05-22', '1', '1');
        $sql = "INSERT INTO usuarios (nome,email,login,senha,nivel_acesso_id) values (?,?,?,?,?)";
        $controle = new controle();
        $con = $controle->salvar($array,$sql);
        return $con;


    }

    public function buscar()
    {
        $sql = "SELECT * from usuarios";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM usuarios where idUser=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['id']);
        $nome = addslashes($_REQUEST['nome']);
        $email = addslashes($_REQUEST['email']);
        $login = addslashes($_REQUEST['login']);
        $senha = addslashes($_REQUEST['senha']);
        $nivel_acesso_id = addslashes($_REQUEST['nivel_acesso_id']);

        $sql = "UPDATE usuarios SET nome=$nome,email=$email,login=$login,senha=$senha,nivel_acesso_id=$nivel_acesso_id WHERE idUser=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>