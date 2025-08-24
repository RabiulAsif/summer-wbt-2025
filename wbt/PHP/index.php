<?php
// ===============================
// Problem 1: Area and Perimeter of a Rectangle
// ===============================
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Problem 1: Area and Perimeter of Rectangle <br>";
echo "Area: $area <br>";
echo "Perimeter: $perimeter <br><br>";

// ===============================
// Problem 2: Calculate VAT (15%)
// ===============================
$amount = 200;
$vat = $amount * 0.15;
$total = $amount + $vat;

echo "Problem 2: Calculate VAT <br>";
echo "Amount: $amount <br>";
echo "VAT (15%): $vat <br>";
echo "Total with VAT: $total <br><br>";

// ===============================
// Problem 3: Odd or Even
// ===============================
$num = 7;

echo "Problem 3: Odd or Even <br>";
if($num % 2 == 0) {
    echo "$num is Even <br><br>";
} else {
    echo "$num is Odd <br><br>";
}

// ===============================
// Problem 4: Largest Number among Three
// ===============================
$a = 15;
$b = 20;
$c = 12;

echo "Problem 4: Largest Number <br>";
if($a >= $b && $a >= $c) {
    echo "Largest Number is: $a <br><br>";
} elseif($b >= $a && $b >= $c) {
    echo "Largest Number is: $b <br><br>";
} else {
    echo "Largest Number is: $c <br><br>";
}

// ===============================
// Problem 5: Print Odd Numbers between 10 and 100
// ===============================
echo "Problem 5: Odd Numbers between 10 and 100 <br>";
for($i = 10; $i <= 100; $i++) {
    if($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><br>";

// ===============================
// Problem 6: Search Element in an Array
// ===============================
$numbers = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;

foreach($numbers as $num) {
    if($num == $search) {
        $found = true;
        break;
    }
}

echo "Problem 6: Search in Array <br>";
if($found) {
    echo "Element $search found in array. <br><br>";
} else {
    echo "Element $search not found in array. <br><br>";
}

// ===============================
// Problem 7: Patterns (Stars, Numbers, Letters)
// ===============================

// Pattern 1: Stars
echo "Pattern 1: Stars <br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

// Pattern 2: Numbers
echo "Pattern 2: Numbers <br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
echo "<br>";

// Pattern 3: Letters
echo "Pattern 3: Letters <br>";
$letterIndex = 0;
$letters = array("A", "B", "C", "D", "E", "F");

for ($i = 1; $i <= 3; $i++) {
    for ($l = 1; $l <= $i; $l++) {
        echo $letters[$letterIndex] . " ";
        $letterIndex++;
    }
    echo "<br>";
}
echo "<br>";
?>
