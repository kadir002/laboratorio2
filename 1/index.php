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
    <h3 class="mt-5">suma de dos numeros</h3>
    <form action="" method="get">
    <div class="d-flex mt-5 justify-content-center">
 
    <div class="mx-2">numero 1 <input type="text" name="n1" class="form-control" ></div>
  
    <div class="mx-2">numero 2 <input type="text" name="n2" class="form-control" ></div>
  </div>
    <button class="btn btn-primary mt-5 " type="submit">enviar</button>
    </form>
    <h5 class="mt-2">resultado</h5>
    <?php if(isset($_GET['n1'])&&isset($_GET['n2'])){ ?>
    <p><?php echo $_GET['n1']+$_GET['n2'] ?></p>
    <?php }?>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>