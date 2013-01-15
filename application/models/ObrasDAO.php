<?php

class Application_Model_ObrasDAO extends Zend_Db_Table_Abstract
{
    
    protected $_name = 'obras';
    protected $_primary = 'idObra';
    
    
    public function getAll()
    {
        
        return $this->fetchAll();
    }
    
    
    public function saveObra( $bind )
    {
        
        $row = $this->createRow();
        
        $row -> idObra = $bind ['id'];
        $row -> Clientes_idCliente = $bind ['cliente'];
        //$row -> Usuarios_idUsuarios = $bind [''];
        $row -> fecha = date();
    }
        
    
}


?>
