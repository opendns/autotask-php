<?php
require_once __DIR__ . '/src/autoload.php';

$files = scandir(__DIR__ . '/src/AutotaskObjects');

foreach ($files as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }
    $classname = "\\ATWS\\AutotaskObjects\\" . str_replace('.php', '', $file);

    try {
        $class = new $classname();
    } catch (\Exception $e) {
        print($e->getMessage() . "\n");
    }
}
