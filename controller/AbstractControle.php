<?php
/**
 * Created by PhpStorm.
 * User: Gomez
 * Date: 15/05/2018
 * Time: 21:06
 */

require_once '../config/conexao.php';


class controle{

    public function salvar($arrayObject, $query){
        $con = conexao();
        try {
            $pst = $con->prepare($query);
            echo "Salvo com sucesso";
            return $pst->execute($arrayObject);
        } catch (PDOException $e) {
            echo "Erro ao salvar: " . $e->getMessage();
            return false;
        }
    }


    /**
     * Metodo que busca objectos
     * @param $query
     * @return array
     */
    public function buscar($query){
        $con = conexao();
        try {
            $list = array();
            $pst = $con->prepare($query);
            $pst->execute();
            foreach ($pst->fetchAll() as $item) {
                $list[] = $item;
                
            }
            return $list;
        } catch (PDOException $e) {
            echo "Erro ao buscar: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Metodo que elimina um objecto
     * @param $query
     */
    public function eliminar($query){
        $con = conexao();
        try {
            $pst = $con->prepare($query);
            $pst->execute();
        } catch (PDOException $e) {
            echo "Error ao eliminar: " . $e->getMessage();
        }
    }


    /**
     * Metodo que actualiza um objecto
     * @param $query
     */
    public function actualizar($query){
        $con = conexao();
        try {
            $pst = $con->prepare($query);
            $result = $pst->execute();
            echo $pst->rowCount() . " - " . $result;
        } catch (PDOException $e) {
            echo "Error ao atualizar: " . $e->getMessage();
        }
    }
}