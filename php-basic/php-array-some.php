<?php
    $php_array_some = function() {
        // There's no JavaScript-like Array.some() in PHP.
        // But, we can create our own function to achieve the same thing in PHP.

        // JavaScript-like Array.some() function
        $array_some = function($an_array, $callback_function) {
            $is_data_found = false;
            foreach ($an_array as $an_array_index => $array_item) {
                $is_data_found = $callback_function($array_item, $an_array_index, $an_array);
                if ($is_data_found) break;
            }
            return $is_data_found;
        };

        echo('JavaScript-like Array.some() in PHP Array<br /><br />');

        $numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

        $is_any_number_less_than500 = $array_some($numbers, fn($number) => $number < 500) === false ? 'false' : 'true';
        echo("<pre>is any number < 500: $is_any_number_less_than500</pre><br />");
        // is any number < 500: true

        $is_any_number_more_than500 = $array_some($numbers, fn($number) => $number > 500) === false ? 'false' : 'true';
        echo("<pre>is any number > 500: $is_any_number_more_than500</pre><br />");
        // is any number > 500: false

        $is_any_number_bigger_than10 = $array_some([2, 5, 8, 1, 4], fn($number) => $number > 10) === false ? 'false' : 'true';
        echo("<pre>is any number > 10: $is_any_number_bigger_than10</pre><br />");
        // is any number > 10: false

        $is_any_number_bigger_than10 = $array_some([12, 5, 8, 1, 4], fn($number) => $number > 10) === false ? 'false' : 'true';
        echo("<pre>is any number > 10: $is_any_number_bigger_than10</pre><br /><br />");
        // is any number > 10: true

        // ======================================================================================================================================================

        echo('JavaScript-like Array.some() in PHP Associative Array<br /><br />');

        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];

        $is_any_product_price_less_than500 = $array_some($products, fn($product) => @$product['price'] < 500) === false ? 'false' : 'true';
        echo("<pre>is any product price < 500: $is_any_product_price_less_than500</pre><br />");
        // is any product price < 500: true

        $is_any_product_price_more_than500 = $array_some($products, fn($product) => @$product['price'] > 500) === false ? 'false' : 'true';
        echo("<pre>is any product price > 500: $is_any_product_price_more_than500</pre><br />");
        // is any product price > 500: true
    };
?>