<?php
//---------------------PHP - Operators----->

/*=================================================================================================
--------------------------17.0- PHP Operators Overview--------------------> 
===================================================================================================*/ 

/******* PHP Operators Overview ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Increment/Decrement operators: ++, --
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
*/


/*=================================================================================================
--------------------------17.1- Arithmetic Operators--------------------> 
===================================================================================================*/ 

/******* Arithmetic Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Increment/Decrement operators: ++, --
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
*/

// Arithmetic operators: : +, -, *, /, %,**
$x = 3;
$y= 2;
//-> Addition(+)
echo $x + $y;   // 5
echo("\n");

//-> Subtraction(-)
echo $x - $y;   // 1
echo("\n");

//-> Multiplication(*)
echo $x * $y;   // 6
echo("\n");

//-> Division(/)
echo $x / $y;   // 1.5
echo("\n");

//-> Modulus(%)
echo $x % $y;   // 1
echo("\n");

//-> Exponentiation(**)
echo $x ** $y;  // 9
echo("\n");


/*=================================================================================================
--------------------------17.2- Assignment Operators--------------------> 
===================================================================================================*/ 


/******* Assignment Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
############### Assignment operators: =, +=, -=, *=, /=, %=
The PHP assignment operators are used with numeric values to write a value to a variable.
The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
*/
//-> Assign(=)
$a = $b = 2;
echo "Variable a=$a & b=$b\n";  // Variable a=2 & b=2

$c = 5;
$a = $b = $c;
echo "Variable a=$a & b=$b\n";  //Variable a=5 & b=5

$x = 3;
$y = 2;
//-> Addition(+=)
echo $x += $y;   // x = x + y (output = 5)
echo("\n");

//-> Subtraction(-=)
$x = 3;
echo $x -= $y;   // x = x - y (output = 1)
echo("\n");

//-> Multiplication(*=)
$x = 3;
echo $x *= $y;   // x = x * y (output = 6)
echo("\n");

//-> Division(/=)
$x = 3;
echo $x /= $y;   // x = x / y (output = 1.5)
echo("\n");

//-> Modulus(%=)
$x = 3;
echo $x %= $y;   // x = x % y (output = 1)
echo("\n");


//extra example
$num = 10;
$num + 5;
echo $num."\n";  // 10

$num2 = $num + 5;
echo $num2."\n";  // 15

$ex = 5-2 * 2;
echo $ex."\n";  // 1

$ex =(5-2) * 2;
echo $ex."\n";  // 6

$ex = 32-8 / 11-5;
echo $ex."\n";  // 26.272727272727

$ex = (32-8) / (11-5);
echo $ex."\n";  // 4


/*=================================================================================================
--------------------------17.3- Increment/Decrement Operators--------------------> 
===================================================================================================*/ 

/******* Increment/Decrement Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
############### Increment/Decrement operators: ++, --
(++) increment operators are used to increment a variable's value.
(--) decrement operators are used to decrement a variable's value.
NOTE REMIND THIS: ($num = 2 + 3; This is called an operation) Here 2 and 3 are operands, The (+) sign is the operator
*/
//-> increment(++)
$a = 5;
$a++;  //a = a + 1, a += 1
echo $a,"\n";

//-> decrement(--)
$b = 5;
$b--;  //b = b - 1, b -= 1
echo $b,"\n";


//extra example
$n = 2;
$m = $n++;
echo "m= $m and n = $n \n"; //m= 2 and n = 3 
/*
$m = $n++;
$m = $n;  // 2
$n = $n + 1;  //3
*/

$n = 2;
$m = ++$n;
echo "m= $m and n = $n \n";  //m= 3 and n = 3 
/*
$m = ++$n;
$n = $n + 1;  //3
$m = $n;  // 3
*/


/*=================================================================================================
--------------------------17.4- Comparison Operators--------------------> 
===================================================================================================*/ 

/******* Comparison Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
############### Comparison operators: ==, ===, !=, !==, <>, >, <, >=, <=, <=>
The PHP comparison operators are used to compare two values (number or string):
*/
//-> Equal(==)
$x = 100;  
$y = "100";
var_dump($x == $y); // returns true because values are equal

//-> Identical(===)
$x = 100;  
$y = "100";
var_dump($x === $y); // returns false because types are not equal

//-> Not equal(!=)
$x = 100;  
$y = "100";
var_dump($x != $y); // returns false because values are equal

//-> Not equal(<>)
$x = 100;  
$y = "100";
var_dump($x <> $y); // returns false because values are equal

//-> Not identical(!==)
$x = 100;  
$y = "100";
var_dump($x !== $y); // returns true because types are not equal

//-> Greater than(>)
$x = 100;
$y = 50;
var_dump($x > $y); // returns true because $x is greater than $y

//-> Less than(<)
$x = 10;
$y = 50;
var_dump($x < $y); // returns true because $x is less than $y

//-> Greater than or equal to(>=)
$x = 50;
$y = 50;
var_dump($x >= $y); // returns true because $x is greater than or equal to $y

//-> Less than or equal to(<=)
$x = 50;
$y = 50;
var_dump($x <= $y); // returns true because $x is less than or equal to $y

//-> Spaceship(<=>)
$x = 5;  
$y = 10;
echo ($x <=> $y); // returns -1 because $x is less than $y
echo "\n";

$x = 10;  
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
echo "\n";

$x = 15;  
$y = 10;
echo ($x <=> $y); // returns +1 because $x is greater than $y

/*=================================================================================================
--------------------------17.5- Logical Operators--------------------> 
===================================================================================================*/ 


/******* Logical Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
############### Logical operators: &&, ||, !, and, or, xor
The PHP logical operators are used to combine conditional statements.
*/
//-> And(&&) - True if both $x and $y are true
$x = 100;  
$y = 50;
if ($x == 100 && $y == 50) {
    echo "Hello I am from (&&) operator!\n";
}

//-> Or(||) - True if either $x or $y is true
$x = 100;  
$y = 50;
if ($x == 100 || $y == 50) {
    echo "Hello I am from (||) operator!\n";
}

//-> Not(!) - True if $x is not true
$x = 100;  
if ($x !== 90) {
    echo "Hello I am from (!) operator!\n";
}

//-> And(and) - True if both $x and $y are true
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello I am from (and) operator!\n";
}

//-> Or(or) - True if either $x or $y is true
$x = 100;  
$y = 50;
if ($x == 100 or $y == 50) {
    echo "Hello I am from (rr) operator!\n";
}

//-> Xor(xor) - True if either $x or $y is true, but not both
$x = 100;  
$y = 50;
if ($x == 100 xor $y == 80) {
    echo "Hello I am from (xor) operator!\n";
}

/*=================================================================================================
--------------------------17.6- String Operators--------------------> 
===================================================================================================*/ 


/******* String Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
############### String operators: ., .=
PHP has two operators that are specially designed for strings.
*/
//-> Concatenation(.) - Concatenation of $txt1 and $txt2
$txt1 = "Dot";
$txt2 = " Concatenation";
echo $txt1 . $txt2;
echo "\n";

//-> Concatenation assignment(.=) - Appends $txt2 to $txt1
$txt1 = "Concatenation";
$txt2 = " assignment";
$txt1 .= $txt2;
echo $txt1;


/*=================================================================================================
--------------------------17.7- Array Operators--------------------> 
===================================================================================================*/ 


/******* Array Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
############### Array operators: +, ==, ===, !=, <>, !==
The PHP array operators are used to compare arrays.
*/
//-> Union(+) - Union of $x and $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); // union of $x and $y
echo "\n";

//-> Equality(==) - Returns true if $x and $y have the same key/value pairs
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x == $y);

//-> Identity(===) - Returns true if $x and $y have the same key/value pairs in the same order and of the same types
$x = array("a" => "red", "b" => "green");  
$y = array("a" => "red", "b" => "green");  
var_dump($x === $y);

//-> Inequality(!=) - Returns true if $x is not equal to $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y);

//-> Inequality(<>) - Returns true if $x is not equal to $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x <> $y);

//-> Non-identity(!==) - Returns true if $x is not identical to $y
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y);

/*=================================================================================================
--------------------------17.8- Conditional assignment Operators--------------------> 
===================================================================================================*/


/******* Conditional assignment Operators ******
 * https://www.w3schools.com/php/php_operators.asp
 * https://www.php.net/manual/en/language.operators.php 
 * 
 * PHP operators are symbols that perform specific operations on values and variables. They are used to manipulate data and perform mathematical, comparison, and logical operations. PHP operators include:
 * * Arithmetic operators: : +, -, *, /, %,**
 * * Assignment operators: =, +=, -=, *=, /=, %=
 * * Increment/Decrement operators: ++, --
 * * Comparison operators: ==, ===, !=, <>, !==, <, >, <=, >=, <=>
 * * Logical operators: &&, ||, !, and, or, xor
 * * String operators: ., .=
 * * Array operators: +, ==, ===, !=, <>, !==
 * * Conditional assignment operators: ?:, ??
############### Conditional assignment operators: ?:, ??
The PHP conditional assignment operators are used to set a value depending on conditions:
*/
//-> Ternary(?:) - Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE
$num = 44;
echo $num < 18 ? "Your are a child": "Your are adult";
echo "\n";
echo $num < 18 ? "Your are a child": ($num < 30? "Your are young":"Your age old");
echo "\n";

//-> Null coalescing(??) - Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of $x is expr2.
$name = "Tufik Hasan";
echo $name = $name ?? "Rakib";
echo "\n";

echo $color = $color ?? "red";


?>