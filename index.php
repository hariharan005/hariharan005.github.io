<?php

//creating variable for storing requested path
$requestedUrl = $_SERVER['REQUEST_URI'];

if ($requestedUrl === '/') {
    require './pages/home.php';
}
elseif  ($requestedUrl === '/about') {
    require './pages/about.php';
} elseif ($requestedUrl === '/skills') {
    require './pages/skills.php';
} elseif ($requestedUrl === '/projects') {
    require './pages/projects.php';
} elseif ($requestedUrl === '/contact') {
    require './pages/contact.php';
} else {
    //This http response code funtion will inform the web server that the requested page was not found
    http_response_code(404);
    require './pages/404.php';
}
?>