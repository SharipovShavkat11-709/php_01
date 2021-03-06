<?php

// подключаем пакеты которые установили через composer
require_once '../vendor/autoload.php';

// создаем загрузчик шаблонов, и указываем папку с шаблонами
// \Twig\Loader\FilesystemLoader -- это типа как в C# писать Twig.Loader.FilesystemLoader, 
// только слеш вместо точек
$loader = new \Twig\Loader\FilesystemLoader('../views');

// создаем собственно экземпляр Twig с помощью которого будет рендерить
$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

if ($url == "/") {
    echo $twig->render("main.php");

} elseif (preg_match("#/apple#", $url)) {
    echo $twig->render("apple.php");

} elseif (preg_match("#/tomato#", $url)) {
    echo $twig->render("tomato.php");
}

?>
