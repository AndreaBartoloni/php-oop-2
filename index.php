<?php 

require __DIR__ . "/product.php";
require __DIR__ . "/data.php";
require __DIR__ . "/category.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row justify-content-center mt-5">
        <?php foreach($products as $product) : ?>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $product->name ?> </h5>
                        <p class="card-title"> Categoria: <?php echo $product->category ?> </p>
                    </div> 
                </div>             
            </div>
        <?php endforeach; ?>
    </div>
  
</body>
</html>