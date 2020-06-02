<?php

function quick_sort(array $arr): array
{
    $arrCount = \count($arr);

    if ($arrCount <= 1) {
        return $arr;
    }

    $p = $arr[(int)($arrCount / 2)];
    $left = [];
    $right = [];

    for ($i = 0; $i < $arrCount; $i++) {
        if ($p > $arr[$i]) {
            $left[] = $arr[$i];
        } elseif ($p === $arr[$i]) {
            continue;
        } else {
            $right[] = $arr[$i];
        }
    }

    if (\count($left) === 0) {
        $left[] = $p;
    } else {
        $right[] = $p;
    }

    $left = quick_sort($left);
    $right = quick_sort($right);

    foreach ($right as $item) {
        $left[] = $item;
    }

    return $left;
}
