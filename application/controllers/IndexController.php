<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        
        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity())
        {$this->_redirect("/obras/listar");exit;}
        
        $form = new Application_Form_Login();
        
        if( $this->getRequest()->isPost() ){
            echo"entre por request";
            if( $form->isValid( $this->_getAllParams() )) {
                
                echo "es valido";
                
                $authAdapter = new Zend_Auth_Adapter_DbTable();
                $authAdapter
                    ->setTableName('usuarios')
                    ->setIdentityColumn('user')
                    ->setCredentialColumn('pass');

                $authAdapter
                    ->setIdentity($form->getValue('txtUsuario'))
                    ->setCredential($form->getValue('txtPassword'));

                $auth = Zend_Auth::getInstance();

                
                $result = $auth->authenticate($authAdapter);
                
                if(  $result->isValid() ){
                    return $this->_redirect('/Obras/listar');
                }else{
                    $form->txtUsuario->addErrorMessage('Datos Incorrectos');
                }
            }
        }
        
        
        $this->view->form=$form;
    }


}

