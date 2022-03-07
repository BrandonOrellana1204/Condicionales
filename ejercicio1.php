<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Estructuras de Control</title>

  </head>
  <body>
  <div class="container"><br>
    <div class="row justify-content-center">
 <div class="col-6 p-5 bg-white shadow-lg rounded">
             
        <form method="POST" action="">

<h3>Calculadora</h3>
<hr>

<div class="form-group">
    <label for="a">Escribe el primer numero:</label>
    <input id="a" class="form-control" type="text" name="a">
</div>

<div class="form-group">
    <label for="b">Escribe el segundo numero:</label>
    <input id="b" class="form-control" type="text" name="b">
</div>

<br>
<div class="form-group">
    <input class="btn btn-primary" type="submit" name="submit" value="Calcular"></button>
</div>

<div></div>
    
</form>
       
    
<?php
    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        if (is_numeric($a) && is_numeric($b)){
            if ($a > $b) {
                echo "$a es mayor que $b";
            }
            elseif ($b > $a) {
                echo " $b es mayor que $a";
            }  
        
        else {
            echo "Digite valores validos";
        }
    }
}
?>

        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>