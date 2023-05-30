<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>
            
    <?php

        require __DIR__.'/vendor/autoload.php';

        use classes\Facade;

        Facade::finalizarCompra(110, "rua", "313131", "correios", 1);

    ?>
        </h1>
    </div>
</body>
</html>