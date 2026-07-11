<?php

// This is a C++ style single-line comment
// This is a C++ style single-line comment
// This is a C++ style single-line comment

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

// This is a C++ style single-line comment
// This is a C++ style single-line comment
// This is a C++ style single-line comment


function palindrome($s) {
    $cleaned= strtolower(str_replace(" ", "", $s));
    $reversed = strrev($cleaned);
    return $cleaned === $reversed;

}

var_dump(palindrome("acar"));


// This is a C++ style single-line comment
// This is a C++ style single-line comment
// This is a C++ style single-line comment

function findsecondLargest($array){
    $largest=0;
    $secondLargest=0;
    foreach ($array as $num){
        if($num > $largest){
            $secondLargest = $largest;
            $largest = $num;
        }
         elseif ($num > $secondLargest && $num < $largest) {
            $secondLargest = $num;
        }
    }
    return $secondLargest;
}
$array = [1,98,84,23,54,88,3,6,9,199];
echo findsecondLargest($array);

// This is a C++ style single-line comment
// This is a C++ style single-line comment
// This is a C++ style single-line comment


function highestpaid($e){

    $n="";
    $s=0;

    foreach ($e as $emp) {
        if ($emp['salary']>$s) {
            $n=$emp['name'];
            $s=$emp['salary'];
        }
    }
    return $n;
}



$employees = [
    ["name" => "Ali", "salary" => 6000],
    ["name" => "Sara", "salary" => 3200],
    ["name" => "Youssef", "salary" => 2900],
];

echo highestpaid($employees);

