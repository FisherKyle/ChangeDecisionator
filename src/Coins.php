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

            $quarters = ($currency_number / 25);
            $remainingNumber = ($currency_number % 25);
            $dimes = ($remaining_number / 10);
            $newRemainingNumber = ($dimes % 10);
            $nickels = ($newRemainingNumber / 5);
            $pennies = ($newRemainingNumber / 5);

usernumber / 25 = $quarters
usernumber % 25 = remainingnumber
remaining / 10 = $dimes
remaining % 10 = newremaining
newremaining / 5 = $nickels
newremaining % 5 = pennies
        }
    }

?>
