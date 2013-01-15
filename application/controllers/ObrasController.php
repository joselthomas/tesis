<?php

class ObrasController extends Zend_Controller_Action
{
    
    public function init()
    {
        
    }
    
    public function listarAction()
    {
        $obras = new Application_Model_ObrasDAO();
        
        $this->view->obras = $obras->getAll();
    }
    
    public function ingresarAction()
    {
        
        $form = new Application_Form_Obra();
        
        if ( $this -> getRequest() -> isPost() )
        {
            if ($form -> isValid ( $this -> _getAllParams() ) )
            {
                $obra = new Application_Model_ObrasDAO();
                $obra ->saveObra( $form ->getValues() );
                $this->_redirect("/obras/listar");
            }
        }
        
        
        $this->view->form = $form;
        
    }
}
?>
