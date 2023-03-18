<?php
//----------------PHP - Numbers system and Math--------->$_COOKIE


/*=================================================================================================
--------------------------13- Decimal,Binary Octal, & Hexadecimal--------------------> 
===================================================================================================*/ 

/*
====== Decimal,Binary Octal, & Hexadecimal Numbers System ===========
Decimal,Binary Octal, and Hexadecimal are number systems used to represent numbers in computing and mathematics.
*/

/************ 01: Decimal *************
 * Decimal number system, also known as base-10, is the most commonly used number system in our daily lives. It uses 10 digits (0-9) to represent numbers.
 * Base = 10
 * Digit = 0,1,2,3,4,5,6,7,8,9
*/

/************ 02: Binary *************
 * Binary number system, also known as base-2, uses only two digits (0 and 1) to represent numbers. Binary is the foundation of all digital technology, including computers and digital devices, and is used to store, process, and transmit data.
 * Base = 2
 * Digit = 0,1 (0 means on & 1 means off)
*/

/************ 03: Octal *************
 * Octal number system, also known as base-8, uses 8 digits (0-7) to represent numbers. Octal is commonly used in computing to represent binary data in a more compact form.
 * Base = 8
 * Digit = 0,1,2,3,4,5,6,7
*/

/************ 04: Hexadecimal *************
 * Hexadecimal number system, also known as base-16, uses 16 digits (0-9, A-F) to represent numbers. It is commonly used in computing for representation of binary data in a human-readable form.
 * Base = 16
 * Digit = 0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F   (A=11,B=12,C=13,D=14,E=15,F=16)
*/


/*  =============== Decimal to binary ==================   
* decimal(50) = binary(11011)
* The decimal number 50 can be converted to binary as follows:
* Divide the decimal number by 2 and write down the remainder:
50 ÷ 2 = 25 with a remainder of 0
25 ÷ 2 = 12 with a remainder of 1
12 ÷ 2 = 6 with a remainder of 0
6 ÷ 2 = 3 with a remainder of 0
3 ÷ 2 = 1 with a remainder of 1
1 ÷ 2 = 0 with a remainder of 1
* Read the remainders from bottom to top:
The binary equivalent of decimal number '50' is '110010'
* So, the decimal number '50' is equal to binary number '110010'.
*/


/*  =============== Decimal to octal ==================   
* decimal(50) = octal(62)
* The decimal number 50 can be converted to octal as follows:
* Divide the decimal number by 8 and write down the remainder:
50 ÷ 8 = 6 with a remainder of 2
6 ÷ 8 = 0 with a remainder of 6
* Read the remainders from bottom to top:
The octal equivalent of decimal number '50' is '62'
* So, the decimal number '50' is equal to octal number '62'.
*/


/*  =============== Decimal to Hexadecimal ==================   
* decimal(50) = Hexadecimal(32)
* The decimal number 50 can be converted to hexadecimal as follows:
* Divide the decimal number by 16 and write down the remainder:
50 ÷ 16 = 3 with a remainder of 2
3 ÷ 16 = 0 with a remainder of 3
* Replace the remainders with their hexadecimal equivalent:
    0 = 0
    1 = 1
    2 = 2
    3 = 3
    4 = 4
    5 = 5
    6 = 6
    7 = 7
    8 = 8
    9 = 9
    10 = A
    11 = B
    12 = C
    13 = D
    14 = E
    15 = F
* Read the remainders (hexadecimal equivalent) from bottom to top:
The hexadecimal equivalent of decimal number '50' is '32'
* So, the decimal number '50' is equal to hexadecimal number '32'.
*/

/*=================================================================================================
--------------------------14- PHP Numbers - integers--------------------> 
===================================================================================================*/ 

/*
====== PHP Numbers - integers ===========
The PHP number system is a system used to represent numerical values in the PHP programming language. PHP supports both integer and floating-point numbers, with integers being whole numbers and floating-point numbers having a decimal component. PHP also supports various arithmetic operations, such as addition, subtraction, multiplication, and division, on both types of numbers.
-> https://www.w3schools.com/php/php_numbers.asp
-> https://www.php.net/manual/en/language.types.integer.php
*/

/** PHP Integers
 * 2, 256, -256, 10358, -179567 are all integers.
 * An integer is a number without any decimal part.
 * 
 * An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
 * 
 * Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).
 * 
*/
//=== Predefined Constants: https://www.php.net/manual/en/reserved.constants.php =====
//PHP_INT_MAX - The largest integer supported
$num = 495789457487865656565477584;
if($num > PHP_INT_MAX){
    echo "The number is too large for an integer\n";
}
//PHP_INT_MIN - The smallest integer supported
$num = -92233720368547758097;
if($num < PHP_INT_MIN){
    echo "The number is too smaller for an integer\n";
}
//PHP_INT_SIZE -  The size of an integer in bytes
echo "The size of an integer is " . PHP_INT_SIZE . " bytes\n";

//==================== check if the type of a variable is integer - https://www.php.net/manual/en/function.is-int.php:
//s_int()
var_dump(is_int(23)); //bool(true)
var_dump(is_int("23")); //bool(false)
var_dump(is_int(23.5)); //bool(false)

//is_integer()
var_dump(is_integer(23)); //bool(true)
var_dump(is_integer("23")); //bool(false)
var_dump(is_integer(23.5)); //bool(false)



/*=================================================================================================
--------------------------15- PHP Numbers - Float--------------------> 
===================================================================================================*/ 


/*
====== PHP Numbers - Float ===========
The PHP number system is a system used to represent numerical values in the PHP programming language. PHP supports both integer and floating-point numbers, with integers being whole numbers and floating-point numbers having a decimal component. PHP also supports various arithmetic operations, such as addition, subtraction, multiplication, and division, on both types of numbers.
-> https://www.w3schools.com/php/php_numbers.asp
-> https://www.php.net/manual/en/language.types.integer.php
*/

//is_float() - https://www.php.net/manual/en/function.is-float.php
var_dump(is_float(23)); //bool(false)
var_dump(is_float("23")); //bool(false)
var_dump(is_float(23.5)); //bool(true)

echo "\n";

//is_double() - The function is_double() is not a predefined function in PHP


/*=================================================================================================
--------------------------16- PHP Math Functions--------------------> 
===================================================================================================*/ 


/******* PHP Math Functions ******
 * The math functions can handle values within the range of integer and float types.
* https://www.w3schools.com/php/php_ref_math.asp
*/

//pi() - Returns the value of PI
echo pi()."\n";     // 3.1415926535898

//min() - Returns the lowest value in an array, or the lowest value of several specified values
$arr = array(394,23,54,89,123,56,90);
echo min($arr)."\n";    // 23

//max() - Returns the highest value in an array, or the highest value of several specified values
$arr = array(39,23,54,89,123,56,90);
echo max($arr)."\n";    // 123

//abs() - Returns the absolute (positive) value of a number
echo abs(-5.5)."\n";    // 5.5

//sqrt() - function returns the square root of a number:
echo sqrt(64)."\n";     // 64

//round() - function rounds a floating-point number to its nearest integer:
echo(round(0.60)."\n");  // 1
echo(round(0.49)."\n");  // 0

//rand() - function generates a random number:
echo(rand()."\n");  //generates a random number
echo(rand(1,10)."\n");  //random number between 1 to 10

//floor() - Round numbers down to the nearest integer:
echo(floor(0.60) . "\n"); // 0
echo(floor(0.40) . "\n"); // 0
echo(floor(5) . "\n");  // 5
echo(floor(5.1) . "\n");    // 5
echo(floor(-5.1) . "\n");   // -6
echo(floor(-5.9). "\n");    // -6

//pow() - Returns x raised to the power of y
echo(pow(3,2) . "\n");



















?>