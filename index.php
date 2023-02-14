<?php
declare(strict_types = 1);
session_start();
?>
<html lang="ru">
<head>
    <title>Cоздание и загрузка приложения</title>
</head>
<body>

<header>
    <?php include ("author.php");?>
</header>
<main>
    <?php
    if ($_SESSION['username'] === '') {
        include ("form.php");
    } else {
        echo 'Здравствуйте, ' . $_SESSION['username'] . "<br>\n";
        echo '<a href="./exit.php">Exit</a>';
    }?>
</main>

</body>
</html>
