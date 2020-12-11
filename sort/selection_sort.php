<?php declare(strict_types=1);

/**
 * Sorts an array using the selection sort algorithm
 *
 * @param array &$array The array to sort
 */
function selection_sort(array &$array) : void
{
    $n = count($array);

    for($i = 0; $i < $n; ++$i)
    {
        $smallestValue = $array[$i];
        $swapIndex = $i;

        for($j = $i; $j < $n; ++$j)
        {
            if($array[$j] < $smallestValue)
            {
                $smallestValue = $array[$j];
                $swapIndex = $j;
            }
        }

        $array[$swapIndex] = $array[$i];
        $array[$i] = $smallestValue;

    }
}