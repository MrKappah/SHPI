<?php

include_once "AbstractControle.php";
include_once "../model/publicacao.php";


class c_contacto
{

    public function salvar()
    {

        $Email = addcslashes($_REQUEST['Email']);
        $Telefone = addcslashes($_REQUEST['Telefone']);
        $Celular = addcslashes($_REQUEST['Celular']);
        $usuarios_idUser = addcslashes($_REQUEST['usuarios_idUser']);
        $departamento_iddepartamento = addcslashes($_REQUEST['departamento_iddepartamento']);


//INSERT INTO `contacto` (`idContacto`, `Email`, `Telefone`, `Celular`, `usuarios_idUser`, `departamento_iddepartamento`) VALUES ('1', 'info.shpi@shpi.co.mz', '826215197', '840302176', '1', '1'), ('2', 'comercial@shpi.co.mz', '840302176', '826215197', '1', '2');
        $array = array($Email, $Telefone, $Celular, $usuarios_idUser,$departamento_iddepartamento);

        $sql = "INSERT INTO contacto (Email,Telefone,Celular,usuarios_idUser,departamento_iddepartamento) values (?,?,?,?,?,?)";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;



    }

    public function buscar()
    {
        $sql = "SELECT * from contacto";
        $controle = new controle();
        $con = $controle->buscar($sql);
        return $con;
    }


    public function eliminar()
    {
        $id = addcslashes($_REQUEST['id']);

        $sql = "DELETE FROM contacto where idUser=$id";
        $controle = new controle();
        $con = $controle->eliminar($sql);
        return $con;
    }

    public function actualizar()
    {
        $id = addcslashes($_REQUEST['idContacto']);
        $Email = addslashes($_REQUEST['Email']);
        $Telefone = addslashes($_REQUEST['Telefone']);
        $Celular = addslashes($_REQUEST['Celular']);
        $usuarios_idUser = addslashes($_REQUEST['senha']);
        $departamento_iddepartamento = addslashes($_REQUEST['nivel_acesso_id']);

        
//INSERT INTO `contacto` (`idContacto`, `Email`, `Telefone`, `Celular`, `usuarios_idUser`, `departamento_iddepartamento`) VALUES ('1', 'info.shpi@shpi.co.mz', '826215197', '840302176', '1', '1'), ('2', 'comercial@shpi.co.mz', '840302176', '826215197', '1', '2');
        $sql = "UPDATE contacto SET Email=$Email,Telefone=$Telefone,Celular=$Celular,usuarios_idUser=$usuarios_idUser,departamento_iddepartamento=$departamento_iddepartamento WHERE idUser=$id";
        $controle = new controle();
        $con = $controle->actualizar($sql);
        return $con;
    }
}


?>