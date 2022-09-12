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
    <div class="d-flex justify-content-center my-4">
        <form action="" method="get" >
        <div class="mx-3">
            monton 1
            <input type="text" name="dinero1" class="form-control">
        </div>
        <div class="mx-3">
            monton 2
            <input type="text" name="dinero2" class="form-control">
        </div>
        <div class="mx-3">
            monton 3
            <input type="text" name="dinero3" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">enviar</button>
    </form>
    <?php 
    if(isset($_GET['dinero1'])){
        $total=$_GET['dinero1']+$_GET['dinero2']+$_GET['dinero3'];
        echo "<p>inversion 1: ".round(($_GET['dinero1']/$total)*100)."%</p>";
        echo "<p>inversion 2: ".round(($_GET['dinero2']/$total)*100)."%</p>";
        echo "<p>inversion 3: ".round(($_GET['dinero3']/$total)*100)."%</p>";
    }
    ?>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html> 