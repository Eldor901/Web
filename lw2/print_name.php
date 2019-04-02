<?php
    header('Content-Type: text\plain; charset=utf-8');

    $name = $_GET['name'];
    if (!isset($name))
    {
        print "you have not typed parametr in url ".PHP_EOL;
        print "example: print_name.php?name=Sarah";
    }
    else
    {
        print "Hello Dear {$name}!";
    }
?>