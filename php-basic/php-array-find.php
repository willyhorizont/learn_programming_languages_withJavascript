<?php
    $php_array_find = function() {
        // JavaScript-like Array.find() function
        $array_find = function($an_array, $callback_function) {
            $data_found = null;
            foreach ($an_array as $an_array_index => $array_item) {
                $is_data_found = $callback_function($array_item, $an_array_index, $an_array);
                if ($is_data_found) {
                    $data_found = $array_item;
                    break;
                }
            }
            return $data_found;
        };

        echo('JavaScript-like Array.find() in PHP Array<br /><br />');

        $numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

        $even_number_found = $array_find($numbers, fn($number) => $number % 2 === 0);
        echo("even number found: $even_number_found<br />");
        // even number found: 12
        
        $odd_number_found = $array_find($numbers, fn($number) => $number % 2 !== 0);
        echo("odd number found: $odd_number_found<br /><br />");
        // odd number found: 27

        // ======================================================================================================================================================

        echo('JavaScript-like Array.find() in PHP Associative Array<br /><br />');
        
        $products = [
            [
                'id' => 'id_1',
                'name' => 'name_1',
                'variant' => [
                    'is_free_shipping' => false,
                    'price' => 290,
                ]
            ],
            [
                'id' => 'id_2',
                'name' => 'name_2',
                'variant' => [
                    'is_free_shipping' => true,
                    'price' => 232,
                ]
            ],
            [
                'id' => 'id_3',
                'name' => 'name_3',
                'variant' => [
                    'is_free_shipping' => false,
                        'price' => 140,
                ]
            ],
            [
                'id' => 'id_4',
                'name' => 'name_4',
                'variant' => [
                    'is_free_shipping' => true,
                    'price' => 499,
                ]
            ]
        ];

        $product_found = $array_find($products, fn($product) => @$product['id'] === 'id_3');
        $product_found_formatted = json_encode($product_found, JSON_PRETTY_PRINT);
        echo("product found: $product_found_formatted<br /><br />");
        // product found: { "id": "id_3", "name": "name_3", "variant": { "is_free_shipping": false, "price": 140 } }

        $product_found = $array_find($products, fn($product) => @$product['variant']['price'] >= 200 && @$product['variant']['is_free_shipping'] === true);
        $product_found_formatted = json_encode($product_found, JSON_PRETTY_PRINT);
        echo("product found: $product_found_formatted");
        // product found: { "id": "id_2", "name": "name_2", "variant": { "is_free_shipping": true, "price": 232 } }
    };
?>