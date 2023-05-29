<?php
    $php_spread_operator = function() {
        echo('Array Spread Operator in PHP<br /><br />');

        $fruits_in_my_refrigerator = ['apple', 'mango', 'orange'];
        $fruits_I_bought_from_supermarket = ['melon', 'banana'];
        $my_fruits = [...$fruits_in_my_refrigerator, ...$fruits_I_bought_from_supermarket];
        $my_fruits_formatted = json_encode($my_fruits);
        echo("my fruits: $my_fruits_formatted<br /><br /><br />");
        // my fruits: ["apple","mango","orange","melon","banana"]

        // ======================================================================================================================================================

        echo('Associative Array Spread Operator in PHP<br /><br />');

        $car = ['wheels' => 4, 'tires' => 4];
    
        $minivan_car = [...$car, 'doors' => 4];
        $minivan_car_formatted = json_encode($minivan_car);
        echo("minivan car: $minivan_car_formatted<br /><br />");
        // minivan car: {"wheels":4,"tires":4,"doors":4}

        $sports_car = [...$car, 'doors' => 2];
        $sports_car_formatted = json_encode($sports_car);
        echo("sports car: $sports_car_formatted<br /><br />");
        // sports car: {"wheels":4,"tires":4,"doors":2}

        $red_sports_car = [...$car, 'doors' => 2, 'color' => 'red'];
        $red_sports_car_formatted = json_encode($red_sports_car);
        echo("red sports car: $red_sports_car_formatted<br /><br />");
        // red sports car: {"wheels":4,"tires":4,"doors":2,"color":"red"}  
    };
?>