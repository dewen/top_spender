<?php

function process($handler)
{
    $arr = $top = array();
    while($buffer = fgetcsv($handler)) {

        $id     = $buffer[0];
        $spend  = $buffer[1];

        $arr[$id]['total'] = (isset($arr[$id]['total'])) ? $arr[$id]['total'] + $spend : $spend;
        $arr[$id]['cnt'] = (isset($arr[$id]['cnt'])) ? $arr[$id]['cnt'] + 1 : 1;

        // add average to top
        $top[$id] = $arr[$id]['total'] / $arr[$id]['cnt'];
        if (count($top) >= 5) {
            arsort($top);
            $top = array_slice($top, 0, 5, true);
        }
    }

    return $top;
}

