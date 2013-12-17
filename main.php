<?php

/**
 * REQUIREMENT:
 *
 *      Given a file with a comma-separated file listing customer purchases 
 *      including a customer id and the amount spent for each purchase, write a 
 *      method to calculate the average spending of each of the top five 
 *      spenders.  Discuss assumptions.
 *
 * USAGE:
 *
 *      []$ php main.php < data/1000.csv 
 *
 * OUTPUT:
 *
 *      - top spender list and amount of average spending
 *      - processing time
 *      - memory usage
 */
$time_start = microtime(true);
include_once dirname(__FILE__) . '/func.php';

// check if it's input file or from STDIN, get file handler in either case
if (isset($argv[1]) && is_file($argv[1]))
    $handler = fopen($argv[1], 'r');
else
    $handler = STDIN;

$top = process($handler);
fclose($handler);

foreach($top as $id => $avg) {
    echo $id . ' - ' . $avg . PHP_EOL;
}

$time_end = microtime(true);
echo "PROCESS TIME: " . number_format($time_end - $time_start, 4) . PHP_EOL;
echo "MEMORY USAGED: " . memory_get_usage() . 'KB' . PHP_EOL;

