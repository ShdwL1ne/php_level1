<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" />
    <title>Document</title>
</head>

<body>
    <div class="fullimage"><img src="images/<?= $_GET['img'] ?>" alt=""></div>
    <a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
</body>

</html>
<?php ?>