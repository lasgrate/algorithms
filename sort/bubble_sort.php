<?php

function bubble_sort(array $arr): array
{
    $arrCount = \count($arr);

    for ($i = 0; $i < $arrCount; $i++) {
        $swap = false;

        for ($j = 0; $j < $arrCount - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
                $swap = true;
            }
        }

        if (!$swap) {
            break;
        }
    }

    return $arr;
}
