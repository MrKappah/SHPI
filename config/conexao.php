<?php


function conexao() {



    try{
        $conexao = new PDO("mysql:dbname=shpi;host=localhost;charset=utf8" , "root" , "");
        $conexao -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }catch (PDOException $e){
        echo "Erro d conexao" . $e -> getMessage();
    }

}



