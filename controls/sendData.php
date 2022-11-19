<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando...</title>
</head>
<body>
    <h1>Processando...</h1>

    <?php

        include('../connect.php');

        if(isset($_POST['data'])) {
            $data = json_decode($_POST['data']);
            print_r($data);
        } else {
            echo "\n Error";
        };


    ?>
</body>
</html>