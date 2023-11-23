<?php
if(isset($_GET['text'])) {

    $text = htmlspecialchars($_GET['text'], ENT_QUOTES, 'UTF-8');

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="downloaded.txt"');

    echo $text;
} else {
    echo "Ошибка: Параметр 'text' отсутствует.";
}
echo "<br><a href='index.html'>Назад</a>";
