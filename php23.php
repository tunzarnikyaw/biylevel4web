<?php
    function test(){
        echo "This is test function!<br>";
        return 123;
    }

    function make_double($n){
        $r = $n * 2;
        return $r;
    }

    echo "Hello<br>";
    $a = test();
    echo "$a<br>";

    $b = make_double(40);
    echo "$b<br>";
?>