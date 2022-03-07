<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>ejercicio2</title>
   

  </head>
  <body>
  <div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
        <form method="POST" action="">

                    <h2>Peso del vehiculo</h2>
                    <hr>

            <div class="form-group">
                <label for="pesoVehiculo">Introduzca el peso del vehiculo:</label>
                <input id="pesoVehiculo" class="form-control" type="text" name="pesoVehiculo">
            </div>

            <br>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Verificar"></button>
            </div>
         
    </form>
     <?php
    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
        $pesoVehiculo = $_POST['pesoVehiculo'];
        $pesoPermitido = 7000;

        if (is_numeric($pesoVehiculo)){
            if ($pesoVehiculo <= $pesoPermitido) {
                echo "El peso de su vehiculo está permitido ";
            }
    elseif ($pesoVehiculo > $pesoPermitido) {
    echo "su vehiculo pesa: $pesoVehiculo Kilogramos, el peso permitido es: $pesoPermitido kilogramos" ;
    }  
}
        else {
            echo "valores no reconocidos";
        }
    }
    ?>

        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>