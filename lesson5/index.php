<?php
require "config.php";
$sql = "select * from goods ORDER BY counter DESC";
$res = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css" />
    <title>Hometask5</title>
</head>

<body>
    <header>
        <h1>Фотогалерея</h1>
    </header>
    <main>
        <?php
        while ($data = mysqli_fetch_assoc($res)) :
        ?>
            <a href="server.php?action=counter&id=<?= $data['id'] ?>&img=<?= $data['img'] ?>"><img class="photo" src="small_images/<?= $data['img'] ?>" alt="">
                <p><?= $data['counter'] ?></p>
            </a>
        <?php
        endwhile;
        ?>
    </main>
    <!--
    <footer>
        <form action="server.php" method="post" enctype="multipart/form-data">
            <h2>Хотите загрузить сюда вашу фотографию?</h2>
            <input type="file" name="photo" accept="image/*">
            <input type="submit" value="Загрузить файл">
        </form>
    </footer>
    -->
</body>

</html>