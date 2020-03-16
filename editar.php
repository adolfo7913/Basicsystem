<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/inicio.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Yantramanav' rel='stylesheet'>
<title>Registro de personas</title>
</head>
<body>

<ul>
  <li><a href="inicio.html">Inicio</a></li>
  <li><a href="listado.php">Listado de usuarios</a></li>
  <li><a href="alta.html">Alta de usuarios</a></li>
  <li><a class="active" href="editar.php">Edición de usuarios</a></li>
  <li><a href="baja.php">Baja de usuarios</a></li>
  <li><a href="#" onclick="salir();">Salir</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:100%;">
  <h4>Hola <label id="usuario_text"></label>, por favor seleccione el usuario a editar.</h3><br><br>
  <form action="php/editar.php" method="post">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Usuario a editar</label>
      <!---<select id="inputState" class="form-control" onchange="completar(this.value);">-->
      <input list="nombre_usuarios" class="form-control" name="nombres_usuario" type="text" placeholder="Seleccione" onchange="completar(this.value);">
      <datalist id="nombre_usuarios">
          <?php
          include 'php/conexion.php';
          $query='SELECT id, nombre, apellido_p FROM persona WHERE Estatus=1 OR Estatus=2';
          $resultado=mysqli_query($conexion, $query);
          $row=mysqli_fetch_array($resultado);
          while($row=mysqli_fetch_array($resultado))
          {
            echo "<option value='".$row['nombre']." ".$row['apellido_p']."'></option>";
          }
          ?>
      </datalist>
    </div>
     <div class="form-group col-md-6">
      <label >Id de usuario</label>
      <input type="text" class="form-control" id="id_user" placeholder="Id" name="id_user">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nombre/s</label>
      <input type="text" class="form-control" id="nombre_p" placeholder="Nombre/s" name="nombre">
    </div>
    <div class="form-group col-md-6">
      <label >Apellido Paterno</label>
      <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" name="apellido_p">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Apellido Materno</label>
      <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" name="apellido_m">
    </div>
    <div class="form-group col-md-6">
      <label>Telefono</label>
      <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
    </div>
  </div>
  <div class="form-group">
    <label>Dirección</label>
    <input type="text" class="form-control" id="direccion" placeholder="Av. Principal" name="direccion">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Facebook</label>
      <input type="text" class="form-control" id="facebook" name="facebook">
    </div>
    <div class="form-group col-md-4">
      <label>Twitter</label>
      <input type="text" class="form-control" id="twitter" name="twitter">
    </div>
    <div class="form-group col-md-4">
      <label>Instagram</label>
      <input type="text" class="form-control" id="instagram" name="instagram">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Actualizar registro</button>
</form>
</div>
</body>
<script src="js/editar.js"></script>
<script>
    function salir(){
      localStorage.clear();
      window.location="index.html";
    }
</script>
</html>