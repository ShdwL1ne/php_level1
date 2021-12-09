<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css" />
    <title>Hometask4</title>
</head>

<body>
    <header>
        <h1>Фотогалерея</h1>
    </header>
    <main>
        <?php
        $files = scandir("images");
        for ($i = 2; $i < count($files); $i++) { ?>
            <a href="fullimage.php?img=<?= $files[$i] ?>"><img class="photo" src="images/<?= $files[$i] ?>" alt=""></a> <?php
                                                                                                                    }  ?>
    </main>
    <footer>
        <form action="server.php" method="post" enctype="multipart/form-data">
            <h2>Хотите загрузить сюда вашу фотографию?</h2>
            <input type="file" name="photo" accept="image/*">
            <input type="submit" value="Загрузить файл">
        </form>
    </footer>

</body>

</html>