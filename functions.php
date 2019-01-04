<?php
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