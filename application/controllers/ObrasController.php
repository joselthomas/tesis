<?php

class ObrasController extends Zend_Controller_Action
{
    
    public function init()
    {
        
    }
    
    public function listarAction()
    {
        
    }
    
    public function ingresarAction()
    {
        
        $form = new Application_Form_Obra();
        $this->view->form = $form;
        
    }
}
?>
