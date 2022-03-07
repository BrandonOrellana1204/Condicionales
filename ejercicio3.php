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
            <h3>Mensaje al usuario</h3>
            <hr>

        

        <div class="form-group">
            <label for="mensaje">Introduzaca "Hola" o "Adios":</label>
            <input id="mensaje" class="form-control" type="text" name="mensaje">
        </div>

        
        
        <br>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Enviar"></button>
        </div>
        
        <div></div>
                        
                </form>
    
                <?php
        if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
            $mensaje = $_POST['mensaje'];
            $mensaje = strtolower($mensaje);

        
            if ($mensaje == "hola") {
                echo "muy buenas, usuario ";
            }
            elseif ($mensaje == "adios" || $mensaje == "adiós") {
                echo "hasta pronto ";
            }  
            
            else {
                echo "No se reconoce el texto introducido";
            }
        }
                ?>

        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>