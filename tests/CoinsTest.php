<?php

    require_once "src/Coins.php";

    class CoinsTest extends PHPUnit_Framework_TestCase {

        function test_belowFive() {

            //ARRANGE
                $currency_input = "1";
                $test_coins = new Coins;
            //ACT
                $result = $test_coins->determineChange($currency_input);
            //ASSERT
                $this->assertEquals("pennies: 1", $result);
        }

        function test_forFive() {

            //ARRANGE
                $currency_input = "5";
                $test_coins = new Coins;
            //ACT
                $result = $test_coins->determineChange($currency_input);
            //ASSERT
                $this->assertEquals("nickels: 1", $result);
        }

        function test_belowTen() {

            //ARRANGE
                $currency_input = "9";
                $test_coins = new Coins;
            //ACT
                $result = $test_coins->determineChange($currency_input);
            //ASSERT
                $this->assertEquals("nickels: 1 pennies: 4", $result);
        }

        function test_forTen() {

            //ARRANGE
                $currency_input = "10";
                $test_coins = new Coins;
            //ACT
                $result = $test_coins->determineChange($currency_input);
            //ASSERT
                $this->assertEquals("dimes: 1", $result);
        }

        function test_betweenTenAndFifteen() {

            //ARRANGE
                $currency_input = "14";
                $test_coins = new Coins;
            //ACT
                $result = $test_coins->determineChange($currency_input);
            //ASSERT
                $this->assertEquals("dimes: 1 pennies: 4", $result);
        }
        function test_forFifteen() {

            //ARRANGE
                $currency_input = "15";
                $test_coins = new Coins;
            //ACT
                $result = $test_coins->determineChange($currency_input);
            //ASSERT
                $this->assertEquals("dimes: 1 nickels: 1", $result);
        }

    }

 ?>
