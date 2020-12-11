<?php declare(strict_types=1);

/**
 * Returns the index of the value $n in the array
 * using linear search
 *
 * @param array $array The haystack to search in
 * @param int $n The value/needle to search for
 *
 * @return int
 */
function linear_search(array $array, int $n) : int
{
    for($i = 0; $i < count($array); ++$i) {
        // check for each iteration if the current value in the array equals the value to search for
        if($array[$i] == $n)
        {
            // returns the index
            return $i;
        }
    }

    // returns value not found
    return -1;
}