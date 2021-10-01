<?php

spl_autoload_register(function ($className) {

    $className = str_replace("PatternsDesign\\","",$className);
    $fullPath = __DIR__. '/' . $className . '.php';
    $fullPath = str_replace('\\',DIRECTORY_SEPARATOR,$fullPath);
    $fullPath = str_replace('/',DIRECTORY_SEPARATOR,$fullPath);

    if (!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
});

