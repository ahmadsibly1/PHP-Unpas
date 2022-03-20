<?php

// melakukan pengulangan pada aray
$angka = [1, 2, 3, 4, 5, 6, 7, 8];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        div {
            width: 70px;
            height: 70px;
            background-color: salmon;
            font-size: 40px;
            float: left;
            text-align: center;
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php foreach ($angka as $a) : ?>
        <div><?= $a; ?></div>
    <?php endforeach; ?>
</body>

</html>