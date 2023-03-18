<?php
//------PHP - Loops (for,foreach,while,do-while)---> 



/*=================================================================================================
--------------------------23 - Introduction PHP all loops--------------------> 
===================================================================================================*/

/* PHP Loops
 * Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.
 * Loops are used to execute the same block of code again and again, as long as a certain condition is true.
 * In PHP, there are four types of loops:
01: for loop - used to repeat a block of code a specified number of times.
02: while loop - used to repeat a block of code while a certain condition is true.
03: do...while loop - similar to while loop, but the code block is executed at least once and then the condition is checked.
04: foreach loop - used to loop through arrays and objects and access their values.
Each of these loops has its own syntax and usage, and you can choose the appropriate loop for your needs based on the type of iteration you want to perform.
 */
//01: for loop
for ( $i = 0; $i < 5; $i += 1 ) {
    echo $i . " For loop\n";
}

echo PHP_EOL;

//02: while loop
$i = 0;
while ( $i < 5 ) {
    echo $i . " While loop\n";
    $i += 1;
}

echo PHP_EOL;

//03: while loop
$i = 1;
do {
    echo $i . " do loop\n";
    $i += 1;
} while ( $i < 5 );

echo PHP_EOL;

$i = 10;
do {
    echo $i . " do loop\n";
    $i += 1;
} while ( $i < 10 );

echo PHP_EOL;

//04: foreach loop
$countries = array( "Bangladesh", "India", "China", "Japan" );
foreach ( $countries as $country ) {
    echo $country . "\n";
}


/*=================================================================================================
--------------------------23.1.1 - for loop - understanding--------------------> 
===================================================================================================*/



/*=================================================================================================
--------------------------23.1.2 - for loop Multiple Stepping--------------------> 
===================================================================================================*/

/* For loop Multiple Stepping*/

//01:
for ( $i = 1, $j = 2; $i < 10; $i += 2, $j += 2 ) {
    echo "Odd number is {$i} and even number is {$j}\n";
}

echo "\n\n";

//02:
for ( $i = 10, $j = 1; $i > 0; $i--, $j++ ) {
    echo $i . "-" . $j . "\n";
}

echo "\n\n";

//03:
for ( $i = 0, $j = 0; $i < 100, $j < 100; $i += 7, $j += 11 ) {
    echo "I = {$i} and J = {$j}\n";
}

/*=================================================================================================
--------------------------23.2 - While loop--------------------> 
===================================================================================================*/

/* PHP While loop
 * The "while" loop in PHP is used to execute a block of code repeatedly as long as a certain condition is met.
 * The condition in the parentheses is evaluated before each iteration of the loop. If the condition is true, the code inside the loop is executed. Once the condition becomes false, the loop will terminate and the program will continue with the next line of code after the loop.
 * https://www.php.net/manual/en/control-structures.while.php
 * https://www.w3schools.com/php/php_looping_while.asp
 */
//01:
$i = 0;
while ( $i < 5 ) {
    echo $i . "\n";
    $i++;
}

//02:
echo "\nLoop reverse 5 to 1\n";
$i = 5;
while ( $i > 0 ) {
    echo $i . "\n";
    $i--;
}

//03:
echo "\n==============\n";
$i = 0;
while ( $i++ < 5 ) {
    echo $i . "\n";
}

//03:
echo "\n==============\n";
$i = 0;
while ( ++$i < 5 ) {
    echo $i . "\n";
}

//03: Break - when i value is equal 2 break ends execution of the current structure
echo "\n\nBreak loop if number is 2\n";
$i = 0;
while ( $i < 5 ) {
    if ( 2 == $i ) {
        break;
    }
    echo $i . "\n";
    $i++;

}

//05: Continue - skip the current iteration of the loop and continue with the next iteration
echo "\nSkip even number and continue loop\n";
$i = 1;
while ( $i < 10 ) {
    if ( $i % 2 == 0 ) {
        $i++;
        continue;
    }
    echo $i . "\n";
    $i++;

}



/*=================================================================================================
--------------------------23.3 - Do While loop-------------------> 
===================================================================================================*/

/* PHP Do While loop
 * The do...while loop in PHP is a control structure that allows you to execute a block of code repeatedly, as long as the specified condition is true. Unlike the while loop, the do...while loop is guaranteed to execute at least once, since the condition is only checked at the end of each iteration.
 * Where condition is a boolean expression that determines whether to continue or end the loop. The code inside the loop will be executed, and then the condition will be evaluated. If the condition is true, the loop will repeat; if the condition is false, the loop will terminate.
 * https://www.php.net/manual/en/control-structures.do.while.php
 * https://www.w3schools.com/php/php_looping_do_while.asp
 */
//01:
$i = 0;
do {
    echo $i . "\n";
    $i++;
} while ( $i < 5 );

//02:
echo "\nLoop reverse 5 to 1\n";
$i = 5;
do {
    echo $i . "\n";
    $i--;
} while ( $i > 0 );

//03:
echo "\n==============\n";
$i = 10;
do {
    echo $i . "\n";
    $i++;
} while ( $i < 5 );




/*=================================================================================================
--------------------------23.4.1 - foreach loop--------------------> 
===================================================================================================*/

/* PHP Foreach loop
 * The foreach loop in PHP is a control structure that allows you to iterate over arrays and objects, and execute a block of code for each element in the array or object.
 * Where condition is a boolean expression that determines whether to continue or end the loop. The code inside the loop will be executed, and then the condition will be evaluated. If the condition is true, the loop will repeat; if the condition is false, the loop will terminate.
 * https://www.php.net/manual/en/control-structures.foreach.php
 * https://www.w3schools.com/php/php_looping_foreach.asp
 */
//01:
$colors = array( "red", "green", "blue", "yellow" );

foreach ( $colors as $value ) {
    echo "{$value}\n";
}

echo "\n";

//02:
$age = array( "Peter" => "35", "Ben" => "37", "Joe" => "43" );

foreach ( $age as $x => $val ) {
    echo "My name is {$x}. I am $val years old\n";
}

/*=================================================================================================
--------------------------23.4.2 - foreach loop access both the key and the value--------------------> 
===================================================================================================*/

/* PHP Foreach loop
 * The foreach loop in PHP is a control structure that allows you to iterate over arrays and objects, and execute a block of code for each element in the array or object.
 * Where condition is a boolean expression that determines whether to continue or end the loop. The code inside the loop will be executed, and then the condition will be evaluated. If the condition is true, the loop will repeat; if the condition is false, the loop will terminate.
 * https://www.php.net/manual/en/control-structures.foreach.php
 * https://www.w3schools.com/php/php_looping_foreach.asp
 */

//01: In PHP, you can use the foreach loop to iterate over arrays and objects and access both the key and the value of each element.
$students = [
    "name"    => "Tufik",
    "age"     => 25,
    "address" => "Bogura",
];
foreach ( $students as $key => $value ) {
    echo "$key = $value\n";
}

echo PHP_EOL;
//02:
$students = array(
    ["name"   => "Tufik",
        "age"     => 25,
        "address" => "Bogura",
    ],
    ["name"   => "Rakib",
        "age"     => 32,
        "address" => "Dhaka",
    ],
);
foreach ( $students as $student ) {
    static $count;
    $count++;
    echo "{$count}:{$student['name']} age is {$student['age']} lives in {$student['address']}\n";
}

/*=================================================================================================
--------------------------24 - PHP Break and Continue--------------------> 
===================================================================================================*/


/* PHP Break and Continue
 * The "break" and "continue" statements in PHP are used inside loop structures to control the flow of execution.
 *
 * * "break" is used to terminate a loop prematurely. When a break statement is encountered inside a loop, the loop is immediately exited and the code after the loop is executed.
 *
 * * "continue" is used to skip an iteration of a loop. When a continue statement is encountered inside a loop, the current iteration is skipped and the next iteration begins. For example:
 * https://www.php.net/manual/en/control-structures.continue.php
 * https://www.php.net/manual/en/control-structures.break.php
 * https://www.w3schools.com/php/php_looping_break.asp
 */
//break example 01: The break statement can also be used to jump out of a loop.
echo "================ Break example 01 ======================\n";
for ( $i = 1; $i <= 10; $i++ ) {
    if ( 5 == $i ) {
        break;
    }
    echo "The number is: {$i}\n";
}
//break example 02: The break statement can also be used to jump out of a loop.
echo "\n============Break example 02 ================\n";
for ( $i = 1; $i <= 10; $i++ ) {
    echo "The number is: {$i}\n";
    if ( 5 == $i ) {
        break;
    }
}
//continue example 01: This example skips the value of = 2
echo "\n============Continue example 01 ================\n";
for ( $i = 1; $i <= 5; $i++ ) {
    if ( 2 == $i ) {
        continue;
    }
    echo "The number is: {$i}\n";
}
//continue example 02: This example won't work because it uses the condition after the echo
echo "\n============Continue example 02 ================\n";
for ( $i = 1; $i <= 5; $i++ ) {
    echo "The number is: {$i}\n";
    if ( 2 == $i ) {
        continue;
    }
}
//continue example 03: Skips all even number
echo "\n============Continue example 03 ================\n";
for ( $i = 1; $i <= 5; $i++ ) {
    if ( $i % 2 == 0 ) {
        continue;
    }
    echo "The odd number is: {$i}\n";
}

echo "\n";

for ( $i = 1; $i <= 5; $i++ ) {
    if ( !( $i % 2 ) ) {
        continue;
    }
    echo "The odd number is: {$i}\n";
}

//continue example 04: Skips all even number
echo "\n============Continue example 04 ================\n";
$num = 1;
while ( $num <= 5 ) {
    if ( !( $num % 2 ) ) {
        $num++;
        continue;
    }
    echo "The odd number is: {$num}\n";
    $num++;
}

/*=================================================================================================
--------------------------25 - Pattern php using for loop--------------------> 
===================================================================================================*/

/* PHP Pattern
 * https://www.educba.com/patterns-in-php/
 * https://www.youtube.com/watch?v=52XurnoXStk&list=PLWCLxMult9xeJDGBLLGbY0AcgnkjfFFTK
 * https://www.youtube.com/watch?v=BjLvZ2-cceI&list=PLWMB5IYAuU6coS9CWJONVuG_mZgysGd9d
 *
 *
 * ============ Learning patterns using loops in PHP has several benefits, including: ==========
 * Improving problem-solving skills: Creating patterns using loops helps in understanding how to break down a problem into smaller, manageable parts and find a solution by iterating through them.
 * Improving logic building skills: Patterns using loops require you to think logically about the flow of the program and how the variables change at each iteration. This helps in developing better problem-solving skills and improving overall programming ability.
 * Understanding loops: Loops are a fundamental concept in programming and learning patterns using loops will give a deeper understanding of how loops work and how to use them effectively.
 * Efficient Code Writing: By learning patterns using loops, you can write code that is more efficient and faster. This is because loops allow you to perform repetitive tasks with ease, without having to write the same code multiple times.
 * Reusability: Patterns created using loops can be easily reused in different projects. This can save time and effort in writing new code and reduces the chance of errors and bugs.
 * Overall, learning patterns using loops in PHP is an important step in becoming a proficient and skilled programmer.
 */
for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = 0; $j < $i; $j++ ) {
        echo $i;
    }
    echo "\n";
}

echo "\n";

//
for ( $i = 5; $i > 0; $i-- ) {
    for ( $j = 0; $j < $i; $j++ ) {
        echo $i;
    }
    echo "\n";
}

echo "\n";

//
for ( $i = 1; $i <= 5; $i++ ) {
    for ( $j = 0; $j < $i; $j++ ) {
        echo "💛";
    }
    echo "\n";
}

echo "\n";

//
for ( $i = 5; $i > 0; $i-- ) {
    for ( $j = 0; $j < $i; $j++ ) {
        echo "💛";
    }
    echo "\n";
}

echo "\n";

//
$name = "Towfik";
for ( $i = 0; $i <= strlen( $name ); $i++ ) {
    for ( $j = 0; $j < $i; $j++ ) {
        echo $name[$j];
    }
    echo "\n";
}

echo "\n";

//
$name = "Towfik";
for ( $i = strlen( $name ); $i > 0; $i-- ) {
    for ( $j = 0; $j < $i; $j++ ) {
        echo $name[$j];
    }
    echo "\n";
}

echo "\n";

//
for ( $i = 0; $i < 5; $i++ ) {
    for ( $j = 1; $j < $i; $j++ ) {
        echo "1";
    }
    echo "\n";
}

// Pattern 1 (triangle)
// for ( $i = 1; $i <= 5; $i++ ) {

//     for ( $j = 1; $j <= $i * 4 + 1; $j++ ) {
//         echo " $j ";
//     }

//     echo PHP_EOL;
// }

// for ( $i = 1; $i <= 5; $i++ ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " * ";
//     }
//     echo PHP_EOL;
// }

// Pattern 2 (triangle with number)

// for ( $i = 1; $i <= 5; $i++ ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $i ";
//     }
//     echo "\n";
// }

// Pattern 3

// for ( $i = 1; $i <= 5; $i++ ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $j ";
//     }
//     echo PHP_EOL;
// }

// Pattern 4 (Reverse Triangle)

// for ( $i = 10; $i >= 1; $i-- ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " * ";
//     }
//     echo PHP_EOL;
// }

// Pattern 5

// for ( $i = 5; $i >= 1; $i-- ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $i ";
//     }
//     echo PHP_EOL;
// }

// Pattern 6

// for ( $i = 5; $i >= 1; $i-- ) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo " $j ";
//     }
//     echo PHP_EOL;
// }

// Pattern 7 (Pyramid)

// $rows = 4;
// for ( $i = 1; $i <= $rows; $i++ ) {
//     for ( $j = 1; $j <= $rows - $i; $j++ ) {
//         echo " ";
//     }
//     for ( $j = $i; $j <= $i * 2 - 1; $j++ ) {
//          echo  " ";
//         echo "*" . " ";
//     }
//     echo "\n";
// }

// Pattern 8

// $str = "FAISAL";
// $count = strlen( $str );
// for ( $i = 0; $i < $count; $i++ ) {
//     for ( $j = 0; $j <= $i; $j++ ) {
//         echo " $str[$j] ";
//     }
//     echo PHP_EOL;
// }

// $str = "OSTAD";
// $count = strlen( $str );
// for ( $i = 0; $i < $count; $i++ ) {
//     for ( $j = 0; $j <= $i; $j++ ) {
//         echo " $str[$j] ";
//     }
//     echo PHP_EOL;
// }

// Pattern 9  (Rectangle)

// $n = 5;
// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= $n; $j++ ) {
//         if ( $i == 1 || $i == $n || $j == 1 || $j == $n ) {
//             echo "*";
//         } else {
//             echo " ";
//         }
//     }
//     echo "\n";
// }

// Pattern 10

// $n = 5;
// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= $n; $j++ ) {
//         if ( $j == $i ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     }
//     echo "\n";
// }

// Pattern 11

// $n = 5;
// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= $n; $j++ ) {
//         if ( $j == $i || $i + $j == $n + 1 ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     }
//     echo "\n";
// }

// Pattern 12

// $n = 4;

// for ( $i = 1; $i <= $n; $i++ ) {
//     for ( $j = 1; $j <= ( 2 * $n ) - 1; $j++ ) {
//         if ( $j >= $n - ( $i - 1 ) && $j <= $n + ( $i - 1 ) ) {
//             echo "*";
//         } else {
//             echo "  ";
//         }
//     }
//     echo "\n";
// }

// for ( $i = $n - 1; $i >= 1; $i-- ) {
//     for ( $j = 1; $j <= ( 2 * $n ) - 1; $j++ ) {
//         if ( $j >= $n - ( $i - 1 ) && $j <= $n + ( $i - 1 ) ) {
//             echo "*";
//         } else {
//             echo "  ";
//         }
//     }
//     echo "\n";
// }

/*=================================================================================================
--------------------------26 - Fibonacci Series using for Loops--------------------> 
===================================================================================================*/

/* Fibonacci Series using for Loops */

/* 01:pseudo code
initial value:
-> veryOld = 0
-> oldest = 1
-> newest = 1
first loop:
-> veryOld = 1
-> oldest = 1
-> newest = 1 (0 + 1 = 1)
second loop:
-> veryOld = 1
-> oldest = 1
-> newest = 2 (1 + 1 = 2)
third loop:
-> veryOld = 2
-> oldest = 2
-> newest = 3 (1 + 2 = 3)
forth loop:
-> veryOld = 3
-> oldest = 3
-> newest = 5 (2 + 3 = 5)
fifth loop:
-> veryOld = 5
-> oldest = 5
-> newest = 8 (3 + 5 = 8)
 */
$veryOld = 0;
$oldest = 1;
$newest = 1;
for ( $i = 0; $i < 10; $i++ ) {
    echo $veryOld . ", ";
    $oldest = $newest;
    $newest = $veryOld + $oldest;
    $veryOld = $oldest;
}

echo PHP_EOL;

//02:
$starting = 0;
$old = 1;
for ( $i = 0; $i < 10; $i++ ) {
    echo $starting . ", ";
    $new = $starting + $old;
    $old = $starting;
    $starting = $new;
}

?>
