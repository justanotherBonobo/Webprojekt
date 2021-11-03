<?php
/**
 * autoload will be called automatically for any 
 * class that is not known to the interpreter.
 * 
 * We than take the fully qualified name including the namespace
 * and generate the file path from the name.
 * The namespace reflects the path. 
 * 
 * So instead of checking for a file we can simply instantiate it
 * and this method will take care of loading the file.
 */
spl_autoload_register(function ($className) {
    $classPath = dirname(__FILE__) . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($classPath)) {
        include $classPath;
     } else {
        die('file ' . $classPath . ' not found.' );
     }
});

// instatiate and call the front controller
// then render the page
$frontController = new Framework\FrontController();
$frontController->dispatch();
echo $frontController->render();