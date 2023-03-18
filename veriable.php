<?php

//..........................php_learning.......................> 


/*=============================================================================
...........................01- PHP variables....................>
================================================================================*/ 

/*
PHP variables:
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).
Rules for PHP variables:
    
-> A variable starts with the $ sign, followed by the name of the variable
-> A variable name must start with a letter or the underscore character
-> A variable name cannot start with a number
-> A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
-> Variable names are case-sensitive ($age and $AGE are two different variables)
*/

//variable define
$name = "Towfik";
//camelCase variable
$firstName = "Nadim";
//TitleCase variable
$LastName = "Hassan";
//variable with underscore
$full_name = "Rakib Khan";


/*=================================================================================================
...............................02- $$ Variable Variables....................>
====================================================================================================*/ 

/*
What does $$ ($$variable) means in PHP ?
The $x (single dollar) is the normal variable with the name x that stores any value like string, integer, float, etc. The $$x (double dollar) is a reference variable that stores the value which can be accessed by using the $ symbol before the $x value. These are called variable variables in PHP.
Variable Variables:- Variable variables are simply variables whose names are dynamically created by another variable’s value.
From the given figure below, it can be easily understood that:
-> $x stores the value "PHP" of String type.
-> Now reference variable $$x stores the value "For PHP"; in it of String type.
*/

// Declare variable and initialize it
$x = "PHP";
// Reference variable
$$x = "For PHP";

/*
So, the value of “for PHP” can be accessed in two ways which are listed below:
-> By using the Reference variable directly. Example: echo $$x;
-> By using the value stored at variable $x as a variable name for accessing the “for PHP” value. Example: echo $PHP; which will give output as “for PHP” (without quote marks).
Examples:
*/

// Display value of x
echo $x;    //output = PHP
echo "\n";

// Display value of $$x ($PHP)
echo $$x;   //output = For PHP
echo "\n";

// Display value of $PHP
echo $PHP;  //output = For PHP
echo "\n";


//===================== example 02 ===================== :
$name = "Tufik";
$$name = "Bogura";
echo "$name hasan lives in $Tufik"; //output = Tufik hasan lives in Bogura
echo "\n";

//===================== example 03 ===================== :
$age = 25;
$word = 'age';
echo $$word;    //output = 25
echo "\n";

//===================== example 04 ===================== :
// Declare variable and initialize it
$var = "PHP";
 
// Reference variable
${$var}="PHPforPHP";
 
// Use double reference variable
${${$var}}="computer science";
 
// Display the value of variable
echo $var . "\n";     //output = PHP
echo $PHP . "\n";    //output = PHPforPHP
echo $PHPforPHP . "\n"; //output = computer science
 
// Double reference
echo ${${$var}}. "\n";   //output = computer science


/*=================================================================================================
--------------------------03- Variables Scope.--------------------> 
===================================================================================================*/ 

/*
PHP Variables Scope:
In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:
-> local
-> global
-> static
*/

//============ 01- Local Scope ==========
function myLocal() {
    $x = 5; // local scope
    echo "Variable x inside function is: $x"."\n";
  }
  myLocal();
  // using x outside the function will generate an error
  echo "Variable x outside function is: $x"."\n";


//============ 02.1- Global not accessed in function ==========
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$x = 5; // global scope

function myGlobal() {
  // using x inside this function will generate an error: Undefined variable $x in
  //echo "<p>Variable x inside function is: $x</p>."\n"";
}
myGlobal();

echo "<p>Variable x outside function is: $x</p>"."\n";




//============ 02.2- PHP The global Keyword ==========
/*
The global keyword is used to access a global variable from within a function.
To do this, use the global keyword before the variables (inside the function):
*/
$x = 5;
$y = 10;

function globalKeyword() {
  global $x, $y;
  $y = $x + $y;
}

globalKeyword();
echo $y."\n"; // outputs 15

/*
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
The example above can be rewritten like this:
*/
$a = 30;
$b = 10;

function globalKeyword2() {
  $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

globalKeyword2();
echo $b."\n"; // outputs 15




//============ 03- PHP The static Keyword ==========
/*
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
To do this, use the static keyword when you first declare the variable:
*/
function varStaticScope() {
    static $s = 0;
    echo $s."\n";
    $s++;
  }
  
  varStaticScope();
  varStaticScope();
  varStaticScope();


/*===============================================================================================
--------------------------04- Mixing a PHP variable with a string literals.---> 
==================================================================================================*/

/*
Mixing a PHP variable with a string literals
*/
$firstName = "Tufik";
$lastName = "Hasan";
$age = 25;

echo "My firstname is".$firstName;  //output = My firstname isTufik
echo "\n";

echo "My age is ".$age;  //output = My age is 25
echo "\n";

echo "My lastname is"." ".$lastName;  //output = My lastname is Hasan
echo "\n";

//Variable values are not shown in string when using single quotation
echo 'My name is $firstName';  //output = My firstname is $firstName
echo "\n";

//Variables can be shown in strings using double quotation
echo "My name is $firstName";  //output = My firstname is Tufik
echo "\n";

//use curly brackets in php string literals
$var = "way";
echo "Two {$var} to define a variable in a string.";    //output = Two way to define a variable in a string.
echo "\n";
echo "Two {$var}s to define a variable in a string.";   //output = Two ways to define a variable in a string.
echo "\n";

echo "My full name is {$firstName} {$lastName}";    //output = My full name is Tufik Hasan





/*===============================================================================================
--------------------------5.PHP variable mutable---> 
==================================================================================================*/


/*
PHP variable mutable:
In PHP, a variable is considered mutable if its value can be changed or altered after it has been initially assigned. This means that the value stored in the variable can be modified or reassigned at any point during the execution of a program. For example, the value of a mutable variable can be changed through assignment statements, increment/decrement operations, or by being passed as an argument to a function that modifies its value.
*/
$firstName = "Tufik";
echo $firstName;
echo "\n";
$firstName = "Towfik hasan";
echo $firstName,"\n";



$a = 5;  // initial assignment
$a = 10; // reassigning the value of $a
echo $a,"\n";

$b = 7;
$b += 3; // changing the value of $b by incrementing it
echo $b,"\n";

$c = 20;
$c--;    // changing the value of $c by decrementing it
echo $c,"\n";

$d = 15;
$d = $d + 5; // changing the value of $d through an expression
echo $d,"\n";

$e = "hello";
$e .= " world"; // changing the value of $e by concatenation
echo $e,"\n";



/*===============================================================================================
--------------------------06- define() -> Constants are immutable.---------> 
==================================================================================================*/

/*
PHP Constants are immutable:
In PHP, constants are considered immutable, which means that their values cannot be changed once they have been defined. Once a constant is defined using the define() function or the const keyword, its value remains the same throughout the execution of the program. Attempting to change the value of a constant will result in a runtime error.
Constants are typically used to store values that are used throughout a program, such as configuration settings, commonly used values, or other values that are meant to remain constant. By using constants instead of variables, you can ensure that their values remain unchanged, providing a more predictable and secure environment for your code.
######### For example: ##########
define("MY_CONSTANT", "Hello, world!");
echo MY_CONSTANT; // outputs "Hello, world!"
// Attempting to change the value of a constant will result in an error:
// MY_CONSTANT = "Goodbye, world!"; // Causes a fatal error
********** To create a constant, use the define() ************
Syntax: define(name, value, case-insensitive)  //Argument #3 is ignored since declaration of case-insensitive constants is no longer supported as of PHP 8.0.0
Parameters:
-> name: Specifies the name of the constant
-> value: Specifies the value of the constant
-> case-insensitive: Defining case-insensitive constants is deprecated as of PHP 7.3.0. As of PHP 8.0.0, only false is an acceptable value, passing true will produce a warning.
*/

//Argument #3 is ignored since declaration of case-insensitive constants is no longer supported as of PHP 8.0.0
// define("NAME","Tufik Hasan",true);

define("NAME","Tufik Hasan");
echo NAME;
echo "\n";

define("PI",3.14159);
//show constant value
echo PI;  //output = 3.14159
echo "\n";


//show constant value
echo constant("PI");  //output = 3.14159
echo "\n";


//constants cannot be directly embedded in string literals
echo "The PI value is PI ";  //output = The PI value is PI
echo "\n";

//constants cannot be directly embedded in string literals
echo "The PI value is {PI}";  //output = The PI value is {PI}
echo "\n";

//Using concatenation:
echo "The PI value is: ".PI;  //output = The PI value is {PI}: 3.14159
echo "\n";


//tricks to show define constant value in string
$constant = 'constant';
echo "The PI value is {$constant("PI")}\n";   //output = The PI value is 3.14159
echo "The PI value is {$constant("PI")}";   //output = The PI value is 3.14159







/*===============================================================================================
--------------------------07- PHP Data Types.------------------------> 
==================================================================================================*/

/*
PHP Data types:
Variables can store data of different types, and different data types can do different things.
01: Scalar:
    -> String
    -> Integer Int
    -> Float / Double (floating point numbers - also called double)
    -> Boolean
02: Compound:
    -> Array
    -> Object
03: Special:
    -> NULL
    -> Resource
*/

//String
$name = "Tufik";
var_dump($name);

//Integer Int
$integer = 2023;
var_dump($integer);

//Float / Double
$floatOrDouble = 10.5;
var_dump($floatOrDouble);

//Float / Double
$bool = true;
var_dump($bool);

//Array
$arr = array("mango","orange","apple");
var_dump($arr);

//Object
class Student{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function message(){
        return "My name is a $this->name & i am ".$this->age."\n";
    }
}
$student = new Student("Tufik",25);
echo $student->message();


//Null
$nullData = null;
var_dump($nullData);


/****** Resources ******
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
A common example of using the resource data type is a database call.
We will not talk about the resource type here, since it is an advanced topic.
*/






/*===============================================================================================
--------------------------08- PHP some line breaks.----------------------> 
==================================================================================================*/

/*
PHP line break:
*/
//01: \r\n -- Newline characters \r\n can be used to create a new line inside the source code.
echo "Tufik " ."\r\n"."Loves Programming\r\n";
//02: \n -- Newline characters \n can be used to create a new line inside the source code.
echo "Tufik " ."\n"."Loves Programming\n";
//03: PHP_EOL -- representing a line break in a platform-independent way.
echo "Tufik " .PHP_EOL."Loves Programming".PHP_EOL;
//04: <br> -- The <br> tag in HTML is used to give the single line break. It is an empty tag, so it does not contain an end tag.
echo "Tufik ". "<br>". "Loves Programming\n";

/*
05: nl2br() -- is a PHP function that converts newline characters (line breaks) to HTML line break elements <br> in a string. It is used to format plain text into HTML-formatted text by preserving line breaks, which would otherwise be ignored by HTML. The nl2br function can be useful for displaying the contents of a textarea form input or the output of a text-based file in an HTML page.
*/
$text = "This is line 1.\nThis is line 2.";
echo nl2br($text);





/*===============================================================================================
--------------------------09- PHP all output system.------------------> 
==================================================================================================*/
/*
====== 01: Print ===========
-> has a return value of 1
-> can take one argument
-> echo is marginally faster than print
-> print statement can be used with or without parentheses: print or print().
*/
$name = "Tufik";
//print statement can be used with or without parentheses: print or print().
print $name;		//output = Tufik
print("\n");
print($name."\n");	//output = Tufik

/*
====== 02: Echo ===========
-> has no return value
-> can take multiple parameters (although such usage is rare)
-> echo is marginally faster than print
-> echo statement can be used with or without parentheses: echo or echo().
*/
$name2 = "Rakib";

//echo statement can be used with or without parentheses: echo or echo().
echo $name2;		//output = Rakib
echo("\n");

echo($name2."\n");	//output = Rakib

//whitespace in echo
$fName = "Tufik";
$lName = "Hasan";
echo "His
name is
{$fName} {$lName},\n
He live in Bogra\n"; 


/*
====== 03: var_dump() ===========
The var_dump() function is used to dump information about a variable. This function displays structured information such as type and value of the given variable.
Arrays and objects are explored recursively with values indented to show structure. This function is also effective with expressions.
*/
$name3 = "Hasan";
$bool = true;


var_dump($name3);	//output = string(5) "Hasan"
echo "\n";
//var_dump() function dumps information about one or more variables.
var_dump($name3,$bool); //output = string(5) "Hasan"  bool(true)


/*
====== 04: printf() ===========
-> https://www.php.net/printf
The printf() function outputs a formatted string.
The arg1, arg2, ++ parameters will be inserted at percent (%) signs in the main string. This function works "step-by-step". At the first % sign, arg1 is inserted, at the second % sign, arg2 is inserted, etc.
Note: If there are more % signs than arguments, you must use placeholders. A placeholder is inserted after the % sign, and consists of the argument- number and "\$". See example two.
Tip: Related functions: sprintf(), vprintf(), vsprintf(), fprintf() and vfprintf()
*/
$fName = "Tufik";
$lName = "Hasan";
$age = 25;

printf("My name is %s",strtoupper($fName));//output = My name is TUFIK
echo PHP_EOL;

printf("His fast name %s and last name is %s",$fName,$lName);//output = His fast name Tufik and last name is Hasan
echo("\n");

printf("My %s name %s %s and my age is %u","full",$fName,$lName,$age);//output = My full name Tufik Hasan and my age is 25
echo PHP_EOL;

printf("My %s name %s %s and my age is %f","full",$fName,$lName,$age);//output = My full name Tufik Hasan and my age is 25.000000
echo("\n");

printf("My name is %s",$fName,$lName);//output = My name is Tufik
echo PHP_EOL; 

//this will show Fatal error: Uncaught ArgumentCountError
printf("My name is %s %s",$fName);







/*===============================================================================================
--------------------------10.1- printf().---------------------> 
==================================================================================================*/

/*
====== A deep dive into printf() ===========
-> https://www.php.net/printf
-> https://www.w3schools.com/php/func_string_printf.asp
*/
$fName = "Tufik";
$lName = "Hasan";
$age = 25;

printf("My firstname %s & lastname %s",$fName,$lName);
echo("\n");

//swapping arguments variables- using single quotation
printf('My name is %2$s %1$s',$fName,$lName);
echo("\n");
printf('My %3$s name is %2$s %1$s',$fName,$lName,"full");

/*
//If use double quotation = Fatal error: Uncaught ValueError: Unknown format specifier " "
printf("My name is %2$s %1$s",$fName,$lName);
*/






/*===============================================================================================
--------------------------10.2- printf some magic.------------------> 
==================================================================================================*/

/*
====== A deep dive into printf() ===========
-> https://www.php.net/printf
-> https://www.w3schools.com/php/func_string_printf.asp
*/
$fName = "Tufik";
$lName = "Hasan";
$age = 25;

//swapping
printf('My name is %2$s %1$s',$fName,$lName);
echo("\n\n");

//same argument print multiple time
printf('Decimal = %1$d, Binary = %1$b',$age);
echo("\n\n");


// decimal print
$n = 25.154;
printf('%.2f',$n);
echo("\n");

$n = 25.15664;
printf('%.3f',$n);
echo("\n\n");

// padding 5
$n = 123;
$m = 78;
printf("%05d \n",$n);
printf("%05d \n",$m);

echo("\n");

//0 padding with decimal
$n = 123.34;
$m = 78.56;
printf("%07.2f \n",$n);
printf("%07.2f \n",$m);



/*===============================================================================================
--------------------------11 - sprintf() — Return a formatted string------------------> 
==================================================================================================*/

/*
====== sprintf() — Return a formatted string ===========
-> https://www.php.net/manual/en/function.sprintf.php
-> https://www.w3schools.com/php/func_string_sprintf.asp
In PHP, sprintf is a built-in function that formats a string and returns it as a result. The function takes a format string as its first argument, followed by one or more arguments that provide values to be formatted according to the specified format. The result of the function is a formatted string.
*/
$name = "John";
$age = 30;
$result = sprintf("My name is %s and I am %d years old.", $name, $age); 
echo $result;   // Output: "My name is John and I am 30 years old."

/*
In the above example, '%s' represents a string placeholder, and '%d' represents an integer placeholder. The values of '$name' and '$age' are inserted into the format string and the result is stored in the '$result' variable.
*/






























?>