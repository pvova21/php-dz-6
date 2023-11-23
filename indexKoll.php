<?php
session_start();

$count = $_SESSION['thirPage'] ?? 0;

echo "Страница 4." . PHP_EOL;
echo "\nКоличество посещений страницы 3: " . $count;
echo "<br><a href='index.html'>Назад</a>";