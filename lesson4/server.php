<?php
$path = "images/{$_FILES['photo']['name']}";
if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
    echo "Файл {$_FILES['photo']['name']} был успешно загружен!";
}
header('Location: hometask.php');
