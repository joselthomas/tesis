<?php

class Zend_View_Helper_MenuObras extends Zend_View_Helper_Abstract {
    
    public function MenuObras()
    {
        return '<h1>Obras</h1>
		
		<div id="subMenu">

			<ul>
                            <li><a href="/obras/listar">Listar</a></li>
                            <li><a href="/obras/ingresar">Agregar</a></li>
                            <li><a href="#">Borrar</a></li>
                            <li><a href="#">Buscar</a></li>
                            <li><a href="#">Modificar</a></li>
			</ul>
			
		</div>';
    }
}

?>
