<?php
include('funciones.php');
  


  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into aprendices (apre_tipoid,apre_numid,apre_nombres,apre_apellidos,apre_direccion,apre_telefono,apre_ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");
  if ($resultado)
    {
        echo "guardado exitoso";
    }
    ?>