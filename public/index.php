<?php

require_once __DIR__ . '/../vendor/autoload.php';

$path = '/index';

if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}

require_once __DIR__ . '/../app/view/' . $path . 'php';
