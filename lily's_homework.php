<?php
$arr = [3, 4, 2, 5, 1];
function lilysHomework($arr) {

    $count   = $count_2    = 0; //counter
    $temp    = $temp_arr_2 = $unsorted = $arr; // unsorted elements of the array
    $pos_arr = $pos_arr_2 = array(); // stores postion of elements of the array

    for( $i = 0; $i < count($arr); $i++ ) {
        $pos_arr[$arr[$i]] = $i;
    }

    $pos_arr_2 = $pos_arr;
    
    sort($temp); //ascending sorted array

    /**
     * left to right sort
     */

    for( $i = 0; $i < count( $arr ); $i++ ) {
        if( $arr[$i] != $temp[$i] ) {

            //storing the position of uneqal values
            $temp_3 = $pos_arr[$arr[$i]];
            $temp_4 = $pos_arr[$temp[$i]];

            //exchanging the values of unmatched values
            $temp_2                   = $arr[$i];
            $arr[$i]                  = $arr[$pos_arr[$temp[$i]]]; 
            $arr[$pos_arr[$temp[$i]]] = $temp_2;

            //exchanging the keys of unmatched values in hashmap
            $temp_5                 = $pos_arr[$arr[$temp_3]];
            $pos_arr[$arr[$temp_3]] = $pos_arr[$arr[$temp_4]];
            $pos_arr[$arr[$temp_4]] = $temp_5;
            
            //increasing the counter no 
            $count++;
           
        }
    }

    rsort($unsorted); //decending order sort

    /**
     * right to left sort
     */
    
    for( $i =0; $i < count( $temp_arr_2 ); $i++ ) {
        if( $temp_arr_2[$i] != $unsorted[$i] ) {

            //storing the position of uneqal values
            $pos_1 = $pos_arr_2[$temp_arr_2[$i]]; 
            $pos_2 = $pos_arr_2[$unsorted[$i]];

            //exchanging the values of unmatched values
            $temp_6                                = $temp_arr_2[$i];
            $temp_arr_2[$i]                        = $temp_arr_2[$pos_arr_2[$unsorted[$i]]];
            $temp_arr_2[$pos_arr_2[$unsorted[$i]]] = $temp_6;

            //exchanging the keys of unmatched values in hashmap
            $temp_7                         = $pos_arr_2[$temp_arr_2[$pos_1]];
            $pos_arr_2[$temp_arr_2[$pos_1]] = $pos_arr_2[$temp_arr_2[$pos_2]];
            $pos_arr_2[$temp_arr_2[$pos_2]] = $temp_7;

            //increasing the counter no 2
            $count_2++;
        }
    }

    return min($count, $count_2);
    
    
}

echo lilysHomework( $arr );