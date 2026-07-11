<?php
function FizzBuzz($n) {
    for ($i=1;$i<=$n;$i++) {
        if ($i % 3 == 0 and $i % 5 == 0) {
            echo("FizzBuzz\n");
        }
        elseif ($i % 3 == 0) {
            echo("Fizz\n");
        }
        elseif ($i % 5 == 0) {
            echo("Buzz\n");
        }
        else{
            echo($i);
            echo("\n");
        }
    }
}

<?php

function palindrome($s) {
    $cleaned= strtolower(str_replace(" ", "", $s));
    $reversed = strrev($cleaned);
    return $cleaned === $reversed;

}

var_dump(palindrome("acar"));




<?php

function secondLargest($a){
    $x=0;
    $y=0;
    foreach ($a as $num){
        if($num>$x){
            $y=$x;
            $x=$num;
        }
        
    }
}
