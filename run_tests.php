<?php

require __DIR__ . "/vendor/autoload.php";

$myTests = new DirectoryIterator(__DIR__ . "/tests");

foreach ($myTests as $file) {
    if (substr($file->getFilename(), -8) !== 'Test.php') {
        continue;
    }

    $className = "\Test\\" . substr($file->getFilename(), 0, -4);

    $testClass = new $className();

    $methods = get_class_methods($testClass);

    foreach ($methods as $method) {
        if (substr($method, -4) !== "Test") {
            continue;
        }

        echo $testClass->$method();
    }
}
