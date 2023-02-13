<?php
declare(strict_types = 1);
session_start();
header("refresh: 2; url=/index.php");
$_SESSION['username'] = '';
//session_destroy();
