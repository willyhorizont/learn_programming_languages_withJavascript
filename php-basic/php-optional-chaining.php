<?php
    $php_optional_chaining = function() {
        echo('Optional Chaining in PHP<br /><br />');

        $data_dictionary = [
            'foo' => [
                'bar' => [
                    'buzz' => 'lightyear'
                ],
                'baz' => [
                    'asd' => 2023,
                    'zxc' => [
                        ['patrick' => 'star'],
                        ['spongebob' => 'squarepants']
                    ],
                    'qwe' => ['john', 'sarah']
                ]
            ],
            'hello' => [
                'world' => 'hello world',
            ],
        ];

        // In PHP, there's no optional chaining for Associative Array.
        // If an Associative Array property doesn't exist, the value will be null, and it won't throw an error. Instead, we receive a warning.
        // To suppress this warning, we can use Error Control Operators, the at sign (@).

        $optional_chaining_result1 = @$data_dictionary['foo']['bar']['baz'];
        echo("<pre>optional chaining result 1: $optional_chaining_result1</pre><br />");
        // optional chaining result 1: null

        $optional_chaining_result2 = @$data_dictionary['foo']['bar']['buzz'];
        echo("<pre>optional chaining result 2: $optional_chaining_result2</pre><br />");
        // optional chaining result 2: lightyear

        // or we can just create our own optional chaining function to achieve the same thing.

        // custom optional chaining function v1 using 'isset()'
        $optional_chaining_v1 = fn($an_object, ...$object_properties) => array_reduce($object_properties,  fn($object_result, $current_property) => isset($object_result[$current_property]) ? $object_result[$current_property] : null, $an_object);

        // custom optional chaining function v1 using 'isset()' usage

        $optional_chaining_v1_result1 = $optional_chaining_v1($data_dictionary, 'foo', 'bar', 'baz');
        echo("<pre>optional chaining v1 result 1: $optional_chaining_v1_result1</pre><br />");
        // optional chaining v1 result 1: null

        $optional_chaining_v1_result2 = $optional_chaining_v1($data_dictionary, 'foo', 'bar', 'buzz');
        echo("<pre>optional chaining v1 result 2: $optional_chaining_v1_result2</pre><br />");
        // optional chaining v1 result 2: lightyear

        // custom optional chaining function v2 using 'isset()'
        $optional_chaining_v2 = fn($an_object, $object_properties_string_separated_by_dot) => array_reduce(explode('.', $object_properties_string_separated_by_dot),  fn($object_result, $current_property) => isset($object_result[$current_property]) ? $object_result[$current_property] : null, $an_object);

        // custom optional chaining function v2 using 'isset()' usage

        $optional_chaining_v2_result1 = $optional_chaining_v2($data_dictionary, 'foo.bar.baz');
        echo("<pre>optional chaining v2 result 1: $optional_chaining_v2_result1</pre><br />");
        // optional chaining v2 result 1: null

        $optional_chaining_v2_result2 = $optional_chaining_v2($data_dictionary, 'foo.bar.buzz');
        echo("<pre>optional chaining v2 result 2: $optional_chaining_v2_result2</pre><br />");
        // optional chaining v2 result 2: lightyear

        // custom optional chaining function v3 using 'optional chaining (??)'
        $optional_chaining_v1 = fn($an_object, ...$object_properties) => array_reduce($object_properties,  fn($object_result, $current_property) => $object_result[$current_property] ?? null, $an_object);

        // custom optional chaining function v3 using 'optional chaining (??)' usage

        $optional_chaining_v1_result1 = $optional_chaining_v1($data_dictionary, 'foo', 'bar', 'baz');
        echo("<pre>optional chaining v3 result 1: $optional_chaining_v1_result1</pre><br />");
        // optional chaining v3 result 1: null

        $optional_chaining_v1_result2 = $optional_chaining_v1($data_dictionary, 'foo', 'bar', 'buzz');
        echo("<pre>optional chaining v3 result 2: $optional_chaining_v1_result2</pre><br />");
        // optional chaining v3 result 2: lightyear

        // custom optional chaining function v4 using 'optional chaining (??)'
        $optional_chaining_v2 = fn($an_object, $object_properties_string_separated_by_dot) => array_reduce(explode('.', $object_properties_string_separated_by_dot),  fn($object_result, $current_property) => $object_result[$current_property] ?? null, $an_object);

        // custom optional chaining function v4 using 'optional chaining (??)' usage

        $optional_chaining_v2_result1 = $optional_chaining_v2($data_dictionary, 'foo.bar.baz');
        echo("<pre>optional chaining v4 result 1: $optional_chaining_v2_result1</pre><br />");
        // optional chaining v4 result 1: null

        $optional_chaining_v2_result2 = $optional_chaining_v2($data_dictionary, 'foo.bar.buzz');
        echo("<pre>optional chaining v4 result 2: $optional_chaining_v2_result2</pre><br />");
        // optional chaining v4 result 2: lightyear
    };
?>