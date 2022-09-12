<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4>control de gasto hospital</h4>
        <div class="d-flex justfy-content-center">
            <div class="mt-2">
                <form action="" method="get">
                dinero
                <input type="text" name="dinero" class="form-control">
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">calcular</button>
            </div>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
             
                    <th scope="col">area</th>
                    <th scope="col">porcentaje</th>
                    <th scope="col">dinero total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ginecología</td>
                    <td>40%</td>
                    <td><?php if(isset($_GET['dinero'])){
                         echo $_GET['dinero']*0.40; 
                    }?></td>
                </tr>
                <tr>
                    <td>Traumatología</td>
                    <td>30%</td>
                    <td><?php 
                    if(isset($_GET['dinero'])){
                    echo $_GET['dinero']*0.30; }?></td>
                </tr>
                <tr>
               
                    <td >Pediatría</td>
                    <td>30%</td>
                    <td><?php
                    if(isset($_GET['dinero'])){
                    echo $_GET['dinero']*0.30; }?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>