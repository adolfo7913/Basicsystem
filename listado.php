<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/inicio.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Yantramanav' rel='stylesheet'>
<title>Registro de personas</title>
</head>
<body>

<ul>
  <li><a href="inicio.html">Inicio</a></li>
  <li><a class="active" href="listado.php">Listado de usuarios</a></li>
  <li><a href="alta.html">Alta de usuarios</a></li>
  <li><a href="editar.php">Edición de usuarios</a></li>
  <li><a href="baja.php">Baja de usuarios</a></li>
  <li><a href="#" onclick="salir();">Salir</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:100%;">
    <div class="container">
      <h3>Hola <label id="usuario_text"></label>, aquí podra ver el listado de todos los usuarios.</h3>          
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Redes sociales</th>
            <th>Estatus</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'php/conexion.php';
            $estatus="";
            $query='SELECT * FROM persona';
            $resultado=mysqli_query($conexion, $query);
            while($row=mysqli_fetch_array($resultado))
            {
              if($row["Estatus"]==1)
              {
                $estatus="Alta";
              }
              else if($row["Estatus"]==2)
              {
                $estatus="Editado";
              }
              else if($row["Estatus"]==3)
              {
                $estatus="Baja";
              }
              echo '<tr>
                      <td>'.$row["Nombre"].'</td>
                      <td>'.$row["Apellido_p"].' '.$row["Apellido_m"].'</td>
                      <td>'.$row["Telefono"].'</td>
                      <td>'.$row["Direccion"].'</td>
                      <td>Facebook:'.$row["Facebook"].', Twitter: '.$row["Twiter"].', Instagram: '.$row["Instagram"].'</td>
                      <td>'.$estatus.'</td>
                    </tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
</div>
</body>
<script>
    let usuario = localStorage.getItem('nombre_usuario');
    console.log(usuario);
    document.getElementById("usuario_text").innerHTML= usuario;
    function salir(){
      localStorage.clear();
      window.location="index.html";
    }
</script>
</html>