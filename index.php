<?php
/*
 * Celine Leano
 * 1/4/2019
 * 328/pp1/index.php
 * Pair Program 1
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>

    <pre>
    <?php
    include 'functions.php';

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    // call functions
    printArray($numbers);
    largest($numbers);
    average($numbers);
    removeDups($numbers);
    distribution($numbers);
    ?>
    </pre>
</body>
</html>