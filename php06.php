<?php
    $a = 12;

    // VERSION 1
    if( $a % 2 == 0 ){
        echo "$a is EVEN"; 
    }
    else{
        echo "$a is ODD"; 
    }

    // VERSION 2 - {} 
    // curly brackets can be omitted if there are only one statement 
    if( $a % 2 == 0 )
        echo "$a is EVEN"; 
    else 
        echo "$a is ODD"; 

    // VERSION 3
    if( $a % 2 == 0 ):
        echo "$a is EVEN"; 
        echo "Statement 2"; 
    else:
        echo "$a is ODD"; 
        echo "Statement 2"; 
    endif;

?>