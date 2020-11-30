<?php declare(strict_types=1);

    /**
     * Returns the index of the value $n in a sorted array
     * using binary search
     *
     * @param array $array The haystack to search in
     * @param int $n The value/needle to search for
     *
     * @return int
     */
    function binary_search(array $array, int $n) : int
    {
        // initialize left and right of the array to take the whole array
        // left is always the first index of the array
        // right is always the last index of the array
        $left = 0;
        $right = count($array) - 1;

        // As long a right (last index) is higher than left (first index) then search for the value
        while($left <= $right)
        {
            // initialize the middle index
            $mid = (int) floor(($right + $left) / 2);

            // if the middle value is lesser than the search value
            if($array[$mid] < $n)
            {
                // then we keep the right side of the array: left is now starting at the middle + 1 of the array
                $left = $mid + 1;
            }
            //if the middle value is greater than the search value
            else if ($array[$mid] > $n) {
                // then we keep the left side of the array: right is now ending at the middle - 1 of the array
                $right = $mid - 1;
            }
            // else the middle value equals the search value
            else
            {
                // return the index
                return $mid;
            }
        }

        return -1; // value is not found
    }

    /**
     * Returns the index of the value $n in a sorted array
     * using recursive binary search
     *
     * @param array $array The haystack to search in
     * @param int $first The first index of the array
     * @param int $last The last index of the array
     * @param int $n The value/needle to search for
     *
     * @return int
     */
    function binary_search_recursion(array $array, int $first, int $last, int $n) : int
    {
        // if last is lesser than first then the value is not found
        if($last < $first) {
            return -1;
        }

        // initialize the middle index
        $mid = (int) floor(($last + $first) / 2);

        // if the middle value is lesser than the search value
        if($array[$mid] < $n)
        {
            // then we keep the right side of the array and call itself with the search starting at the middle + 1 of the array
            return binary_search_recursion($array, $mid + 1, $last, $n);
        }
        // if the middle value is greater than the search value
        else if($array[$mid] > $n) {

            // then we keep the left side of the array and call itself with the search ending at the middle - 1 of the array
            return binary_search_recursion($array, $first, $mid - 1, $n);
        }
        // else the middle value equals the search value
        else
        {
            // return the index
            return $mid;
        }

    }