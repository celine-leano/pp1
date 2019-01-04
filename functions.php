<?php
    function printArray($array) {
        print_r($array);
    }

    function largest($array) {
        echo max($array);
    }

    function average($array) {
        echo array_sum($array)/count($array);
    }