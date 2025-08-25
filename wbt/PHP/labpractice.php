<?php
echo "1. Simple Interest Calculation <br>";
$principal = 1000;
$rate = 5;
$time = 2;
$simpleInterest = ($principal * $rate * $time) / 100;
echo "Simple Interest = " . $simpleInterest . "<br><br>";

////////////////////////////////////////////////////////

echo "2. Swap Two Numbers without Third Variable <br>";
$a = 10;
$b = 20;
echo "Before Swap: a=$a, b=$b<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "After Swap: a=$a, b=$b<br><br>";

/////////////////////////////

echo "3. Check Leap Year <br>";
$year = 2024;
if(($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)){
    echo "$year is a Leap Year<br><br>";
} else {
    echo "$year is NOT a Leap Year<br><br>";
}

///////////////////////////////


echo "4. Factorial of a Number <br>";
$num = 5;
$fact = 1;
for($i = 1; $i <= $num; $i++){
    $fact *= $i;
}
echo "Factorial of $num = $fact<br><br>";

///////////////////////////////////////////

echo "5. Prime Numbers between 1 to 50 <br>";
echo "Prime Numbers between 1 to 50:<br>";
for($i = 2; $i <= 50; $i++){
    $prime = true;
    for($j = 2; $j <= sqrt($i); $j++){
        if($i % $j == 0){
            $prime = false;
            break;
        }
    }
    if($prime){
        echo $i . " ";
    }
}
echo "<br><br>";

//////////////////////////////////////

echo "6. Patterns <br>";
// Pattern 1
echo "Pattern 1:<br>";
for($i = 5; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

// Pattern 2
echo "Pattern 2:<br>";
for($i = 1; $i <= 4; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $j . " ";
    }
    echo "<br>";
}
echo "<br>";

// Pattern 3
echo "Pattern 3:<br>";
$char = 'A';
for($i = 1; $i <= 4; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $char . " ";
    }
    $char++;
    echo "<br>";
}
?>
