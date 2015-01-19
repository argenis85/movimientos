<h1>
  Usuarios
  
</h1>
 
 
<ul>
  @foreach($usuario as $usuarios)
  <!-- Equivalente en Blade a <?php //foreach ($usuarios as $usuario) ?> -->
    <li>
      {{ $usuarios->usu_nombre.' '.$usuarios->usu_apellido}}
    </li>
    <!-- Equivalente en Blade a <?php //echo $usuario->nombre.' '.$usuario->apellido ?> -->
  @endforeach
</ul>