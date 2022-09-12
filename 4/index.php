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
    <h1>calcular salario neto</h1>
    <form action="" method="get">
    <div class="d-flex justify-content-center my-5">
        <div class="mx-2">
          horas trabajadas 
          <input type="text" name="horas" class="form-control">
        </div>
        <div>
          salario 
          <input type="text" name="salario" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">calcular</button>
    </form>
     <h5>resultado</h5>
    <?php 
    if(isset($_GET['horas'])&&isset($_GET['salario'])){

  
    $salario_bruto=$_GET['horas']*$_GET['salario'];
    $descuento=0.20*$salario_bruto;
    ?>
    <p><?php echo $salario_bruto-$descuento ?></p>
    <?php   } ?>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>