<?php

class Application_Form_Obra extends Zend_Form
{
    
    public function init()
    {
        
        $this->addElement(
                'text', 'id', array(
                    'label'=>'ID Obra',
                    'class'=>''
                )
        );
        
        $this->addElement(
                'text', 'cliente', array(
                    'label' => 'Cliente'
                )
        );
        
        $this->addElement(
                'text', 'monto', array(
                    'label' => 'Monto'
                )
        );
        
        $this->addElement(
                'text', 'fechaInstalacion', array(
                    'label' => 'Fecha de instalacion', 
                    'validators' => array('date') 
                )
        );
        
        $this->addElement(
                'file', 'archivo', array(
                    'label' => 'Archivo adjunto'
                )
        );
        
        $this->addElement(
                'text', 'instalador', array(
                    'label' => 'Instalador'
                )
        );
        
        $this->addElement(
                'submit', 'guardar', array()
        );
        
    }
}
?>
