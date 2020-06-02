<?php

function insertion_sort(array $arr): array
{
    $arrCount = \count($arr);

    for ($j = 1; $j < $arrCount; $j++) {
        $key = $arr[$j];
        $i = $j - 1;

        while ($i >= 0 && $arr[$i] > $key) {
            $arr[$i + 1] = $arr[$i];
            $i = $i - 1;
        }

        $arr[$i + 1] = $key;
    }

    return $arr;
}
