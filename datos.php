<!-- 
Programa de Aprendizaje de HTML5.
Desarrollador: Elvis Gamboa Machado @gamboamej
Licencia: Licencia GNU GPL (Licencia Pública General de GNU).
Empresa: Pratapo, C.A
Hecho con amor en Venezuela.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap core CSS -->
      <link href="./bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <title>Datos</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="./img/HTML5Logo.svg" width="30" height="30" alt="">
    </a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">indice <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-md-4 offset-md-4">
        <img src="./img/HTML5Logo.svg" alt="HTML5">
      </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-12">
        <h3>Datos de Formulario</h3>
        <?php
        $metodo=$_POST;
        if (empty($metodo)) 
        {?>
            <div class="alert alert-danger" role="alert">Formulario enviado por Get (Poco Seguro via URL)</div>
            <?php   }  
       
        else
            { 
                
            ?> 
            <div class="alert alert-success" role="alert">Formulario enviado por Post (Seguro) via http</div>
            <?php   
            }
        ?> 
        <p>Nombre (Get): <?php echo @$id = $_GET["nombre"];?></p>
        <p>Nombre (Post): <?php echo @$id = $_POST["nombre"];?></p>
        <p>Apellido (Get): <?php echo @$id = $_GET["apellido"];?></p>
        <p>Telefono (Get): <?php echo @$id = $_GET["telefono"];?></p>
        <p>Telefono (Post): <?php echo @$id = $_POST["telefono"];?></p>
        <p>
        <?php
        $edad = @$_POST["edad"]; 
        if (isset($edad)) 
        {
            echo "<p>Edad (Post): $edad</p>"; 
            if ($edad < 18) {  ?> 
            <div class="alert alert-danger" role="alert">Acceso Denegado a menores 18 años.</div>
            <?php
            }
            else{ ?> 
                <div class="alert alert-success" role="alert">Bienvenido. <?php echo @$id = $_POST["nombre"];?></div>
            <?php } 
        }else
            {
            echo "<p>Edad NO suministrada</p>";
        }
        ?> 
        </p>
        <p>Correo (Get): <?php echo @$id = $_GET["correo"];?></p>
        <p>Correo (Post): <?php echo @$id = $_POST["correo"];?></p>
        <p>Clave (Get): <?php echo @$id = $_GET["clave"];?></p>
        <p>Clave (Post): <?php echo @$id = $_POST["clave"];?></p>
        </div>
        <div class="col-12 mt-5 mb-5">
        <a class="btn btn-primary" href="form.html" target="_self" rel="noopener noreferrer">volver</a>
    </div>
      </div>
</div>
      <!-- Bootstrap core JavaScript-->
    <script src="./bootstrap/jquery/jquery-3.6.0.slim.min.js"></script>
    <script src="./bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>