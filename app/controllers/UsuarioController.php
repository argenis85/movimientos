<?php
class UsuarioController extends BaseController {
 
    /**
     * Mustra la lista con todos los usuarios
     */
    public function mostrarUsuarios()
    {
        $usuario = Usuario::all();
        
        // Con el método all() le estamos pidiendo al modelo de Usuario
        // que busque todos los registros contenidos en esa tabla y los devuelva en un Array
        
        return View::make('usuario.lista', array('usuario' => $usuario));
        
        // El método make de la clase View indica cual vista vamos a mostrar al usuario
        //y también pasa como parámetro los datos que queramos pasar a la vista.
        // En este caso le estamos pasando un array con todos los usuarios
    }
 
}
?>