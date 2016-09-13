<?php

    class Coins {

        function determineChange($currency_input) {
            $currency_number = intval($currency_input);
            // echo $currency_number;

            $currencyArray = array($currency_number);
            $lastPlace = count(currencyArray); 
            echo $lastplace;
            // if ($currency_number < 5) {
            // return ("pennies: " . $currency_number);
            // }
            // else if ($currency_number === 5) {
            //     $nickels = ($currency_number / 5);
            // return ("nickels: " . $nickels);
            // }
            // else if ($currency_number < 10 && $currency_number != 5) {
            //     $pennies = ($currency_number % 5);
            //     return ("nickels: 1" . " pennies: " . $pennies);
            // }
            // else if ($currency_number === 10) {
            //     return ("dimes: 1");
            // }
            // else if ($currency_number > 10 && $currency_number < 15) {
            //     $pennies = ($currency_number % 10);
            //     return ("dimes: 1 pennies: " . $pennies);
            // }
            // else if ($currency_number === 15) {
            //     return ("dimes: 1 nickels: 1");
            // }


        }
    }

?>
