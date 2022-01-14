<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Empresa implements Crud{

    public static function getAll(){
      $mysqli = Database::getInstance();
      $query=<<<sql
        SELECT e.catalogo_empresa_id, e.nombre, e.descripcion, s.nombre as status FROM catalogo_empresa e JOIN catalogo_status s ON s.catalogo_status_id = e.status WHERE s.catalogo_status_id != 2 ORDER BY e.catalogo_empresa_id ASC 
sql;
      return $mysqli->queryAll($query);
    }

    public static function insert($empresa){
	    $mysqli = Database::getInstance(1);
      $query=<<<sql
        INSERT INTO catalogo_empresa VALUES(null, :clave, :rfc, :razon_social, :email, :telefono_uno, :telefono_dos, :domicilio_fiscal, :sitio_web, NOW(), 1)
sql;
        $parametros = array(
          ':clave'=>$empresa->_clave,
          ':rfc'=>$empresa->_rfc,
          ':razon_social'=>$empresa->_razon_social,
          ':email'=>$empresa->_email,
          'telefono_uno'=>$empresa->_telefono_uno,
          'telefono_dos'=>$empresa->_telefono_dos,
          'domicilio_fiscal'=>$empresa->_domicilio_fiscal,
          'sitio_web'=>$empresa->_sitio_web
        );

        $id = $mysqli->insert($query,$parametros);
        $accion = new \stdClass();
        $accion->_sql= $query;
        $accion->_parametros = $parametros;
        $accion->_id = $id;

        UtileriasLog::addAccion($accion);
        return $id;
    }

    public static function update($empresa){
      $mysqli = Database::getInstance(true);
      $query=<<<sql
      UPDATE catalogo_empresa SET nombre = :nombre, descripcion = :descripcion, status = :status WHERE catalogo_empresa_id = :id
sql;
      $parametros = array(
        ':id'=>$empresa->_catalogo_empresa_id,
        ':nombre'=>$empresa->_nombre,
        ':descripcion'=>$empresa->_descripcion,
        ':status'=>$empresa->_status
      );
      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $empresa->_catalogo_empresa_id;
      UtileriasLog::addAccion($accion);
        return $mysqli->update($query, $parametros);
    }

    public static function delete($id){
      $mysqli = Database::getInstance();
      $select = <<<sql
      SELECT e.catalogo_empresa_id FROM catalogo_empresa e JOIN catalogo_colaboradores c
      ON e.catalogo_empresa_id = c.catalogo_empresa_id WHERE e.catalogo_empresa_id = $id
sql;

      $sqlSelect = $mysqli->queryAll($select);
      if(count($sqlSelect) >= 1){
        return array('seccion'=>2, 'id'=>$id); // NO elimina
      }else{
        $query = <<<sql
        UPDATE catalogo_empresa SET status = 2 WHERE catalogo_empresa.catalogo_empresa_id = $id;
sql;
        $mysqli->update($query);

        $accion = new \stdClass();
        $accion->_sql= $query;
        $accion->_parametros = $parametros;
        $accion->_id = $id;
        UtileriasLog::addAccion($accion);
        return array('seccion'=>1, 'id'=>$id); // Cambia el status a eliminado
      }
    }

    public static function verificarRelacion($id){
      $mysqli = Database::getInstance();
      $select = <<<sql
      SELECT e.catalogo_empresa_id FROM catalogo_empresa e JOIN catalogo_colaboradores c
      ON e.catalogo_empresa_id = c.catalogo_empresa_id WHERE e.catalogo_empresa_id = $id
sql;
      $sqlSelect = $mysqli->queryAll($select);
      if(count($sqlSelect) >= 1)
        return array('seccion'=>2, 'id'=>$id); // NO elimina
      else
        return array('seccion'=>1, 'id'=>$id); // Cambia el status a eliminado
      
    }

    public static function getById($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT ce.catalogo_empresa_id, ce.nombre, ce.descripcion, ce.status, cs.nombre AS nombre_status, cs.catalogo_status_id FROM catalogo_empresa AS ce INNER JOIN catalogo_status AS cs WHERE catalogo_empresa_id = $id AND ce.status = cs.catalogo_status_id 
sql;
      return $mysqli->queryOne($query);
    }

    public static function getByIdReporte($id){
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT e.catalogo_empresa_id, e.nombre, e.descripcion, e.status, s.nombre as status FROM catalogo_empresa e JOIN catalogo_status s ON s.catalogo_status_id = e.status WHERE e.status!=2 AND e.catalogo_empresa_id = $id
sql;

      return $mysqli->queryOne($query);
    }


    public static function getStatus(){
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT * FROM catalogo_status
sql;
      return $mysqli->queryAll($query);
    }

    public static function getRFC($rfc_empresa){
      $mysqli = Database::getInstance();
      $query =<<<sql
      SELECT * FROM `catalogo_empresa` WHERE `rfc` LIKE '$rfc_empresa' 
sql;
      $dato = $mysqli->queryOne($query);
      return ($dato>=1) ? 1 : 2 ;
    }

    public static function getIdComparacion($id, $nombre){
      $mysqli = Database::getInstance();
      $query =<<<sql
      SELECT * FROM catalogo_empresa WHERE catalogo_empresa_id = '$id' AND nombre Like '$nombre' 
sql;
      $dato = $mysqli->queryOne($query);
      // 0

      if($dato>=1){
        return 1;
      }else{
        return 2;
      }
    }
}
