<?php
//-----------------------PHP - Conditions (if..elseif..else,switch,ternary)-->  

/*=================================================================================================
--------------------------18.1 - if...else...elseif Statements--------------------> 
===================================================================================================*/

/******* if...else...elseif Statements ******
 * https://www.w3schools.com/php/php_if_else.asp
 * https://www.php.net/manual/en/control-structures.elseif.php
 * 
 * The if...else...elseif statement in PHP is used to make decisions in code. It checks conditions and executes different blocks of code based on whether the conditions are true or false. The basic syntax is: if (condition1) {...} elseif (condition2) {...} else {...}. If condition1 is true, the code inside the first block is executed. If condition1 is false and condition2 is true, the code inside the second block is executed. If all conditions are false, the code inside the else block is executed.
 * 
 * Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
 
In PHP we have the following conditional statements:
 * if statement - executes some code if one condition is true
 * if...else statement - executes some code if a condition is true and another code if that condition is false
 * if...elseif...else statement - executes different codes for more than two conditions
 * switch statement - selects one of many blocks of code to be executed
*/

//even odd number
$number = rand(1,50);   //get a random number between 1 to 50
if($number % 2 === 0){
    echo "$number is even number\n";
}else{
    echo "$number is odd number\n";
}

//example 01
$a = 30;
$b = 20;
if($a == $b){
    echo "$a is equal to $b\n";
}elseif($a > $b){
    echo "$a is greater then $b\n";
}elseif($a < $b){
    echo "$a is less then $b\n";
}
//If the check first statement matches then don't check the conditions below
$a = 20;
$b = 20;
if($a >= $b){
    echo "$a is a same or greater then $b\n";
}elseif($a > $b){
    echo "$a is greater then $b\n";
}elseif($a < $b){
    echo "$a is less then $b\n";
}elseif($a == $b){
    echo "$a is equal to $b\n";
}

//age check
$age = rand(1,70);
if($age >= 13 && $age <=19){
    echo "Your age is $age years old, You are a teenager\n";
}elseif($age < 13){
    echo "Your age is $age years old, You are a child\n";
}elseif($age > 19 && $age <= 45){
    echo "Your age is $age years old, You are a young man\n";
}else{
    echo "Your age is $age years old, You are an old man\n";
}

/*=================================================================================================
--------------------------18.2 - Important - if...else condition practice--------------------> 
===================================================================================================*/

/******* Important - if...else condition practice ******
 * https://www.w3schools.com/php/php_if_else.asp
 * https://www.php.net/manual/en/control-structures.elseif.php
 * 
 * The if...else...elseif statement in PHP is used to make decisions in code. It checks conditions and executes different blocks of code based on whether the conditions are true or false. The basic syntax is: if (condition1) {...} elseif (condition2) {...} else {...}. If condition1 is true, the code inside the first block is executed. If condition1 is false and condition2 is true, the code inside the second block is executed. If all conditions are false, the code inside the else block is executed.
 * 
 * Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
 
In PHP we have the following conditional statements:
 * if statement - executes some code if one condition is true
 * if...else statement - executes some code if a condition is true and another code if that condition is false
 * if...elseif...else statement - executes different codes for more than two conditions
 * switch statement - selects one of many blocks of code to be executed
*/

//==================== Important steps ===================
//01
$food = "tuna";
if($food == "tuna"){
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}
//02
$food = "apple";
if($food = "tuna"){ //this is return true. Assigns a value to the variable $food as tuna
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}
//03
$food = "apple";
if("tuna" == $food){ //Always use static values on the left side of the condition
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}

/* 
04: Best practice to Always use static values on the left side of the condition. An handle error
$food = "apple";
if("tuna" = $food){ //it's return syntax error.
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}
*/

//03
$food = "salmon";
if("tuna" == $food || "salmon" == $food){
    echo "It has vitamins D\n";
}else{
    echo "We don't know if {$food} contains Vitamin D\n";
}

/*=================================================================================================
--------------------------18.3 - Important - if...else..(leap year)--------------------> 
===================================================================================================*/

/******* Important - if...else..(leap year) ******
 * https://www.w3schools.com/php/php_if_else.asp
 * https://www.php.net/manual/en/control-structures.elseif.php
 * 
 * The if...else...elseif statement in PHP is used to make decisions in code. It checks conditions and executes different blocks of code based on whether the conditions are true or false. The basic syntax is: if (condition1) {...} elseif (condition2) {...} else {...}. If condition1 is true, the code inside the first block is executed. If condition1 is false and condition2 is true, the code inside the second block is executed. If all conditions are false, the code inside the else block is executed.
 * 
 * Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
 
In PHP we have the following conditional statements:
 * if statement - executes some code if one condition is true
 * if...else statement - executes some code if a condition is true and another code if that condition is false
 * if...elseif...else statement - executes different codes for more than two conditions
 * switch statement - selects one of many blocks of code to be executed
*/

/*==================== Leap Year  ===================
 * year is divisible / 4
 * year is divisible / 100
 * year is divisible / 400
*/
$year = 1900;
//01
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year\n";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not a leap year\n";
}elseif($year % 4 == 0){
    echo "{$year} is a leap year\n";
}else{
    echo "{$year} is not a leap year\n";
}

// ========= Important part
echo "\n";
if(false && false){
    echo "false\n";
}else{
    echo "False && false return false\n";
} 
//
if(true && false){
    echo "true\n";
}else{
    echo "true && false return false\n";
}
//
if(true && true){
    echo "true && true return true\n";
}else{
    echo "false\n";
}
//
if(true || false){
    echo "true || false return true\n";
}else{
    echo "false\n";
}
echo "\n";
//pseudo code for leap year
// 1900 = if(true && (false || false)) -> if(true && false) return false
// 2000 = if(true && (false || true))  -> if(true && true) return true
// 2012 = if(true && (true || false))  -> if(true && true) return true
// 2013 = if(false && (true || false))  -> if(false && true) return false

//02
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year\n";
}else{
    echo "{$year} is not a leap year\n";
}


/*=================================================================================================
--------------------------18.4 - Nested - If...else...elseif--------------------> 
===================================================================================================*/


/******* Nested - If...else...elseif ******
 * https://www.w3schools.com/php/php_if_else.asp
 * https://www.php.net/manual/en/control-structures.elseif.php
 * 
 * The if...else...elseif statement in PHP is used to make decisions in code. It checks conditions and executes different blocks of code based on whether the conditions are true or false. The basic syntax is: if (condition1) {...} elseif (condition2) {...} else {...}. If condition1 is true, the code inside the first block is executed. If condition1 is false and condition2 is true, the code inside the second block is executed. If all conditions are false, the code inside the else block is executed.
 * 
 * Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
 
In PHP we have the following conditional statements:
 * if statement - executes some code if one condition is true
 * if...else statement - executes some code if a condition is true and another code if that condition is false
 * if...elseif...else statement - executes different codes for more than two conditions
 * switch statement - selects one of many blocks of code to be executed
*/

$condition1 = true;
$condition2 = true;
$condition3 = true;
//Nested - If...else
if($condition1){
    if($condition2){
        if($condition3){
            echo "All condition true\n";
        }else{
            echo "Condition 3 not found \n";
        }
    }else{
        echo "Condition 2 not found \n";
    }
}else{
    echo "Condition 1 not found \n";
}

//If...else...elseif
if($condition1 && $condition2 && $condition3){
    echo "All condition true\n";
}elseif($condition1 && $condition2){
    echo "Condition 3 not found \n";
}elseif($condition1){
    echo "Condition 2 not found \n";
}else{
    echo "Condition 1 not found \n";
}





/*=================================================================================================
---------18.5 - Alternative Syntax - If...else...elseif
=================================================================================================================*/

/******* Alternative Syntax - If...else...elseif *******/

$condition1 = true;
$condition2 = true;
$condition3 = true;

//Nested - If...else
if ($condition1) :
    if ($condition2) :
        if ($condition3) :
            echo "All condition true\n";
        else :
            echo "Condition 3 not found \n";
        endif;
    else :
        echo "Condition 2 not found \n";
    endif;
else :
    echo "Condition 1 not found \n";
endif;


//If...else...elseif
if ($condition1 && $condition2 && $condition3) :
    echo "All condition true\n";
elseif ($condition1 && $condition2) :
    echo "Condition 3 not found \n";
elseif ($condition1) :
    echo "Condition 2 not found \n";
else :
    echo "Condition 1 not found \n";
endif;


/*=================================================================================================
--------------------------19 - Ternary Operators and Nested Ternary Operators--------------------> 
===================================================================================================*/

/******* PHP Ternary Operators & Nested Ternary Operators
 *  The PHP ternary operator is a shorthand way of writing a simple if-else statement. It takes an expression and returns one of two values based on whether the expression is true or false. This allows for concise and readable coding, especially when used in conjunction with expressions that evaluate to simple values.
 * 
 *  https://www.php.net/manual/en/language.operators.comparison.php
 *  https://www.phptutorial.net/php-tutorial/php-ternary-operator/
 * 
********/
$num = rand(1,30);

//check number or not
$result = (is_integer($num)? "number":"Invalid number");
echo $result."\n";

//even or odd number
$result = (($num % 2 == 0)? "Even number":"Odd number");
echo $result."\n";

//nested ternary   -- Try using the nested ternary operator wrap parentheses ().
$result = (is_integer($num)? (($num > 12)? "$num is Greater then 12": "$num is less then 12"):"Invalid number");
echo $result."\n";

//bigger number   -- Try using the nested ternary operator wrap parentheses ().   
$num1 = 45;
$num2 = 65;
$num3 = 70;
$result = (($num1 > $num2 && $num1 > $num3)? "Larger number is {$num1}":(($num2 > $num3)? "Larger number is {$num2}":"Larger number is {$num3}"));
echo $result."\n";


/*=================================================================================================
--------------------------20.1 - PHP switch Statement - simple--------------------> 
===================================================================================================*/

/******* PHP switch Statement
 *  The switch statement is similar to a series of IF statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.
 * 
 *  https://www.php.net/manual/en/control-structures.switch.php
 *  https://www.w3schools.com/php/php_switch.asp
 * 
********/
$num = rand(1,30);

//even or odd number
$r = $num % 2;
switch($r){
    case 0:
        echo "Even number\n";
    break;
    default:
    echo "Odd number\n";
}
//Multiple case in the same output 
$fruits = "apple";
switch($fruits){
    case "apple":
    case "mango":
    echo "Mango and apple both are fruits\n";
    break;
    case "orange":
        echo "Orange is good for health\n";
    break;
    default:
    echo "Please type apple,mango or orange\n";     
}
//check number or not
switch($num){
    case is_integer($num):
        echo "Number\n";
    break;
    default:
    echo "Not a number\n";
}

//bigger number  
$num1 = 45;
$num2 = 65;
$num3 = 30;
switch(true){
    case ($num1 > $num2 && $num1 > $num3):
        echo "Larger number is {$num1}\n";
    break;
    case ($num2 > $num3):
        echo "Larger number is {$num2}\n";
    break;
    default:
    echo "Larger number is {$num3}\n";
}


/*=================================================================================================
--------------------------20.2 - Nested switch Statement--------------------> 
===================================================================================================*/

/******* PHP switch Statement
 *  The switch statement is similar to a series of IF statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.
 * 
 *  https://www.php.net/manual/en/control-structures.switch.php
 *  https://www.w3schools.com/php/php_switch.asp
 * 
 ********/
$num = rand(1, 30);
//nested switch case
switch ($num) {
    case (is_integer($num)):
        switch ($num) {
            case ($num > 12):
                echo "$num is Greater then 12\n";
                break;
            case ($num < 12):
                echo "$num is Less then 12\n";
                break;
        }
        break;
    default:
        echo "Invalid number\n";
}

//nested even or odd number - (both negative or positive)
$num = -23;
$r = $num % 2;
switch ($r) {
    case 0:
        switch ($num) {
            case $num > 0:
                echo "{$num} Positive Even number\n";
                break;
            case $num<0:
                echo "{$num} Negative Even number\n";
            break;
        }
        break;
    default:
        switch ($num) {
            case $num > 0:
                echo "{$num} Positive Odd number\n";
                break;
            case $num < 0:
                echo "{$num} Negative Odd number\n";
            break;
        }
}

//even or odd number - (both negative or positive)
$num = -3;
$r = $num % 2;
switch (true) {
    case (0 == $r && $num>0):
        echo "$num is a positive even number";
    break;
    case (1 == $r && $num>0):
        echo "$num is a positive odd number";
    break;
    case (0 == $r && $num<0):
        echo "$num is a negative even number";
    break;
    case (-1 == $r && $num<0):
        echo "$num is a negative odd number";
    break;
}

echo "\n";

//even or odd number - (both negative or positive)
$num = -3;
$r = abs($num) % 2;
switch (true) {
    case (0 == $r && $num>0):
        echo "$num is a positive even number";
    break;
    case (1 == $r && $num>0):
        echo "$num is a positive odd number";
    break;
    case (0 == $r && $num<0):
        echo "$num is a negative even number";
    break;
    case (1 == $r && $num<0):
        echo "$num is a negative odd number";
    break;
}



/*=================================================================================================
--------------------------20.3 - PHP version-8 & below version-8 issue with switch case--------------------> 
===================================================================================================*/


/******* PHP version-8 & below version-8 Interesting issue with switch case
 * If PHP version 8 this example -- {RETURN: 8balls}
 * If PHP version below 8 this example -- {RETURN: 8}
 ********/

//PHP version 8 - (RETURN: 8balls) 
//Below PHP 8 version - (RETURN: 8)
$string = "8balls";
switch($string){
   case "9balls";
   echo "9balls";
   break;
   case 8;
   echo "8";
   break;
   case "8balls";
   echo "8balls";
   break;
}
echo "\n";

//PHP version 8 - (RETURN: 8balls)
//Solve: Below PHP 8 version - (RETURN: 8balls)
$string = "8balls";
switch($string){
   case (string)"9balls";
   echo "9balls";
   break;
   case (string)8;
   echo "8";
   break;
   case (string)"8balls";
   echo "8balls";
   break;
}



/*=================================================================================================
--------------------------20.4 - Alternative Syntax of switch Statement--------------------> 
===================================================================================================*/

/******* Alternative Syntax of switch Statement ********/

$string = "8balls";
switch ($string):
   case (string)"9balls";
      echo "9balls";
      break;
   case (string)8;
      echo "8";
      break;
   case (string)"8balls";
      echo "8balls";
      break;
endswitch;

echo "\n";

switch (date('D')):
   case "Sun":
      echo "Sunday";
      break;
   case "Mon":
      echo "Monday";
      break;
   case "Tue":
      echo "Tuesday";
      break;
   case "Wed":
      echo "Wednesday";
      break;
   case "Thu":
      echo "Thursday";
      break;
   case "Fri":
      echo "Friday";
      break;
   case "Sat":
      echo "Saturday";
endswitch;


/*=================================================================================================
--------------------------21 - Alternative Syntax of switch Statement--------------------> 
===================================================================================================*/

/******* Alternative Syntax of switch Statement ********/

$string = "8balls";
switch ($string):
   case (string)"9balls";
      echo "9balls";
      break;
   case (string)8;
      echo "8";
      break;
   case (string)"8balls";
      echo "8balls";
      break;
endswitch;

echo "\n";

switch (date('D')):
   case "Sun":
      echo "Sunday";
      break;
   case "Mon":
      echo "Monday";
      break;
   case "Tue":
      echo "Tuesday";
      break;
   case "Wed":
      echo "Wednesday";
      break;
   case "Thu":
      echo "Thursday";
      break;
   case "Fri":
      echo "Friday";
      break;
   case "Sat":
      echo "Saturday";
endswitch;


/*=================================================================================================
--------------------------22 - Operator Precedence in PHP--------------------> 
===================================================================================================*/

/******* Operator Precedence in PHP
 * In PHP, operator precedence determines the order in which operations are performed in an expression. Just like in mathematics, some operations are performed before others.
 * https://www.php.net/manual/en/language.operators.precedence.php
 * ********/

 $a = false || true; //this higher order operator = true
 $b = false or true; // [($b = false) or true / $b = false]
 var_dump($a,$b);
 
 $a = true && false; // //this higher order operator = false
 $b = true and false; // [($b = true) and false / $b = true]
 var_dump($a,$b);










?>