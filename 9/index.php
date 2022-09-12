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
        <form action="" >
        <div class="my-3">
            alumnas
          <input type="text" name="alumnas" class="form-control">
          </div>
          <div class="my-3">
            alumnos
          <input type="text" name="alumnos" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">enviar</button>
          </form>
           <?php 
           if(isset($_GET['alumnas'])){
            $total=$_GET['alumnas']+$_GET['alumnos'];
            echo "<p>alumnas".($_GET['alumnas']/$total)*100 ."</p>";
            echo "<p>alumnos".($_GET['alumnos']/$total)*100 ."</p>";
           }
        
           ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>