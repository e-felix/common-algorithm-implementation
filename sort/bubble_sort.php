<?php declare(strict_types=1);

/**
 * Sorts an array using the bubble sort algorithm
 *
 * @param array &$array The array to sort
 */
function bubble_sort(array &$array) : void
{
    $n = count($array);

    for($i = 0; $i < $n; ++$i)
    {
        for($j = 0; $j < $n - 1; ++$j)
        {
            if($array[$j] > $array[$j+1])
            {
                $swapValue = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $swapValue;
            }
        }
    }
}

/**
 * Sorts an array using the optimized bubble sort algorithm
 *
 * @param array $array The haystack to search in
 */
function optimized_bubble_sort(array &$array) : void
{
    do
    {
        $swapState = false;

        for($i = 0; $i < count($array) - 1; ++$i)
        {
            if($array[$i] > $array[$i + 1]) {
                $swapValue = $array[$i];
                $array[$i] = $array[$i+1];
                $array[$i+1] = $swapValue;
                $swapState = true;
            }
        }
    }
    while($swapState);
}
