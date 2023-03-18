<?php
//-----------PHP - functions---> 

/*=================================================================================================
--------------------------27 - Functions and how to write them--------------------> 
===================================================================================================*/

/* What are functions and how to write them
 * In PHP, a function is a block of code that can be reused multiple times in a program. Functions are defined using the "function" keyword, followed by a function name and a set of parentheses that may include parameters. Functions can optionally return a value to the calling code using the "return" statement.
 *
 * https://www.w3schools.com/php/php_functions.asp
 * https://www.php.net/manual/en/functions.user-defined.php
 */

//************** even number check function **************

//01: simple function
function isEvenOrOdd( $num ) {
    if ( $num % 2 == 0 ) {
        echo "$num is an Even";
    } else {
        echo "$num is an Odd";
    }
}
isEvenOrOdd( 3 );

echo PHP_EOL;

//02: Reuseable function
function EvenOrOdd( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    } else {
        return false;
    }
}
$x = 5;
if ( EvenOrOdd( $x ) ) {
    echo "{$x} is an Even number";
} else {
    echo "{$x} is an Odd number";
}

echo PHP_EOL;

//03: Reuseable function - WHEN return don't need to use else statement
function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}
$x = 8;
if ( isEven( $x ) ) {
    echo "{$x} is an Even number";
} else {
    echo "{$x} is an Odd number";
}

/*=================================================================================================
--------------------------28 - include_once - embed PHP code from another file--------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------29 - DocBlock - php--------------------> 
===================================================================================================*/




/*=================================================================================================
--------------------------30 - Type hinting or type checking of function parameters--------------------> 
===================================================================================================*/

/* ********************* Type hinting or type checking of function parameters ************
 *
Type hinting in PHP refers to specifying the type of a parameter that a function or method is expected to receive. This allows for improved error checking and code readability.
Default parameters in PHP refer to the values that are assigned to function or method parameters in case no value is passed for those parameters when the function is called. This helps to provide a fallback value for the parameter in case it is not specified, and can also simplify the function call.
 *
 * https://stackoverflow.com/questions/8522984/type-hinting-default-parameters
 * https://www.php.net/manual/en/language.types.declarations.php
 * https://www.geeksforgeeks.org/explain-type-hinting-in-php/
 */

//01: simple factorial function
function factorial( $num ) {
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}

// function factorial( $num ) {
//     $result = 1;
//     for ( $i = 1; $i <= $num; $i++ ) {
//         echo $i . "\n";
//         $result *= $i;
//     }
//     return $result;
// }

$x = 5;
echo "Factorial of {$x} is = " . factorial( $x ) . "\n";

//02: Manually check parameter type validation
function factorial2( $num ) {
    if ( gettype( $num ) != "integer" ) {
        return "Invalid";
    }
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}
$x = "5";
echo "Factorial of {$x} is = " . factorial2( $x ) . "\n";

//03: Check parameter type validation using php build in features. This is coming from PHP version 7
function factorial3( int $num ) {
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}
$x = "5";
echo "Factorial of {$x} is = " . factorial3( $x ) . "\n";
//return fatal error
$x = "name";
echo "Factorial of {$x} is = " . factorial3( $x ) . "\n";


/*=================================================================================================
--------------------------31 - Default value of function parameter or optional parameter--------------------> 
===================================================================================================*/


/* ********************* Default value of function parameter or optional parameter ************
 *
In PHP, default values for function parameters can be specified by assigning a value to the parameter in the function definition. If a value for the parameter is not provided when the function is called, the default value will be used instead.
 *
 * https://www.geeksforgeeks.org/how-to-create-optional-arguments-in-php/
 * https://www.php.net/manual/en/functions.arguments.php
 *
 */

//01: With out default value
function gamePlay( $name, $game ) {
    echo "{$name} is playing {$game}\n";
}
gamePlay( "Karim", "football" ); // Karim is playing football
// gamePlay(); //Fatal error
// gamePlay( "Karim" ); //Fatal error

//02: With default value
function makeFood( $name = "Coffee", $qty = "1 cup" ) {
    echo "Make {$qty} of {$name}\n";
};
makeFood(); //Make 1 cup of Coffee
makeFood( "Tea", "2 cups" ); //Make 2 cups of Tea
makeFood( "Mango Juice" ); //Make 1 cup of Mango Juice
makeFood( "2 cups" ); //Make 1 cup of 2 cups

/*=================================================================================================
--------------------------32 - PHP 8: named arguments--------------------> 
===================================================================================================*/

/* PHP 8: named arguments
 *
 * Named arguments is a feature that was introduced in PHP 8, which allows you to specify the arguments in a function call by name, rather than relying on the order in which they are defined in the function signature.
 *
 *
 * https://www.php.net/manual/en/functions.arguments.php
 * https://www.w3schools.com/php/php_looping_foreach.asp
 */

//01:
function printName( $firstName, $lastName ) {
    echo "Hello ! {$firstName} {$lastName}\n";
}
printName( lastName:"Sabbir", firstName:"Ahammed" );

echo "\n";

//02:
function printName2( $firstName = "Rakib", $lastName = "khan" ) {
    echo "Hello ! {$firstName} {$lastName}\n";
}
printName2( lastName:"Sheikh", );
printName2( lastName:"Hasan", firstName:"Tufik" );

echo "\n";

//03:
function printName3( $firstName = "Rakib", $lastName = "khan" ) {
    echo "Hello ! {$firstName} {$lastName}\n";
}
printName2( $lastName = "Sheikh", );
printName2( $lastName = "Hasan", $firstName = "Tufik" );


/*=================================================================================================
--------------------------33 - "func_get_args" & "func_num_args"--------------------> 
===================================================================================================*/


/* PHP: "func_get_args" & "func_num_args"
 *
 * In PHP, "func_get_args" and "func_num_args" are both functions that provide information about the arguments passed to a function.
 * In summary, "func_get_args" returns an array of all the arguments passed to a function, while "func_num_args" returns the number of arguments passed to a function. Both of these functions can be useful for writing functions that can handle a varying number of arguments.
 *
 * https://www.php.net/manual/en/functions.arguments.php
 * https://www.w3schools.com/php/php_looping_foreach.asp
 */

//------------------------------ "func_get_args" ---------------------------
// "func_get_args" is a function that returns an array of all the arguments passed to a function. This array can be accessed and manipulated like any other array in PHP.
function example() {
    $arguments = func_get_args();
    print_r( $arguments );
}

example( "apple", "banana", "cherry" );

echo "\n";

//------------------------------ "func_num_args" ---------------------------
// "func_num_args" is a function that returns the number of arguments passed to a function. This can be useful when you want to check how many arguments were passed to a function and take different actions based on that number.
function example2() {
    $num_args = func_num_args();
    echo "Number of arguments: $num_args";
}

example2( "apple", "banana", "cherry" );

/*=================================================================================================
--------------------------34 - Fixing function return type--------------------> 
===================================================================================================*/


/* ********************* Fixing function return type ************
 *
In PHP, the return type of a function specifies the type of value that the function returns. It can be used to enforce type safety and improve code readability.
The return type of a function is specified using the ':' operator, followed by the type name, before the opening brace '{' of the function body.
 *
 * https://www.php.net/manual/en/functions.returning-values.php
 *
 */

//01:
function sum( $x, $y ): int {
    return $x + $y;
}
echo sum( 2, 3 ) . "\n";

//03:
function gamePlay( $name, $game ): string {
    return "{$name} is playing {$game}\n";
}
echo gamePlay( "Karim", "football" ); // Karim is playing football

//02: Fatal error-> Uncaught TypeError: sub(): Return value must be of type int
function sub( $x, $y ): int {
    return "ABC";
}
echo sub( 2, 3 ) . "\n";

/*=================================================================================================
--------------------------35 - Accepting Unlimited Arguments in Functions--------------------> 
===================================================================================================*/

/* ********************* Accepting Unlimited Arguments in Functions ************
 *
The spread operator (also known as the splat operator) in PHP is denoted by '...', and is used to unpack arrays and Traversable objects into individual elements as function arguments.
The spread operator allows you to pass an array or a Traversable object as separate arguments to a function, instead of passing the entire array or object as a single argument.
 *
 * https://www.php.net/manual/en/migration56.new-features.php
 *
 */

//01:
function addNumbers( int...$numbers ) {
    $sum = 0;
    foreach ( $numbers as $number ) {
        $sum += $number;
    }
    return $sum;
}

$result = addNumbers( 1, 2, 3, 4, 5 );
var_dump( $result ); // Output: int(15)

//02:
function sum( int...$num ): int {
    $result = 0;
    for ( $i = 0; $i < count( $num ); $i++ ) {
        $result += $num[$i];
    }
    return $result;
}
echo sum( 1, 2, 3, 4 ) . "\n";

//02:
function sum2( $a, $b, int...$num ): int {
    $result = 0;
    for ( $i = 0; $i < count( $num ); $i++ ) {
        $result += $num[$i];
    }
    return $result;
}
echo sum2( 5, 6, 1, 2, 3, 4 ) . "\n";


/*=================================================================================================
--------------------------36 - Dividing a large function into smaller functions--------------------> 
===================================================================================================*/

/* ********************* Dividing a large function into smaller functions */

//01: larger function
function largeFunction() {
    echo ( 2 + 3 ) . "\n";
    echo ( 6 - 3 ) . "\n";
    echo ( 2 * 3 ) . "\n";
    echo ( 6 / 3 ) . "\n";
}
largeFunction();

echo PHP_EOL;

//02: divided large function into smaller function
function sum() {
    echo ( 2 + 3 ) . "\n";
}
function sub() {
    echo ( 6 - 3 ) . "\n";
}
function multiplication() {
    echo ( 2 * 3 ) . "\n";
}
function division() {
    echo ( 6 / 3 ) . "\n";
}

function dividedLargeFun() {
    sum();
    sub();
    multiplication();
    division();
}
dividedLargeFun();


/*=================================================================================================
--------------------------37 - Recursion and Recursive Functions--------------------> 
===================================================================================================*/


/* ********************* Recursion and Recursive Functions
 *
Recursion is a technique in computer programming where a function calls itself in order to solve a problem. It is a powerful tool that allows a programmer to break down a complex problem into smaller, manageable sub-problems.
A recursive function is a function that calls itself in order to solve a problem. The function repeatedly calls itself, each time with a simplified version of the original problem, until the problem can be solved without recursion. At this point, the function returns the solution to the original problem.
In PHP, a recursive function can be defined just like any other function. The only difference is that the function calls itself as part of its logic.
 *
 * https://www.geeksforgeeks.org/anonymous-recursive-function-in-php/
 */

//01:
function numberPrint( $n ) {
    if ( $n >= 10 ) {
        return;
    }
    echo $n . "\n";
    $n++;
    numberPrint( $n );
}
numberPrint( 5 );

echo PHP_EOL;

//02:
function numberPrintReversed( $n ) {
    if ( $n <= 0 ) {
        return;
    }
    echo $n . "\n";
    $n--;
    numberPrintReversed( $n );
}
numberPrintReversed( 5 );

echo PHP_EOL;

//03:
function numPrint( $start, $end ) {
    if ( $start > $end ) {
        return;
    }
    echo $start . "\n";
    $start++;
    numPrint( $start, $end );
}
numPrint( 1, 10 );

echo PHP_EOL;

//04:
function numPrint2( int $start, int $end, int $stepping = 1 ) {
    if ( $start > $end ) {
        return;
    }
    echo $start . "\n";
    $start += $stepping;
    numPrint2( $start, $end, $stepping );
}
numPrint2( 1, 10, 2 );

/*=================================================================================================
--------------------------38 - Printing Fibonacci Series Using Recursive Functions--------------------> 
===================================================================================================*/


/* ********************* Printing Fibonacci Series Using Recursive Functions */

//01:
function fibonacci( $old, $new, $start, $end ) {
    if ( $start > $end ) {
        return;
    }

    $start++;

    echo $old . ", ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci( $old, $new, $start, $end );

}
fibonacci( 0, 1, 1, 10 );

echo PHP_EOL;

//02:
function fibonacci2( $old, $new, $end ) {
    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }

    $start++;

    echo $old . ", ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci2( $old, $new, $end );

}
fibonacci2( 0, 1, 10 );

/*=================================================================================================
--------------------------39 - Factorial functions--------------------> 
===================================================================================================*/

/* ********************* Type hinting or type checking of function parameters ************
 *
Type hinting in PHP refers to specifying the type of a parameter that a function or method is expected to receive. This allows for improved error checking and code readability.
Default parameters in PHP refer to the values that are assigned to function or method parameters in case no value is passed for those parameters when the function is called. This helps to provide a fallback value for the parameter in case it is not specified, and can also simplify the function call.
 *
 * https://stackoverflow.com/questions/8522984/type-hinting-default-parameters
 * https://www.php.net/manual/en/language.types.declarations.php
 * https://www.geeksforgeeks.org/explain-type-hinting-in-php/
 */

//01: simple factorial function
function factorial( $num ) {
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}

// function factorial( $num ) {
//     $result = 1;
//     for ( $i = 1; $i <= $num; $i++ ) {
//         echo $i . "\n";
//         $result *= $i;
//     }
//     return $result;
// }

$x = 5;
echo "Factorial of {$x} is = " . factorial( $x ) . "\n";

//02: Manually check parameter type validation
function factorial2( $num ) {
    if ( gettype( $num ) != "integer" ) {
        return "Invalid";
    }
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}
$x = "5";
echo "Factorial of {$x} is = " . factorial2( $x ) . "\n";

//03: Check parameter type validation using php build in features. This is coming from PHP version 7
function factorial3( int $num ) {
    $result = 1;
    for ( $i = $num; $i > 0; $i-- ) {
        $result *= $i;
    }
    return $result;
}
$x = "5";
echo "Factorial of {$x} is = " . factorial3( $x ) . "\n";
//return fatal error
$x = "name";
echo "Factorial of {$x} is = " . factorial3( $x ) . "\n";


/*=================================================================================================
--------------------------40 - Variable Scope in PHP Function--------------------> 
===================================================================================================*/


/* ********************* Variable Scope in PHP Function
 *
In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:
 *
 * https://github.com/tufikhasan/php_learning/blob/b5b78ea3b65987a3f2a202cd5dd24d0ce1938582/index.php
 *
-> local
-> global
-> static
 */

//================ Global scope ======================
$name = "Tufik Hasan";
//01:
// function myName1() {
//     echo $name; //you cannot access global variable inside a function return error
// }
// myName1();

//02:
function myName2() {
    global $name;
    echo $name . "\n"; //you can access global variable inside a function using GLOBAL KEYWORD
}
myName2();

//03:
function myName3() {
    echo $GLOBALS['name'] . "\n"; //you can access global variable inside a function using $GLOBALS[] array
}
myName3();

//================ Local scope ======================
//01:
function localScope() {
    $fruit = "mango";
    echo $fruit . "\n";
}
localScope();
//echo $fruit; //you cannot access local variable outside a function return error

//01:
function localScope2() {
    global $fruit;
    $fruit = "mango";
    echo $fruit . "\n";
}
localScope2();
echo $fruit . "\n"; //you can access local variable outside a function using GLOBAL KEYWORD

//================ Static scope ======================
function numIncrement() {
    static $i;
    $i++;
    echo $i . "\n";
}
// echo $i . "\n"; //you can access return Undefined variable

function doExtra() {
    static $i;
    $i++;
    echo $i . "\n";
}

numIncrement();
numIncrement();
doExtra();
numIncrement();
doExtra();
numIncrement();




/*=================================================================================================
-------41 - Variable function - function name to be stored in a variable---------------------------------------> 
===================================================================================================*/

/* Variable, Anonymous, Callable, Closure & Arrow Functions In PHP
 *
In PHP, a variable function refers to the ability of a function name to be stored in a variable, just like any other value. This allows the function to be dynamically called based on the value stored in the variable.
 */

//========================= Variable function =====================

//01: function store in variable
function sum( int | float...$numbers ): int | float {
    return array_sum( $numbers );
}
$a = "sum";
echo $a( 1, 2, 3, 4 ) . "\n";

//Call the function if callable otherwise throw a message function not callable
$b = "sub";
if ( is_callable( $b ) ) {
    echo $b( 1, 2, 3, 4 ) . "\n";
} else {
    echo "This function not callable\n";
}



/*=================================================================================================
----------42 - Anonymous, Closure, callback, Functions In PHP------------------------------------> 
===================================================================================================*/

/* ****** Anonymous, Closure, callback, Functions In PHP *******
 *
 * In PHP, anonymous functions, also known as closures, can be used as both callbacks and stored in variables.
 * As a callback, an anonymous function can be passed as an argument to another function to be executed at a later time.
 * Anonymous functions, also known as closures
 *
 * https://www.php.net/manual/en/functions.anonymous.php
 */

//----------------- Anonymous function syntax ----------
function () {
    #This anonymous function. Anonymous always end with semi-colon.
};

//-------------- Function stored in variable -------------
$sum = function ( ...$numbers ) {
    //"array_sum" in PHP is a built-in function that calculates the sum of values in an array.
    return array_sum( $numbers );
};
echo $sum( 1, 2, 3, 4 ) . PHP_EOL;

//----------------- USE keyword -----------------
//In PHP, anonymous functions can be defined using the use keyword. The use keyword allows you to capture variables from the surrounding scope and use them within the anonymous function.

//Here is an example of using the use keyword with an anonymous function in PHP:
//01:
$name = 'John Doe';
$greet = function () use ( $name ) {
    return "Hello, $name";
};

echo $greet() . PHP_EOL; // Outputs Hello, John Doe

//02: You can updated $x value only inside function
$x = 1;
$fun = function () use ( $x ) {
    $x++;
    return "Updated only inside x = $x" . PHP_EOL;
};
echo $fun();
echo "Not updated outside x = $x " . PHP_EOL;

//03: USE [&] sign - for updating main $a value
$a = 1;
$fun = function () use ( &$a ) {
    $a++;
    return "Updated inside a = $a" . PHP_EOL;
};
echo $fun();
echo "Updated outside a = $a " . PHP_EOL;

//-------------- Callbacks examples ------------
$numbers = [1, 2, 3, 4, 5];

//01:
$numDouble = array_map( function ( $number ) {
    return $number * 2;
}, $numbers );

print_r( $numDouble );

//02:
$callBack = function ( $element ) {
    return $element * 2;
};

$doubledNumbers = array_map( $callBack, $numbers );
print_r( $doubledNumbers );

//03:
function dNum( $element ) {
    return $element * 2;
};

$numberDouble = array_map( "dNum", $numbers );
print_r( $numberDouble );


/*=================================================================================================
------43 - Arrow Functions In PHP---------------------------------------> 
===================================================================================================*/

/* ****** Arrow Functions In PHP *******
 *
 * The "fn" keyword is used to create arrow functions. Arrow functions are only available in PHP versions 7.4 and up.
 * Arrow functions have access to all variables from the scope in which they were created.
 * Arrow functions, also known as "short closure" syntax, is a shorthand way to define anonymous functions in PHP. Arrow functions were introduced in PHP 7.4, and provide a concise and more readable syntax for defining anonymous functions.
 * Arrow function syntax specially use for a inline callback function
 *
 * https://www.php.net/manual/en/functions.arrow.php
 * https://www.w3schools.com/php/keyword_fn.asp
 */

//----------------- Arrow function syntax ----------
// fn(arguments) => expression to be returned;
fn( $element ) => $element;

//----------------- Arrow function examples -----------------
//01
$name = 'John Doe';
$greet = fn() => "Hello, $name";
echo $greet() . PHP_EOL; // Outputs Hello, John Doe

//02:
$myName = fn( $x ) => $x;
echo $myName( "Tufik Hasan" ) . PHP_EOL;

//03:
$array = array( 1, 2, 3, 4 );
$array2 = array_map( fn( $num ) => $num * 2, $array );
print_r( $array2 );

//04:
$x = 2;
$arr = array( 1, 2, 3, 4 );
$arr2 = array_map( fn( $num ) => $num + $x, $arr );
print_r( $arr2 );




?>