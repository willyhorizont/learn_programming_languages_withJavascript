<?php
    $php_string_split = function() {
        echo('Split String in PHP<br /><br />');

        $text = 'foo.bar.baz';
        $splitter = '.';
        $text_splitted = explode($splitter, $text);
        $text_splitted_formatted = json_encode($text_splitted);
        echo("\"$text\" splitted by \"$splitter\": $text_splitted_formatted<br />");
        // "foo.bar.baz" splitted by ".": ["foo","bar","baz"]

        $text = 'JavaScript, Python, PHP';
        $splitter = ', ';
        $text_splitted = explode($splitter, $text);
        $text_splitted_formatted = json_encode($text_splitted);
        echo("\"$text\" splitted by \"$splitter\": $text_splitted_formatted<br />");
        // "JavaScript, Python, PHP" splitted by ", ": ["JavaScript","Python","PHP"]
    };
?>