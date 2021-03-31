<?php
function tukar_besar_kecil($string){
    $Capital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $output = "";

    for($i = 0; $i < strlen($string); $i++){
        if(ctype_upper($string[$i])){
            $position = strpos($Capital, $string[$i]);
            $output .= $alphabet[$position];
        }
        else if(ctype_lower($string[$i])){
            $position = strpos($alphabet, $string[$i]);
            $output .= $Capital[$position];
        }
        else{
            $output .= $string[$i];
        }
    }
    $output .= "<br>";
    return $output;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>