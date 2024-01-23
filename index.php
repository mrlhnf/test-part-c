<!DOCTYPE html>
<html>
<body>

<?php

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function findMinionID($n) {
    $primeNumCombine = "";
    $num = 2; //prime number start from 2

    while (strlen($primeNumCombine) < 5 + $n) {
        if (isPrime($num)) {
            $num = (string) $num;
            $primeNumCombine .= $num;
        }
        $num = (int) $num;
        $num++;
    }

    $minionID = substr($primeNumCombine, $n, 5);

    echo $minionID;
}

findMinionID(0);

?> 

</body>
</html>