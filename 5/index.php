<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
   <div class="container text-center">
    <h1>calcular promedio</h1>
    <div class="row">
        <form action="">
    <div class="col">
        nombre
       <input type="text" name="name" class="form-control">
    </div>
    <div class="col">
        nota 1
       <input type="text" name="nota5" class="form-control">
    </div>
    <div class="col">
        nota 2
       <input type="text" name="nota4" class="form-control">
    </div>
    <div class="col">
        nota 3
       <input type="text" name="nota3" class="form-control">
    </div>
    <div class="col">
        nota 4
       <input type="text" name="nota2" class="form-control">
    </div>
    <div class="col">
        nota 5
       <input type="text" name="nota1" class="form-control">
    </div>

    </div>
    <button class="btn btn-primary" type="submit" >enviar</button>
    </form>
    <?php
    if(isset($_GET['nota1'])){
     $nota=($_GET['nota1']+$_GET['nota2']+$_GET['nota3']+$_GET['nota4']+$_GET['nota5'])/5;
    echo "<p>$nota</p>";
    echo "<p>".$_GET['name']."</p>";
    } 
    ?>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>