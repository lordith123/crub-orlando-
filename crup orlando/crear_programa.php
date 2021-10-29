<!DOCTYPE html>
<html lang="es">
<head>
    <title>crear programa</title>
    <meta http-equiv="content-Type" content="text/html: charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk_to_fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
</head>
<body>
    <div id="div1" class="container">
      <body background="https://fondosmil.com/fondo/8542.jpg"
      <br>
        <div id="div2">
            <?php session_start();  if(! empty($_SESSION['tipo_usuario'])) { ?> <center><img src="imagenes/5.jpg" widht="400px" height="400px"></center> <?php } ?>
            <div id="div3" >
                <?php
                if($_SESSION['tipo_usuario']=='ADMINISTRADOR')
                {
              ?>
                 <form id="formulario" role="form" method="post" action="guardado_programa.php">
                          <div class="col-md-12">
                                 <strong class="lgris">ingrese los datos del programa</strong>
                                  <br>
                                  <label class="lgris">nombre</label>
                                  <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre" value="" placeholder="nombres" required/>

                                  <label class="lgris">tipo de programa</label>
                                  <div class="form-group col-xs-2">
                                        <?php

                                         include('funciones.php');
                                             $miconexion=conectar_bd('','sena_bd');
                                             $consulta = "SELECT * FROM tiposprograma";
                                             $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                        ?>
                                          <select class="form-control" name="tipos">
                                             <option value="" selected></option>
                                             <?php while ($opcion = $resultado -> fetch_object()) { ?>
                                             <option value="<?php echo $opcion->tiposp_id;?>"><?php echo $opcion->tiposp_tipo;?></option>
                                             <?php } ?>
                                          </select>
                                     </div>             
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Guardar">
                                    <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
                             </div>
                       </form>
                       <?php
                         }
                           else
                             {
                               echo "No tiene permisos para realizar esta acción";
                              }
                         ?> 
                        <br>
            </div>
        </div>
    </div> 
</body>
</html>