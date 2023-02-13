<?php
declare(strict_types = 1);
session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['username'] !== '') {
    $_SESSION['username'] = $_POST['username'];
    echo 'Имя пользователя: ' . ' ' . $_SESSION['username'] . "<br>\n";
    echo '<a href="./index.php">Main</a>';
} else {
    $_SESSION['username'] = '';
    header("refresh: 2; url=/index.php");
    echo 'Заполните форму.';
}
