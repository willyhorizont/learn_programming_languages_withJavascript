<?php
    $php_array_every = function() {
        // JavaScript-like Array.every() function
        $array_every = function($an_array, $callback_function) {
            $booleans = [];
            foreach ($an_array as $an_array_index => $array_item) {
                $is_condition_match = $callback_function($array_item, $an_array_index, $an_array);
                if ($is_condition_match === false) return false;
                $booleans = [...$booleans, $callback_function($array_item, $an_array_index, $an_array)];
            }
            return !in_array(false, $booleans);
        };

        echo('JavaScript-like Array.every() in PHP Array<br /><br />');

        $numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

        $is_all_number_less_than500 = $array_every($numbers, fn($number) => $number < 500) === false ? 'false' : 'true';
        echo("<pre>is all number < 500: $is_all_number_less_than500</pre><br />");
        // is all number < 500: true

        $is_all_number_more_than500 = $array_every($numbers, fn($number) => $number > 500) === false ? 'false' : 'true';
        echo("<pre>is all number > 500: $is_all_number_more_than500</pre><br /><br />");
        // is all number > 500: false

        // ======================================================================================================================================================

        echo('JavaScript-like Array.every() in PHP Associative Array<br /><br />');

        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];

        $is_all_product_price_less_than500 = $array_every($products, fn($product) => @$product['price'] < 500) === false ? 'false' : 'true';
        echo("<pre>is all product price < 500: $is_all_product_price_less_than500</pre><br />");
        // is all product price < 500: true

        $is_all_product_price_more_than500 = $array_every($products, fn($product) => @$product['price'] > 500) === false ? 'false' : 'true';
        echo("<pre>is all product price > 500: $is_all_product_price_more_than500</pre><br /><br />");
        // is all product price > 500: true
    };
?>