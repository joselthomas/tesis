<?php

class UsuariosController extends Zend_Controller_Action
{
    
    public function init()
    {
    }
    
    public function logoutAction()
    {
        $auth = Zend_Auth::getInstance()->clearIdentity();
        $this->_redirect("/Index");
    }
    
}

?>
