<?php

class Application_Form_Login extends Zend_Form
{
    
    public function init()
    {
        
        $this -> setDisableLoadDefaultDecorators(true);
        $this->setDecorators(array(array( 'ViewScript',
                                    array( 'viewScript' => 'usuarios/_form_login.phtml') ), 'Form'
                                    )
                           );
        
        $this->addElement('text', 'txtUsuario', array(
                        'decorators'	=> array( 'ViewHelper' ),
                        'required'  	=> true,
                        'id'		=> 'usuario',
                )
        );
        
        $this->addElement('text', 'txtPassword', array(
                        'decorators'	=> array( 'ViewHelper' ),
                        'required'  	=> true,
                        'id'		=> 'password',
                )
        );
        
        $this->addElement('submit', 'submit', array( 
                'decorators'	=> array( 'ViewHelper' ),
                'label' 	=> 'Login',
                )
        );
        
    }
    
}


?>
