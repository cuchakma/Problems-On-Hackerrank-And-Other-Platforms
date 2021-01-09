<?php
$string = "aabbcd";
function isValid($s) {

    //filling the frequencies with value 0
    $freq = array_fill(0, 26, 0);

    //counting the occurances of each alphabets
    for( $i = 0; $i < strlen($s); $i++ ){
        $freq[ord($s[$i]) - 97]++;
    }

    $max = 0;
    $min = 100000000;

    //finding max and min
    for( $i = 0; $i < 26; $i++ ) {
        if( $max < $freq[$i] ) {
            $max = $freq[$i];
        }
        if( $min > $freq[$i] && $freq[$i] != 0) {
            $min = $freq[$i];
        }
    }

    //checking for 3 number frequencies
    for( $i=0; $i < 26; $i++ ){
        if( $freq[$i] != 0) {
            if( $freq[$i] == $max || $freq[$i] == $min ) {
                continue;
            } else {
                return "NO";
            }
        }
    }

    if( $max == $min ) {
        return "YES";
    } else {
        
        //common and uncommon frequencies of max and min
        $max_freq = 0;
        $min_freq = 0;
        for( $i =0; $i < 26; $i++ ) {
            if( $freq[$i] == $max ) {
                $max_freq++;
            } 
            if( $freq[$i] == $min ) {
                $min_freq++;
            }
        }
        if( $max-$min != 1) {

            if( $min == 1 && $min_freq == 1) {
                return "YES";
            } else {
                return "NO";
            }

        }
        else {
            if( $min_freq == 1 || $max_freq == 1 ){
                return "YES";
            } else {
                return "NO";
            }
        }
    }

}



echo isValid($string);