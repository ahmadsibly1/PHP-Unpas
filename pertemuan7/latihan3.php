<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Selamat datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <form action="" method="post">
        Masukan nama :
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>