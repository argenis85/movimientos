<?php
class Usuario extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'usuario';
	
	protected $fillable = array('usu_id', 'usu_nombre', 'usu_apellido');
    // declaramos los campos con los que se puede crear el objeto desde el form
}
?>