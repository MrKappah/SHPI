<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_departamento
{

    public function salvar()
    {

        $nome = addcslashes($_REQUEST['nome']);

        $array = array($nome);

        $sql = "INSERT INTO departamento (nome) values (?)";

      //  INSERT INTO `departamento` (`iddepartamento`, `nome`) VALUES ('1', 'informatica');
        $controle = new controle();
        $con = $controle->salvar($array,$sql);
        return $con;

    }

    public function buscar()
    {
        $sql = "SELECT * from departamento";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM usuarios where iddepartamento=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['id']);
        $nome = addslashes($_REQUEST['nome']);

        $sql = "UPDATE departamento SET nome=$nome WHERE iddepartamento=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>