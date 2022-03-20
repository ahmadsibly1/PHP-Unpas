<?php

$mahasiswa = [
    ["Ahmad sibly", "171011402602", "Teknik informatika", "ziblyvila12@gmail.com"],
    ["Ahmad dimas", "54511402252", "Teknik informatika", "fimasa2@gmail.com"],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar array</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>

</html>