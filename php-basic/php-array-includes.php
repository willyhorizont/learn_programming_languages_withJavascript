<?php
    $php_array_includes = function() {
        echo('JavaScript-like Array.includes() in PHP<br /><br />');
    
        $what_is_your_name = function($name) {
            $my_friends = ['Tony', 'Ezekiel'];
            echo("name: $name<br />");

            if (in_array($name, $my_friends)) {
                echo("F You $name!<br /><br />");
                return;
            }
            echo("Hi $name!<br /><br />");
        };
    
        $what_is_your_name('Alisa');
        $what_is_your_name('Tony');
        $what_is_your_name('Ezekiel');
    };
?>