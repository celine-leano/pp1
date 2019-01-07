<?php
/*
 * Celine Leano
 * 1/4/2019
 * 328/pp1/functions.php
 * Functions that manipulate an array
 */

    function printArray($array) {
        print_r($array);
        echo "<br>";
    }

    function largest($array) {
        echo max($array);
        echo "<br>";
    }

    function average($array) {
        echo array_sum($array)/count($array);
        echo "<br>";
    }

    function removeDups($array) {
        $result = array_unique($array);
        print_r($result);
        echo "<br>";
    }

    function distribution($array) {
        $result = array_count_values($array);
        ksort($result);
        print_r($result);
    }