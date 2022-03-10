<?php

spl_autoload_register(static function ($className) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require __DIR__ . DIRECTORY_SEPARATOR . $file . '.php';
});

// Исходное математическое выражение
$str = "(x+42)^2+7*y-z";
$x = 5;
$y = 7;
$z = 6;

$parse = new Base();

// Построение дерева классов
$parse->builder($str);

echo '<pre>';
echo print_r($parse->arNode);
echo '</pre>';


echo $str." = ".$parse->calc($x, $y, $z);

echo " при: x=".$x."; y=".$y."; z=".$z;
