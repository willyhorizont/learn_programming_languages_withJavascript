<?php
    $php_nullish_coalescing = function() {
        echo('Nullish Coalescing (??) in PHP<br /><br />');

        $products = [
            ['id' => 'product_1', 'name' => 'product_name_1', 'price' => 1 ],
            ['id' => 'product_2', 'name' => 'product_name_2', 'price' => 2 ],
            ['id' => 'product_3', 'name' => 'product_name_3', 'price' => 3 ],
            ['id' => 'product_4', 'name' => 'product_name_4', 'price' => 4 ],
        ];
    
        $update_product = fn($id, $name, $price) => array_map(fn($product) => $product['id'] === $id ? [...$product, 'name' => $name ?? $product['name'], 'price' => $price ?? $product['price']] : $product, $products);

        // notice [... 'name' => $name ?? $product['name'] ...]
        // the value of property 'name' will using the left of (??) if the left value is not null else will default to the value of product['name']

        // notice [... 'price' => $price ?? $product['price'] ...]
        // the value of property 'price' will using the left of (??) if the left value is not null else will default to the value of product['price']

        $update_product_result1 = json_encode($update_product('product_1', null, null));
        echo("update_product_result1: $update_product_result1<br /><br />");
        // update_product_result1: [{"id":"product_1","name":"product_name_1","price":1},{"id":"product_2","name":"product_name_2","price":2},{"id":"product_3","name":"product_name_3","price":3},{"id":"product_4","name":"product_name_4","price":4}]
    
        $update_product_result2 = json_encode($update_product('product_1', 'Coca cola', 2));
        echo("update_product_result2: $update_product_result2");
        // update_product_result2: [{"id":"product_1","name":"Coca cola","price":2},{"id":"product_2","name":"product_name_2","price":2},{"id":"product_3","name":"product_name_3","price":3},{"id":"product_4","name":"product_name_4","price":4}]
    };
?>