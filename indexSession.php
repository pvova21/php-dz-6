<?php
session_start();

if (!isset($_SESSION['thirPage'])) {
    $_SESSION['thirPage'] = 1;
} else {
    ++$_SESSION['thirPage'];
    if ($_SESSION['thirPage'] % 3 === 0) {
      header("Location: https://{$_SERVER["HTTP_HOST"]}/indexKoll.php");
      exit();
    }
}
echo 'Страница 3';
echo "<br><a href='index.html'>Назад</a>";