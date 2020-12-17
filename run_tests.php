<?php 

include 'autoloader.php';

//varre os files em busca de algum com o final Test
foreach (new DirectoryIterator(__DIR__) as $file) {
   
    if (substr($file->getFilename(), -8) !== 'Test.php') { // se não achar continua procurando
        continue;
    }

    $className = substr($file->getFilename(), 0, -4); // com os que achou pega o nome da classe removendo o .php
    $testClass = new $className(); // aqui já instancia toda classe que contenha test

    $methods = get_class_methods($testClass); // pega os métodos
    foreach ($methods as $method) {

        if (substr($method, -4) !== 'Test') {
            continue;
        }

        $testClass->$method(); // executa método por método
    }
}

?>