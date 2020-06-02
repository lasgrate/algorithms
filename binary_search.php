<?php

function binary_search(array $arr, $item)
{
    $foundIndex = null;
    $low = 0;
    $high = \count($arr);

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);
        $guess = $arr[$mid];

        if ($guess == $item) {
            $foundIndex = $mid;
            break;
        } elseif ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return $foundIndex;
}
