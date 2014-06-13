<?php

function atws_autoload($class) {
    $namespaceParts = explode('\\', $class);
    $className = array_pop($namespaceParts);

    array_shift($namespaceParts);
    require_once __DIR__ . '/' . implode('/', $namespaceParts) . "/{$className}.php";
}

spl_autoload_register('atws_autoload');
