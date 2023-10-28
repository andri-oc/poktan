<?php
$url="/poktan";
$request = $_SERVER['REQUEST_URI'];
switch ($request)
{
    case $url.'/' :
        require "app/view/home.php";
        break;

    case $url.'/poktan' :
        require "app/view/poktan.php";
        break;

    case $url.'/benih' :
        require "app/view/benih.php";
        break;

    default:
        require "app/view/404.php";
        http_response_code(404);
            break;
}
?>