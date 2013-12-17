<?php

/**
 * Taking an integer as total of rows, output user_id, spending in CSV format 
 * to STDOUT. If number of rows not given, use 100 as default rows.
 *
 *    - user_id ranges from 1 - 30
 *    - spending ranges from 1 - 100
 *
 * Usage:
 *
 *      []$ cd [project root]
 *      []$ php script/create_csv.php 1000 > data/1000.csv
 */

// total number of rows to be created
$total = (isset($argv[1]) && is_numeric($argv[1])) ? (int)$argv[1] : 100;

// generate random id list
$ids = range(1, 30);
for($i=0;$i<$total;$i++)
    echo $ids[rand(0,count($ids)-1)] . "," . rand(1,100) . "\n";
