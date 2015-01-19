<?php
class UsuarioController extends BaseController {
 
    /**
     * Mustra la lista con todos los usuarios
     */
    public function mostrarUsuarios()
    {
        $usuario = Usuario::all();
        
        // Con el m�todo all() le estamos pidiendo al modelo de Usuario
        // que busque todos los registros contenidos en esa tabla y los devuelva en un Array
        
        return View::make('usuario.lista', array('usuario' => $usuario));
        
        // El m�todo make de la clase View indica cual vista vamos a mostrar al usuario
        //y tambi�n pasa como par�metro los datos que queramos pasar a la vista.
        // En este caso le estamos pasando un array con todos los usuarios
    }
 
}
?>