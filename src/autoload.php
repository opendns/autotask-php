<?php

function atws_autoload($class) {
    $dirSep = DIRECTORY_SEPARATOR;
    $namespaceParts = explode('\\', $class);
    $className = array_pop($namespaceParts);

    array_shift($namespaceParts);
    require_once __DIR__ . $dirSep . implode($dirSep, $namespaceParts) . "{$dirSep}{$className}.php";
}

spl_autoload_register('atws_autoload');
