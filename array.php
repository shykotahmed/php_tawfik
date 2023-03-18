<?php
//-------------PHP - Arrays, Arrays functions/method ------> 



/*=================================================================================================
---------------------44 - PHP Array------------------------> 
===================================================================================================*/

/*
 *************  PHP Array *************
In PHP, an array is a data structure that allows you to store multiple values in a single variable. It is a collection of key-value pairs, where each key corresponds to a specific value.
PHP arrays can be created using different syntaxes, but the most common way is to use square brackets to define an array with one or more key-value pairs.
 * PHP Advantages
 * -> Less Code
 * -> Easy to traverse
 * -> Sorting
 * -> Random Access
 * https://www.javatpoint.com/php-array
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.w3schools.com/php/php_arrays.asp
 */

// ---------- create array using square brackets -------
//01:
$braArray = ["mango", "orange", "apple", "pine-apple", "banana"];
echo $braArray[1] . PHP_EOL;

$braArray[] = "grape"; //add item
$braArray[count( $braArray )] = "Water melons"; //add item
print_r( $braArray );

//02:
$students[0] = "Tufik";
$students[1] = "Rakib";
$students[2] = "Tarif";
print_r( $students );

echo "\n";

// ---------- create array using array() function -------
//01:
$arr = array( "Dhaka", "Bogura", "Rajshahi", "Sylhet" );
echo $arr[2] . PHP_EOL;

$arr[] = "Pabna"; //add item
$arr[count( $arr )] = "Bhola"; //add item
print_r( $arr );

//02:
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

print_r( $cars );


/*=================================================================================================
------------------44 - PHP Array---------------------------> 
===================================================================================================*/

/*
 *************  Indexed Array *************
PHP indexed array is an array which is represented by an index number by default. All elements of array are represented by an index number which starts from 0.
PHP indexed array can store numbers, strings or any object. PHP indexed array is also known as numeric array.
 * There are two ways to create indexed arrays:
 * https://www.javatpoint.com/php-indexed-array
 * https://www.w3schools.com/php/php_arrays_indexed.asp
 */

// To create an indexed array in PHP, you can use the square bracket notation with a list of values separated by commas, like this:
// 01:
$braArray = ["mango", "orange", "apple", "pine-apple", "banana"];

for ( $i = 0; $i < count( $braArray ); $i++ ) {
    echo $braArray[$i] . PHP_EOL;
}

echo "\n";

foreach ( $braArray as $fruit ) {
    echo $fruit . PHP_EOL;
}

// 02:
// the index can be assigned manually
// $cars[0] = "Volvo";
// $cars[1] = "BMW";
// $cars[2] = "Toyota";

echo "\n";

// This creates an array with four elements, each with an integer value. You can also use the array() function to create an indexed array, like this:
// 01:
$arr = array( "Dhaka", "Bogura", "Rajshahi", "Sylhet" );

for ( $i = 0; $i < count( $arr ); $i++ ) {
    echo $arr[$i] . PHP_EOL;
}

echo "\n";

foreach ( $arr as $city ) {
    echo $city . PHP_EOL;
}

// 02:
// the index can be assigned manually
// $students[0] = "Tufik";
// $students[1] = "Rakib";
// $students[2] = "Tarif";
// print_r( $students );


/*=================================================================================================
------------------44.2 - Associative Arrays---------------------------> 
===================================================================================================*/

/*
 *************  Associative Arrays *************
PHP allows you to associate name/label with each array elements in PHP using => symbol. Such way, you can easily remember the element because each element is represented by label than an incremented number.
 * This a key value pair array
 * There are two ways to define associative array:
 * https://www.javatpoint.com/php-associative-array
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.w3schools.com/php/php_arrays_associative.asp
 * https://www.geeksforgeeks.org/associative-arrays-in-php/
 */

//--------------------- You can assign associative like this: --------------
$salary["tufik"] = 20000;
$salary["rakib"] = 20000;
$salary["sabbir"] = 20000;
print_r( $salary );

//--------------------- You can assign associative like this: --------------
//01:
$person = array(
    "name"    => "John",
    "address" => "USA",
);
//02:
// $person = [
//     "name"    => "John",
//     "address" => "USA",
// ];

$person["age"] = 32; //add new item in a array

print_r( $person );
echo "Myself {$person['name']}, {$person['age']} years old, lives in {$person["address"]}\n\n";

// --------------- iteration ------------
$name = array_keys( $person );

for ( $i = 0; $i < count( $name ); $i++ ) {
    echo "key = {$name[$i]}, value = {$person[$name[$i]]}" . PHP_EOL;
}

echo "\n\n";

foreach ( $person as $key => $value ) {
    echo "key = {$key}, value = {$value}" . PHP_EOL;
}


/*=================================================================================================
-------------------44.2.2 - Associative Arrays - Importance--------------------------> 
===================================================================================================*/

/*
 *************  Associative Arrays - Importance *************
PHP allows you to associate name/label with each array elements in PHP using => symbol. Such way, you can easily remember the element because each element is represented by label than an incremented number.
 * This a key value pair array
 * There are two ways to define associative array:
 * https://www.javatpoint.com/php-associative-array
 * https://www.php.net/manual/en/language.types.array.php
 * https://www.w3schools.com/php/php_arrays_associative.asp
 * https://www.geeksforgeeks.org/associative-arrays-in-php/
 */

//----------------
//01:
$students = [
    1          => "Tufik",
    "10"       => "Rakib",
    "12r"      => "Sabbir",
    "thirteen" => "Rocky",
];
echo $students[1] . PHP_EOL; //output = Tufik
echo $students[10] . PHP_EOL; //output = Rakib
// echo $students[12r] . PHP_EOL;  // output = Parse error: syntax error
echo $students["thirteen"]; // output = Rocky

echo "\n\n";

//02:
$foods = [
    "fruits"     => "Mango, Apple, Guava",
    "vegetables" => "Tomato, Capsicum",
    "drinks"     => "Water, Milk",
];

echo $foods['vegetables'] . PHP_EOL;
$foods["vegetables"] = $foods["vegetables"] . ", Pumpkin"; //add new item
echo $foods["vegetables"];

echo "\n\n";

echo $foods['drinks'] . PHP_EOL;
$foods["drinks"] .= ", Orange juice"; //add new item
echo $foods["drinks"];

echo "\n\n";

// ------------------------------- Iteration --------------------------
foreach ( $foods as $key => $value ) {
    echo "{$key} = {$value}\n";
}

echo "\n";

$keys = array_keys( $foods );
for ( $i = 0; $i < count( $keys ); $i++ ) {
    echo $keys[$i] . "\n";
}

echo "\n";

$values = array_values( $foods );
for ( $i = 0; $i < count( $values ); $i++ ) {
    echo $values[$i] . "\n";
}


/*=================================================================================================
-------------44.3 - Multidimensional or nested arrays--------------------------------> 
===================================================================================================*/


/*
 *************  Multidimensional or nested arrays *************
In PHP, you can create multidimensional or nested arrays, which are arrays that contain other arrays as elements. You can use them to represent complex data structures such as tables, matrices, or trees.
 * This a key value pair array
 * There are two ways to define associative array:
 * https://www.javatpoint.com/php-multidimensional-array
 * https://www.w3schools.com/php/php_arrays_multidimensional.asp
 * https://www.geeksforgeeks.org/multidimensional-arrays-in-php/
 */

//01:
// $foods = [
//     "fruits"     => explode( ', ', "Mango, Apple, Guava" ),
//     "vegetables" => explode( ', ', "Tomato, Capsicum" ),
//     "drinks"     => explode( ', ', "Water, Milk" ),
// ];
// print_r( $foods );
// array_push( $foods['drinks'], "Orange juice" ); //add new item drinks array
// print_r( $foods );

//02:
$arr = [
    "test" => [
        "test-again" => [
            "a", "b", "c",
        ],
    ],
];
echo $arr["test"]["test-again"][1]; // output = b
echo "\n";

//03:
$arr2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, [
        "a", "b", "c",
    ], 4444],
];
// print_r( $arr2 );
echo $arr2[3][2][2]; // output = c
echo "\n";

//04:
// PHP program to creating two - dimensional associative array
$marks = array(

    // Ankit will act as key
    "Ankit" => array(

        // Subject and marks are
        // the key value pair
        "C"   => 95,
        "DCO" => 85,
        "FOL" => 74,
    ),

    // Ram will act as key
    "Ram"   => array(

        // Subject and marks are
        // the key value pair
        "C"   => 78,
        "DCO" => 98,
        "FOL" => 46,
    ),

    // Anoop will act as key
    "Anoop" => array(

        // Subject and marks are
        // the key value pair
        "C"   => 88,
        "DCO" => 46,
        "FOL" => 99,
    ),
);

echo "\n";
print_r( $marks );
echo $marks["Anoop"]["DCO"];

/*=================================================================================================
-------------------45 - String to Array and Array to String, Multiple Delimiters--------------------------> 
===================================================================================================*/


/*
 *************  String to Array and Array to String, Multiple Delimiters **********
Converting a PHP string to an array can be done using the explode function, while converting an array to a string can be done using the implode function.
 * https://www.javatpoint.com/array-to-string-conversion-in-php
 *
 */
//----------- Default String -------------
$string = "Tomato, Capsicum, Pumpkin";

//----------- String to Array -------------
$vegetablesArray = explode( ', ', $string );
print_r( $vegetablesArray );

//----------- Array to String -------------
$vegetablesString = implode( ', ', $vegetablesArray );
echo $vegetablesString . PHP_EOL;

//----------- Array to String -------------
$vegetablesString2 = join( '-', $vegetablesArray );
echo $vegetablesString2 . PHP_EOL . PHP_EOL;

//----------- Multiple Delimiters -------------
$s = "A, D, C,D";
$arr = explode( ', ', $s );
echo count( $arr ) . PHP_EOL; //It will return 3 but $s has 4 items. This is a problem

$arr2 = preg_split( '/(, |,)/', $s );
echo count( $arr2 ); //It will return 4


/*=================================================================================================
------------46 - Associative Array to String Conversion - Serialize, json---------------------------------> 
===================================================================================================*/

/**************  Associative Array to String Conversion - Serialize, json *************
Two popular ways of serializing associative arrays into strings are through the use of the 'serialize()' function or the 'JSON' (JavaScript Object Notation) format.
 */
$arr = [
    "name" => "Tufik Hasan",
    "age"  => 25,
    "roll" => 3,
];
/*------------------- 01: serialize() -------------------
 * The 'serialize()' function is a built-in PHP function that can convert an associative array into a string. It works by converting the array into a serialized string, which can be stored or transmitted as a string.
 * As you can see, the output of the serialize() function is a string that represents the original associative array. Note that this format is specific to PHP and may not be compatible with other languages.
 * https://www.javatpoint.com/how-to-use-php-serialize-and-unserialize-function
 * https://www.geeksforgeeks.org/how-to-use-php-serialize-and-unserialize-function/
 */

//------ serialize - (Associative Array to String Conversion) ---------
$serialize = serialize( $arr );
echo $serialize; // serialize string
echo "\n\n";

//------ unserialize - (Serialize to Associative Array) ---------
$unserialize = unserialize( $serialize );
print_r( $unserialize ); // associative array
echo "\n";

/*--------------------- 02: json_encode() -------------------
 * JSON is a lightweight data interchange format that is widely used for transmitting data between a client and a server. It is a text-based format that is easy to read and write, and can be easily parsed by most programming languages.
 * To convert an associative array into a JSON string, we can use the built-in json_encode()
 * http://php.adamharvey.name/manual/en/function.json-encode.php
 * https://www.php.net/manual/en/function.json-decode.php
 * https://www.javatpoint.com/how-to-convert-array-into-string-in-php
 */

// 'json_encode()' - (Associative Array to JSON)
$jsonEncode = json_encode( $arr );
echo $jsonEncode; //JSON
echo "\n\n";

// 'json_decode()' - (JSON to stdClass Object)
$stdClassObject = json_decode( $jsonEncode );
print_r( $stdClassObject ); //stdClass Object
echo "\n";

// 'json_decode()' - (JSON to Associative Array)
$jsonDecode = json_decode( $jsonEncode, true );
print_r( $jsonDecode ); // associative array



/*=================================================================================================
----------------47 - Copy by Value & Copy by Reference-----------------------------> 
===================================================================================================*/

/**************  Copy by Value & Copy by Reference **************/

/* ------------------ copy by value /deep copy --------------
-> When a variable is copied by value, a new copy of the variable is created with its own memory space. Changes made to the copy do not affect the original variable.
 */
echo "\n------- copy by value /deep copy --------\n";
//01:
$arr = [
    "name"    => "Tufik",
    "address" => "Bogura",
];

$newArr = $arr;
$newArr['name'] = "Tufik Updated";
print_r( $newArr );

//02:
// function updateAddress( $arr ) {
//     $arr["address"] .= ", Bangladesh";
//     print_r( $updateAdd );
// }
// updateAddress( $arr );

print_r( $arr );

echo "\n\n";

/* ------------------ Copy by Reference / shallow cop --------------
-> When a variable is copied by reference, a new variable is created that points to the same memory location as the original variable. Changes made to the new variable also affect the original variable.
 */
echo "\n----- Copy by Reference / shallow copy -----\n";
//01:
$fruit = [
    "name"   => "Apple",
    "weight" => "200g",
];

$newFruit = &$fruit;
$newFruit['name'] = "Orange";
print_r( $newFruit );

print_r( $fruit );

//02:
// $person = [
//     "name"    => "Rakib",
//     "address" => "Dhaka",
// ];
// function updatePerson( &$person ) {
//     $person["address"] .= ", Bangladesh";
//     print_r( $person );
// }
// updatePerson( $person );
// print_r( $person );



/*=================================================================================================
---------------48 - Removing data from associative arrays------------------------------> 
===================================================================================================*/

/**************  Copy by Value & Copy by Reference **************/

/* ------------------ copy by value /deep copy --------------
-> When a variable is copied by value, a new copy of the variable is created with its own memory space. Changes made to the copy do not affect the original variable.
 */
echo "\n------- copy by value /deep copy --------\n";
//01:
$arr = [
    "name"    => "Tufik",
    "address" => "Bogura",
];

$newArr = $arr;
$newArr['name'] = "Tufik Updated";
print_r( $newArr );

//02:
// function updateAddress( $arr ) {
//     $arr["address"] .= ", Bangladesh";
//     print_r( $updateAdd );
// }
// updateAddress( $arr );

print_r( $arr );

echo "\n\n";

/* ------------------ Copy by Reference / shallow cop --------------
-> When a variable is copied by reference, a new variable is created that points to the same memory location as the original variable. Changes made to the new variable also affect the original variable.
 */
echo "\n----- Copy by Reference / shallow copy -----\n";
//01:
$fruit = [
    "name"   => "Apple",
    "weight" => "200g",
];

$newFruit = &$fruit;
$newFruit['name'] = "Orange";
print_r( $newFruit );

print_r( $fruit );

//02:
// $person = [
//     "name"    => "Rakib",
//     "address" => "Dhaka",
// ];
// function updatePerson( &$person ) {
//     $person["address"] .= ", Bangladesh";
//     print_r( $person );
// }
// updatePerson( $person );
// print_r( $person );



/*=================================================================================================
------------------49 - Discussion of Empty Values - isset(),empty()---------------------------> 
===================================================================================================*/


/* * Discussion of Empty Values - isset(),empty()
 *
 * ------------------------ isset(): ------------------------
The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
This function returns true if the variable exists and is not NULL, otherwise it returns false.
Note: If multiple variables are supplied, then this function will return true only if all of the variables are set.
Tip: A variable can be unset with the unset() function.
 *
 * ------------------------ empty(): ------------------------
The empty() function checks whether a variable is empty or not.
This function returns false if the variable exists and is not empty, otherwise it returns true.
The following values evaluates to empty:
-> 0
-> 0.0
-> "0"
-> ""
-> NULL
-> FALSE
-> array()
 *
 * https://www.geeksforgeeks.org/why-to-check-both-isset-and-empty-function-in-php/
 * https://www.w3schools.com/php/func_var_isset.asp
 * https://www.w3schools.com/php/func_var_empty.asp
 * https://www.php.net/manual/en/function.isset.php
 * https://www.javatpoint.com/php-isset-function
 */

//example 01:
$a = "";
//check if the variable $a is set or not
if ( isset( $a ) ) {
    echo "Variable \$a is set\n";
} else {
    echo "Variable \$a is not set\n";
}
//Check the variable $a is empty or not
if ( empty( $a ) ) {
    echo "Variable \$a is empty\n";
} else {
    echo "Variable \$a is not empty\n";
}

//example 02:
$b = 0;
//check if the variable $b is set or not
if ( isset( $b ) ) {
    echo "Variable \$b is set\n";
} else {
    echo "Variable \$b is not set\n";
}
//Check the variable $b is empty or not
if ( empty( $b ) ) {
    echo "Variable \$b is empty\n";
} else {
    echo "Variable \$b is not empty\n";
}

//example 03:
$c = 0;
//check if the variable $b is set or not
if ( isset( $c ) && ( is_numeric( $c ) && $c != "" ) ) {
    echo "Variable \$c is set & it's not empty\n";
} else {
    echo "Variable \$c is set & it's empty\n";
}

//example 04:
$d = 0;
//check if the variable $b is set or not
if ( isset( $d ) && ( is_numeric( $d ) && $d > 0 ) ) {
    echo "Variable \$d is set with valid value\n";
} else {
    echo "Variable \$d is set but it's not valid\n";
}


/*=================================================================================================
--------------------50 - Commonly used array functions / methods-------------------------> 
===================================================================================================*/


/* * Discussion of Empty Values - isset(),empty()
 *
 * ------------------------ isset(): ------------------------
The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
This function returns true if the variable exists and is not NULL, otherwise it returns false.
Note: If multiple variables are supplied, then this function will return true only if all of the variables are set.
Tip: A variable can be unset with the unset() function.
 *
 * ------------------------ empty(): ------------------------
The empty() function checks whether a variable is empty or not.
This function returns false if the variable exists and is not empty, otherwise it returns true.
The following values evaluates to empty:
-> 0
-> 0.0
-> "0"
-> ""
-> NULL
-> FALSE
-> array()
 *
 * https://www.geeksforgeeks.org/why-to-check-both-isset-and-empty-function-in-php/
 * https://www.w3schools.com/php/func_var_isset.asp
 * https://www.w3schools.com/php/func_var_empty.asp
 * https://www.php.net/manual/en/function.isset.php
 * https://www.javatpoint.com/php-isset-function
 */

//example 01:
$a = "";
//check if the variable $a is set or not
if ( isset( $a ) ) {
    echo "Variable \$a is set\n";
} else {
    echo "Variable \$a is not set\n";
}
//Check the variable $a is empty or not
if ( empty( $a ) ) {
    echo "Variable \$a is empty\n";
} else {
    echo "Variable \$a is not empty\n";
}

//example 02:
$b = 0;
//check if the variable $b is set or not
if ( isset( $b ) ) {
    echo "Variable \$b is set\n";
} else {
    echo "Variable \$b is not set\n";
}
//Check the variable $b is empty or not
if ( empty( $b ) ) {
    echo "Variable \$b is empty\n";
} else {
    echo "Variable \$b is not empty\n";
}

//example 03:
$c = 0;
//check if the variable $b is set or not
if ( isset( $c ) && ( is_numeric( $c ) && $c != "" ) ) {
    echo "Variable \$c is set & it's not empty\n";
} else {
    echo "Variable \$c is set & it's empty\n";
}

//example 04:
$d = 0;
//check if the variable $b is set or not
if ( isset( $d ) && ( is_numeric( $d ) && $d > 0 ) ) {
    echo "Variable \$d is set with valid value\n";
} else {
    echo "Variable \$d is set but it's not valid\n";
}


/*=================================================================================================
--------------------51 - array_slice() - Array function/method-------------------------> 
===================================================================================================*/

/* array_slice() - Array function/method
 *
The array_slice() function is an inbuilt function of PHP. The array_slice() function is used to extract a slice of an array. This function was introduced in 4.0.
The array_slice() function returns the slice of the array as a new array, leaving the original array unchanged.
 * ------------------------ array_slice(array, start, length, preserve): ------------------------
01-ARRAY: Required. Specifies an array
02-START: Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.
03-LENGTH: Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.
04-PRESERVE : Optional. Specifies if the function should preserve or reset the keys. Possible values:
-> true - Preserve keys
-> false - Default. Reset keys
 *
 * https://www.w3schools.com/php/func_array_slice.asp
 * https://www.geeksforgeeks.org/php-array_slice-function/
 * https://www.php.net/manual/en/function.array-slice.php
 * https://www.javatpoint.com/post/php-array_slice-function
 */

 $arr = ["apple", "orange", "mango", "lemon", "grape", "melons"];

 // $sliceArr = array_slice( $arr, 2 ); //slice start position (2)
 
 // $sliceArr = array_slice( $arr, 3, 2 ); //slice start position (3) & count 2 element
 
 // $sliceArr = array_slice( $arr, 1, -2 ); //slice start position (2) & ends before 2 elements
 
 // $sliceArr = array_slice( $arr, -4, -1 ); //slice start position (-5) & ends before 1 elements
 
 // $sliceArr = array_slice( $arr, -3, 2 ); //slice start position (-3) & count 2 element
 
 $sliceArr = array_slice( $arr, 3, 2, true ); //slice start position (3) & count 2 element with default keys
 
 print_r( $sliceArr );
 
 //Associative array slice example:
 $associativeArr = ["a" => 12, "b" => 34, "c" => 53, "10" => 94, "d" => 64];
 
 // $sliAsAr = array_slice( $associativeArr, 2 ); //it's not show proper key
 
 // $sliAsAr = array_slice( $associativeArr, 2, -1, true ); //With the preserve parameter set to true
 
 $sliAsAr = array_slice( $associativeArr, 2, null, true ); //With the preserve parameter set to true
 
 print_r( $sliAsAr );



/*=================================================================================================
-----------------------52 - array_splice() - Array function/method----------------------> 
===================================================================================================*/

/* array_merge() - Concatenating several arrays
 *
The array_merge() function merges one or more arrays into one array.
Tip: You can assign one array to the function, or as many as you like.
Note: If two or more array elements have the same key, the last one overrides the others.
Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).
Tip: The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.
 * ----------- array_merge(array1, array2, array3, ...): -----------------
-> array1    Required. Specifies an array
-> array2    Optional. Specifies an array
-> array3,...Optional. Specifies an array
 *
 * https://www.w3schools.com/php/func_array_merge.asp
 * https://www.php.net/manual/en/function.array-merge.php
 * https://www.geeksforgeeks.org/php-merging-two-arrays-using-array_merge/
 * https://www.javatpoint.com/post/php-array_splice-function
 */

 $arr = ["apple", "orange", "mango", "lemon", "grape", "melons"];

 // 01:
 // $arr1 = array_slice( $arr, 0, 2 );
 // $arr2 = array_slice( $arr, -4, 2 );
 // print_r( $arr1 );
 // print_r( $arr2 );
 
 // $arrMerge = array_merge( $arr1, $arr2 );
 // print_r( $arrMerge );
 
 // 02:
 // $arr1 = array_slice( $arr, 0, 2 );
 // $arr2 = array_slice( $arr, -4, 2 );
 // print_r( $arr1 );
 // print_r( $arr2 );
 
 // $arrPlus = $arr1 + $arr2; //this will not work because $arr1 & $arr2 has same key
 // print_r( $arrPlus );
 
 //03:
 // $ar1 = array_slice( $arr, 4, 2 );
 // $ar2 = array_slice( $arr, -3, 1, true );
 // print_r( $ar1 );
 // print_r( $ar2 );
 
 // $arrPlus2 = $ar1 + $ar2; //this will  work because $ar1 & $ar2 keys not same
 // print_r( $arrPlus2 );
 
 //04:
 $associativeArr = ["a" => 12, "b" => 34, "c" => 53, "10" => 94, "d" => 64];
 $ar1 = array_slice( $associativeArr, 3, 2, true );
 $ar2 = array_slice( $associativeArr, -3, 1, true );
 $ar3 = ["j" => 64, "k" => 76];
 print_r( $ar1 );
 print_r( $ar2 );
 print_r( $ar3 );
 
 $arrPlus = $ar1 + $ar2 + $ar3; //this will  work because $ar1 & $ar2 keys not same
 print_r( $arrPlus );



/*=================================================================================================
----------------53 - array_merge() - Concatenating several arrays-----------------------------> 
===================================================================================================*/
/* array_merge() - Concatenating several arrays
 *
The array_merge() function merges one or more arrays into one array.
Tip: You can assign one array to the function, or as many as you like.
Note: If two or more array elements have the same key, the last one overrides the others.
Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).
Tip: The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.
 * ----------- array_merge(array1, array2, array3, ...): -----------------
-> array1    Required. Specifies an array
-> array2    Optional. Specifies an array
-> array3,...Optional. Specifies an array
 *
 * https://www.w3schools.com/php/func_array_merge.asp
 * https://www.php.net/manual/en/function.array-merge.php
 * https://www.geeksforgeeks.org/php-merging-two-arrays-using-array_merge/
 * https://www.javatpoint.com/post/php-array_splice-function
 */

 $arr = ["apple", "orange", "mango", "lemon", "grape", "melons"];

 // 01:
 // $arr1 = array_slice( $arr, 0, 2 );
 // $arr2 = array_slice( $arr, -4, 2 );
 // print_r( $arr1 );
 // print_r( $arr2 );
 
 // $arrMerge = array_merge( $arr1, $arr2 );
 // print_r( $arrMerge );
 
 // 02:
 // $arr1 = array_slice( $arr, 0, 2 );
 // $arr2 = array_slice( $arr, -4, 2 );
 // print_r( $arr1 );
 // print_r( $arr2 );
 
 // $arrPlus = $arr1 + $arr2; //this will not work because $arr1 & $arr2 has same key
 // print_r( $arrPlus );
 
 //03:
 // $ar1 = array_slice( $arr, 4, 2 );
 // $ar2 = array_slice( $arr, -3, 1, true );
 // print_r( $ar1 );
 // print_r( $ar2 );
 
 // $arrPlus2 = $ar1 + $ar2; //this will  work because $ar1 & $ar2 keys not same
 // print_r( $arrPlus2 );
 
 //04:
 $associativeArr = ["a" => 12, "b" => 34, "c" => 53, "10" => 94, "d" => 64];
 $ar1 = array_slice( $associativeArr, 3, 2, true );
 $ar2 = array_slice( $associativeArr, -3, 1, true );
 $ar3 = ["j" => 64, "k" => 76];
 print_r( $ar1 );
 print_r( $ar2 );
 print_r( $ar3 );
 
 $arrPlus = $ar1 + $ar2 + $ar3; //this will  work because $ar1 & $ar2 keys not same
 print_r( $arrPlus );



/*=================================================================================================
----------------54 - Sorting Arrays - Array function/method-----------------------------> 
===================================================================================================*/

/* Sorting Arrays
 *
What is sorting?
Sorting refers to ordering data in an alphabetical, numerical order and increasing or decreasing fashion according to some linear relationship among the data items.Sorting greatly improves the efficiency of searching.
Sorting Functions For Arrays In PHP:
-> sort() – sorts arrays in ascending order
-> rsort() – sorts arrays in descending order
-> asort() – sorts associative arrays in ascending order, according to the value
-> arsort() – sorts associative arrays in descending order, according to the value
-> ksort() – sorts associative arrays in ascending order, according to the key
-> krsort() – sorts associative arrays in descending order, according to the key
-> usort() – sorts a given array by using a user-defined comparison function
 *
 * https://www.w3schools.com/php/php_arrays_sort.asp
 * https://www.php.net/manual/en/array.sorting.php
 * https://www.geeksforgeeks.org/sorting-arrays-php-5/
 *
 */

 $arr = ["banana", "melons", "mango", "apple", "Apple", "lemon"];
 $number = [5, 2, 45, 23, 65, 4, 9, 1, 6];
 
 // ---------- sort() - sorts arrays in ascending order ----------
 sort($arr);
 print_r($arr);
 
 // sort( $arr, SORT_STRING | SORT_FLAG_CASE );
 // print_r( $arr );
 
 sort($number);
 print_r($number);
 
 sort($number, SORT_STRING);
 print_r($number);
 
 // sort( $number, SORT_LOCALE_STRING );
 // print_r( $number );
 
 
 // ---------- rsort() – sorts arrays in descending order ------------
 // rsort( $arr );
 // print_r( $arr );
 
 // rsort( $number );
 // print_r( $number );
 
 // rsort( $number, SORT_STRING );
 // print_r( $number );
 
 
 
 $arr2 = ["a" => 12, "x" => 3, "d" => 64, "g" => 94, "y" => 9, "c" => 53, "b" => 34];
 
 // ----------- asort() – sorts associative arrays in ascending order, according to the value ------------
 // asort( $arr2 );
 // print_r( $arr2 );
 
 // asort( $arr2, SORT_STRING );
 // print_r( $arr2 );
 
 
 // ----------- arsort() – sorts associative arrays in descending order, according to the value ------------
 // arsort( $arr2 );
 // print_r( $arr2 );
 
 // arsort( $arr2, SORT_STRING );
 // print_r( $arr2 );
 
 
 // ----------- ksort() – sorts associative arrays in ascending order, according to the key ------------
 // ksort( $arr2 );
 // print_r( $arr2 );
 
 
 // ----------- krsort() – sorts associative arrays in descending order, according to the key ------------
 // krsort( $arr2 );
 // print_r( $arr2 );
 
 
 // ----------- usort() – sorts a given array by using a user-defined comparison function ------------
 // $array = array("apple", "banana", "cherry", "date");
 // usort($array, function ($a, $b) {
 //     return strlen($b) - strlen($a);
 // });
 // print_r($array);
 
 
 // $num = array(10, 5, 3, 8, 2);
 // usort($num, function ($a, $b) {
 //     return $a - $b;
 // });
 // print_r($num);
 
 
 
 
 
 
 /* ***** The sort() function in PHP can take one, two or three arguments: ***
  * 01: The first argument is a mandatory parameter and specifies the array to be sorted.
  *
  * 02: The second argument is optional and specifies the sorting order. It can take one of the following  * values:
  * -> SORT_REGULAR: compare items normally (don't change types).
  * -> SORT_NUMERIC: compare items numerically.
  * -> SORT_STRING: compare items as strings.
  * -> SORT_LOCALE_STRING: compare items as strings, based on the current locale.
  * -> SORT_NATURAL: compare items as strings using "natural ordering" (i.e. alphabetical order).
  * -> SORT_FLAG_CASE: can be combined with SORT_STRING or SORT_NATURAL to sort strings in a case-insensitive manner.
  * -> If this argument is not provided, SORT_REGULAR will be used by default.
  *
  * 03: The third argument is optional and specifies whether to maintain the association between keys and values. If this argument is set to true, the keys will be preserved in the sorted array. If it is set to false or not provided, the keys will be re-indexed starting from 0.
  *
  */


/*=================================================================================================
--------------------55 - array_reverse - Array function/method-------------------------> 
===================================================================================================*/

/* array_reverse(array, preserve)
 *
01: array : Required. Specifies an array
02: preserve : Optional. Specifies if the function should preserve the keys of the array or not. Possible values:
-> true
-> false
 * https://www.php.net/manual/en/function.array-reverse.php
 * https://www.w3schools.com/php/func_array_reverse.asp
 *
 */
$input = array( "php", 4.0, array( "green", "red" ) );
$reversed = array_reverse( $input );
$preserved = array_reverse( $input, true );

print_r( $input );
print_r( $reversed );
print_r( $preserved );



/*=================================================================================================
-------------------56 - Searching in Indexed & Associated Arrays--------------------------> 
===================================================================================================*/


/* Searching in Indexed & Associated Arrays */


/* ******************* in_array() ************
The in_array() function is a built-in PHP function that checks if a given value exists in an array. The function takes three arguments:
-> The first argument is the value you want to search for.
-> The second argument is the array you want to search in.
-> The third argument is optional and is a boolean flag that specifies whether the function should use strict type checking. If this parameter is set to true, the function will also check the types of the values in the array, and return true only if the types match as well as the values.
 * https://www.php.net/manual/en/function.in-array.php
 * https://www.w3schools.com/php/func_array_in_array.asp
 */
$number = [5, 2, 5, "9", 1, 6];

if (in_array(9, $number)) {
    echo "9 is exist\n";
} else {
    echo "9 is not exist\n";
}
//strict type checking
if (in_array(9, $number, true)) {
    echo "9 is exist\n";
} else {
    echo "9 is not exist\n";
}




/* ******************* array_search(value, array, strict) ************
The in_array() function is a built-in PHP function that checks if a given value exists in an array. The function takes three arguments:
01- value: Required. Specifies the value to search for
02- array: Required. Specifies the array to search in
03- strict: Optional. If this parameter is set to TRUE, then this function will search for identical elements in the array. Possible values:
-> true
-> false - Default
 * https://www.php.net/manual/en/function.array-search.php
 * https://www.w3schools.com/php/func_array_search.asp
 * https://www.geeksforgeeks.org/php-array_search-function/
 *
 */
$number2 = [9, 2, 5, 1, 6, 5];

$findIndex = array_search("1", $number2);
echo "key = $findIndex\n";

//return only first item index
$findIndex = array_search(5, $number2, true);
echo "key = $findIndex\n";

//strict type checking
$findIndex = array_search("1", $number2, true);
echo "key = $findIndex\n";



/* ******************* "array_key_exists(key, array)" / "key_exists(key, array)"  ************
In PHP, both "array_key_exists()" and "key_exists()" are functions that check whether a specified key exists in an array.
"array_key_exists()" is a built-in PHP function that checks if a given key or index exists in an array.
"key_exists()" is an alias of "array_key_exists()", which means that it is simply another name for the same function. The syntax for "key_exists()" is identical to that of "array_key_exists()"
01- key: Required. Specifies the key
02- array: Required. Specifies the array
 * https://www.php.net/manual/en/function.array-key-exists.php
 * https://www.w3schools.com/php/func_array_key_exists.asp
 *
 */

$arr = ["a" => 12, "b" => 3, "b" => 64, "d" => 94];
if (array_key_exists("b", $arr)) {
    echo "key B is exist\n";
} else {
    echo "key B is not exist\n";
}
//strict type checking
if (key_exists("e", $arr)) {
    echo "key E is exist\n";
} else {
    echo "key E is not exist\n";
}



/* ******************* array_values(array)  ************
 * https://www.php.net/manual/en/function.array-values.php
 * https://www.w3schools.com/php/func_array_values.asp
 * https://www.geeksforgeeks.org/php-array_values-function/
 *
 */

$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
print_r(array_values($a));



/* ******************* array_keys(array, value, strict)  ************
 * https://www.w3schools.com/php/func_array_keys.asp
 * https://www.php.net/manual/en/function.array-keys.php
 * https://www.geeksforgeeks.org/php-array_keys-function/
 *
 */

$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
print_r(array_keys($a));


/*=================================================================================================
---------------57 - array_intersect(), array_intersect(), array_diff(), array_diff_assoc()------------------------------> 
===================================================================================================*/


/* Difference & intersection of two indexed & associated arrays */


/* ************** array_intersect(multipleArray...) & array_intersect_assoc(multipleArray...) ************
This builtin function of PHP is used to compute the intersection of two or more arrays. The function is used to compare the values of two or more arrays and returns the matches. The function prints only those elements of the first array that are present in all other arrays.
Note: The keys of elements are preserved. That is, the keys of elements in output array will be same as that of keys of those elements in the first array.
 * https://www.php.net/manual/en/function.array-intersect.php
 * https://www.php.net/manual/en/function.array-intersect-assoc.php
 * https://www.w3schools.com/php/func_array_intersect.asp
 * https://www.w3schools.com/php/func_array_intersect_assoc.asp
 * https://www.geeksforgeeks.org/php-array_intersect-function/
 */
$num1 = [8, 7, 5, 4,  3, "9"];
$num2 = [2, 7, 9, 1, 4];

$common = array_intersect($num1, $num2); //return $num1 all common number

// $common = array_intersect($num2, $num1); //return $num2 all common number

// $common = array_intersect($num1, $num2, [4, 5, 3, 7]); //return common number

// $common = array_intersect_assoc($num1, $num2); //return $num1 all common number if key matches

// $common = array_intersect_key($num2, $num1); //return all matches key value

print_r($common);

$arr1 = ["a" => "water-melon", "b" => "apple", "h" => "orange"];
$arr2 = ["a" => "mango", "b" => "apple", "c" => "orange", "d" => "lemon"];

$commonArr = array_intersect($arr1, $arr2); //return $arr1 all common value

// $commonArr = array_intersect($arr2, $arr1); //return $arr2 all common value

// $commonArr = array_intersect_assoc($arr1, $arr2); //return $arr1 all common number if key matches

// $commonArr = array_intersect_key($arr1, $arr2); //return all  matches key value

print_r($commonArr);






/* ************** array_diff(multipleArray...) & array_diff_assoc(multipleArray...) ************
The array_diff() is an inbuilt function in PHP ans is used to calculate the difference between two or more arrays. This function computes difference according to the values of the elements, between one or more array and return differences in the form of a new array. This function basically returns all the entries that are present in the first array which are not present in any other arrays.
RETURN TYPE: This function compares the first array in parameters with rest of the arrays and returns an array containing all the entries from $array1 that are not present in any of the other arrays.
 * https://www.php.net/manual/en/function.array-diff.php
 * https://www.php.net/manual/en/function.array-diff-assoc.php
 * https://www.w3schools.com/php/func_array_diff.asp
 * https://www.w3schools.com/php/func_array_diff_assoc.asp
 * https://www.geeksforgeeks.org/php-array_diff-function/
 */
$n1 = [7, 5, 4, "9"];
$n2 = [2, 1, 9, 4];

$diff = array_diff($n1, $n2); //return $n1 all difference number

// $diff = array_diff($n2, $n1); //return $n2 all difference number

// $diff = array_diff($n1, $n2, [4, 3, 7]); //return $n1 all difference number

$d1 = [1, 2, 9, 4, 3];
$d2 = [1, 2, 3, 4];

// $diff = array_diff_assoc($d1, $d2); //return $d1 all difference number if key doesn't matches

// $diff = array_diff_assoc($d2, $d1); //return $d2 all difference number if key doesn't matches

print_r($diff);

$ar1 = ["a" => "water-melon", "b" => "apple", "h" => "orange"];
$ar2 = ["a" => "mango", "b" => "apple", "c" => "orange", "d" => "lemon"];

$diffAr = array_diff($ar1, $ar2); //return $ar1 all difference value

// $diffAr = array_diff($ar2, $ar1); //return $ar2 all difference value

// $diffAr = array_diff_assoc($ar1, $ar2); //return $ar1 all difference value based on key

// $diffAr = array_diff_key($ar1, $ar2); //return $ar1 all difference key

// $commonArr = array_intersect_key($arr1, $ar2); //return all difference value matches key value

print_r($diffAr);


/*=================================================================================================
------------------58 - array_walk() - Array Utility Functions - Very Important---------------------------> 
===================================================================================================*/

/* array_walk() - Array Utility Functions - Very Important */

/* ************** array_walk($array, myFunction, $extraParam) ************
The array_walk() function is an inbuilt function in PHP. The array_walk() function walks through the entire array regardless of pointer position and applies a callback function or user-defined function to every element of the array. The array element’s keys and values are parameters in the callback function.
01: $array: This is a mandatory parameter and specifies the input array.
02: callbackFunction(): This parameter specifies the name of the user-defined function and is also mandatory. The user-defined function generally excepts two parameters of which the first parameter represent the array’s values and the second parameter represents the corresponding keys.
03: $extraparam: This is an optional parameter. It specifies an extra parameter to the user-defined function in addition to the two parameters, array keys and values.
RETURN VALUE: This function returns a boolean value. It returns TRUE on success or FALSE on failure.
 * https://www.geeksforgeeks.org/php-array_walk-function/
 * https://www.w3schools.com/php/func_array_walk.asp
 * https://www.php.net/manual/en/function.array-walk.php
 * https://www.javatpoint.com/post/php-array_walk-function
 */

 $num = [1, 2, 3, 4, 5];
 //01:
 function square( $n ) {
     echo "$n Squre = " . $n * $n . PHP_EOL;
 }
 array_walk( $num, 'square' );
 
 echo PHP_EOL;
 
 //02:
 array_walk( $num, function ( $n ) {
     echo "$n Power = " . $n * $n * $n . PHP_EOL;
 } );
 
 echo PHP_EOL;
 
 $fruits = array( "d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple" );
 
 //03:
 function myfunction( $value, $key ) {
     echo "$key = $value\n";
 }
 array_walk( $fruits, 'myfunction', );
 
 echo PHP_EOL;
 
 //04:
 function myfunction2( $value, $key, $p ) {
     echo "$key $p $value\n";
 }
 array_walk( $fruits, 'myfunction2', "has the value" );



/*=================================================================================================
---------------59 - array_filter() - Array Utility Functions - Very Important------------------------------> 
===================================================================================================*/

/* array_filter() - Array Utility Functions - Very Important */

/* ************** array_filter($array, $callback_function, $flag) ************
This built-in function in PHP is used to filter the elements of an array using a user-defined function which is also called a callback function. The array_filter() function iterates over each value in the array, passing them to the user-defined function or the callback function. If the callback function returns true then the current value of the array is returned into the result array otherwise not. This way the keys of the array gets preserved, i.e. the key of element in the original array and output array are same.
01: $array (mandatory): This refers to the input array on which the filter operation is to be performed.
02: $callback_function (optional): Refers to the user-defined function. If the function is not supplied then all entries of the array equal to FALSE , will be removed.
03: $flag (optional): Refers to the arguments passed to the callback function.
    -> "ARRAY_FILTER_USE_KEY" – passes key as the only argument to a callback function, instead of the value of the array.
    -> "ARRAY_FILTER_USE_BOTH" – passes both value and key as arguments to callback instead of the value.
 * https://www.geeksforgeeks.org/php-array_filter-function/
 * https://www.javatpoint.com/post/php-array_filter-function
 * https://www.php.net/manual/en/function.array-filter.php
 * https://www.w3schools.com/php/func_array_filter.asp
 */

 $num = [1, 2, 3, 4, 5];
 //01:
 function even($n)
 {
     return $n % 2 == 0;
 }
 $evenNum = array_filter($num, 'even');
 print_r($evenNum);
 
 echo PHP_EOL;
 
 //02:
 $oddNum = array_filter($num, fn ($n) => $n % 2 != 0);
 print_r($oddNum);
 
 echo PHP_EOL;
 
 
 $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
 //03:
 print_r(array_filter($arr, function ($k) {
     return $k == 'b';
 }, ARRAY_FILTER_USE_KEY));
 
 echo PHP_EOL;
 
 //04:
 print_r(array_filter($arr, function ($v, $k) {
     return $k == 'b' || $v == 4;
 }, ARRAY_FILTER_USE_BOTH));
 
 echo PHP_EOL;
 
 //05:
 $allNum = [0 => 'foo', 1 => false, 2 => -1, 3 => null, 4 => '', 5 => '0', 6 => 0,];
 print_r(array_filter($allNum));



/*=================================================================================================
----------------60 - array_map() - Array Utility Functions - Very Important-----------------------------> 
===================================================================================================*/

/* array_map() - Array Utility Functions - Very Important */

/* ************** array_map($callback, $array, ...$arrays) ************
The array_map() is an inbuilt function in PHP and it helps to modify all elements one or more arrays according to some user-defined condition in an easy manner. It basically, sends each of the elements of an array to a user-defined function and returns an array with new values as modified by that function.
Parameters used:
This function takes 2 compulsory parameter functionName and arr1 and the rest are optional.
01: functionName(mandatory): This parameter defines the name of the user-defined function according to which the values in the array will be modified.
02: arr1(mandatory): This parameter specifies the array to be modified.
03: arr2(mandatory): This parameter specifies the array to be modified.
The functionName parameter is compulsory and we can pass any number of arrays to this function named arr1, arr2.. arrn and so on.
 * https://www.php.net/manual/en/function.array-map.php
 * https://www.geeksforgeeks.org/php-array_map-function/
 * https://www.w3schools.com/php/func_array_map.asp
 * https://www.javatpoint.com/post/php-array_map-function
 */

// 01:
$names = array( "Alice", "Bob", "Charlie" );
$upper_names = array_map( "strtoupper", $names );
print_r( $upper_names );

// //02:
// $arr = array( 1, 2, 3, 4, 5 );
// function fun1( $v ) {
//     return ( $v + 7 ); // add 7
// }
// print_r( array_map( "fun1", $arr ) );

// // 03:
// $arr1 = array(1, 2, 3, 4, 5);
// $arr2 = array(1, 3, 3, 4, 8);
// function fun2($v1, $v2)
// {
//     if ($v1 == $v2) return 1;
//     else return 0;
// }
// print_r(array_map("fun2", $arr1, $arr2));

// // 04
// function userfunction($a1, $a2)
// {
//     if ($a1 === $a2) {
//         return "like";
//     }
//     return "unlike";
// }
// $x1 = array("sachin", "virat", "rahul");
// $x2 = array("pujara", "virat", "hardik");
// print_r(array_map("userfunction", $x1, $x2));

// // 05
// function show_Spanish( int $n, string $m ): string {
//     return "The number {$n} is called {$m} in Spanish";
// }
// $a = [1, 2, 3, 4, 5];
// $b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

// $c = array_map( 'show_Spanish', $a, $b );
// print_r( $c );

// // 06
// $x = [1, 2, 3, 4, 5];
// $y = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];
// function map_Spanish( int $n, string $m ): array
// {
//     return [$n => $m];
// }
// $d = array_map( 'map_Spanish', $x, $y );
// print_r( $d );

//07
// $a = [1, 2, 3, 4, 5];
// $b = ['one', 'two', 'three', 'four', 'five'];
// $c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

// $d = array_map( null, $a, $b, $c );
// print_r( $d );



/*=================================================================================================
------------------61 - array_reduce() - Array Utility Functions - Very Important---------------------------> 
===================================================================================================*/

/* count() - sizeof() - array_count_values() - array_unique()  */


$arr = array(
    "Java" => array(
        "SpringBoot",
        "Eclipse"
    ),
    "Python" => array(
        "Django"
    ),
    "PHP" => array(
        "CodeIgniter"
    )
);
/* ************** count(arr, mode) ************
count() method: The count() method is used to calculate all the elements in the array or any other countable object. It can be used for both uni-dimensional as well as multi-dimensional arrays. 
Parameters: This method accepts two parameters that are discussed below:
arr: The array to count the elements.
mode: Indicator to check whether or not to count all the elements –
    0 – Default. Does not count all elements of multidimensional arrays
    1 – Counts the array recursively (counts all the elements of multidimensional arrays)
 * https://www.w3schools.com/php/func_array_count.asp
 * https://www.php.net/manual/en/function.count.php
 * https://www.geeksforgeeks.org/what-is-the-different-between-count-and-sizeof-functions-in-php/
 */
echo "Count Sub elements of an array: " . count($arr) . "\n";
echo "Count All elements of an array: " . count($arr, 1) . "\n\n";




/* ************** sizeof(arr, mode) ************
sizeof() method: The sizeof() method is used to calculate all the elements present in an array or any other countable object. It can be used for both uni-dimensional as well as multi-dimensional arrays. 
Parameters: This method accepts two parameters that are discussed below:
arr: The array to count the elements.
mode: Indicator to check whether or not to count all the elements –
    0 – Default. Does not count all elements of multidimensional arrays
    1 – Counts the array recursively (counts all the elements of multidimensional arrays)
 * https://www.w3schools.com/php/func_array_sizeof.asp
 */
echo "Sizeof Sub elements of an array: " . sizeof($arr) . "\n";
echo "Sizeof All elements of an array: " . sizeof($arr, 1) . "\n\n";




/* ************** array_count_values(array) ************
array_count_values() is a PHP function that takes an array as its parameter and returns an associative array containing the count of each unique value in the original array.
The function counts the occurrences of each value in the array and returns an associative array with the keys being the unique values found in the input array, and the values being the number of times each value was found.
 * https://www.php.net/manual/en/function.array-count-values.php
 * https://www.w3schools.com/php/func_array_count_values.asp
 * https://www.geeksforgeeks.org/php-array_count_values-function/
 */
$array = array("Geeks", "for", "Geeks", "Geeks", "Welcome", "for");
$arrayValueCount = array_count_values($array);
print_r($arrayValueCount);


/* ************** array_unique($array, $flags) ************
"array_unique()" is a PHP function that takes an array as its parameter and returns a new array containing only the unique values from the input array.
The function removes all duplicate values from the input array and returns a new array with only the unique values. The order of the elements is preserved in the new array.
01- array: The input array.
02- flags: The optional second parameter flags may be used to modify the comparison behavior using these values:
    Comparison type flags:
     -> SORT_REGULAR - compare items normally (don't change types)
     -> SORT_NUMERIC - compare items numerically
     -> SORT_STRING - compare items as strings
     -> SORT_LOCALE_STRING - compare items as strings, based on the current locale.
 * https://www.php.net/manual/en/function.array-unique.php
 * https://www.w3schools.com/php/func_array_unique.asp
 */

//01:
$fruits = array('apple', 'banana', 'orange', 'apple', 'banana', 'kiwi', 'banana');
$unique_fruits = array_unique($fruits);
print_r($unique_fruits);

//02:
$arr = array("a" => "MH", "b" => "JK", "c" => "JK", "d" => "OR");
print_r(array_unique($arr));


/*=================================================================================================
----------61 - count() - sizeof() - array_count_values() - array_unique()-----------------------------------> 
===================================================================================================*/

/* list() - Array function
In PHP, list() is a language construct that allows you to assign variables in a single statement based on the values of an array or iterable. It is often used as a destructuring feature to extract individual values from an array or iterable and assign them to variables.
 * https://www.w3schools.com/php/func_array_list.asp
 * https://www.php.net/manual/en/function.list.php
 * https://www.geeksforgeeks.org/php-list-function/
 * https://www.javatpoint.com/post/php-array-list-function
 */

//01:
$fruits = array('apple', 'banana', 'orange', 'kiwi');
list($a, $b, $c, $d) = $fruits;
echo "$a, $b, $c, $d \n\n";

//02:
$person = ["Tufik", "Hasan", 25, "Bogura"];
list($fName, $lName) = $person;
echo "My name is $fName $lName\n\n";

//03:
list($x, $y, $z) = ["Bogura", "Dhaka", "Rajshahi"];
echo "$x, $y, $z \n\n";

//04: list() function can also be used with associative arrays, but with some limitations. Since associative arrays do not have a predictable order of keys, you cannot use list() to assign the values of the array to variables based on the key names.
$people = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);
list($name, $age, $city) = array_values($people);

echo $name . " "; // output: John
echo $age . " "; // output: 30
echo $city . " "; // output: New York


/*=================================================================================================
----------------62 - list() - Array function-----------------------------> 
===================================================================================================*/

/* list() - Array function
In PHP, list() is a language construct that allows you to assign variables in a single statement based on the values of an array or iterable. It is often used as a destructuring feature to extract individual values from an array or iterable and assign them to variables.
 * https://www.w3schools.com/php/func_array_list.asp
 * https://www.php.net/manual/en/function.list.php
 * https://www.geeksforgeeks.org/php-list-function/
 * https://www.javatpoint.com/post/php-array-list-function
 */

//01:
$fruits = array('apple', 'banana', 'orange', 'kiwi');
list($a, $b, $c, $d) = $fruits;
echo "$a, $b, $c, $d \n\n";

//02:
$person = ["Tufik", "Hasan", 25, "Bogura"];
list($fName, $lName) = $person;
echo "My name is $fName $lName\n\n";

//03:
list($x, $y, $z) = ["Bogura", "Dhaka", "Rajshahi"];
echo "$x, $y, $z \n\n";

//04: list() function can also be used with associative arrays, but with some limitations. Since associative arrays do not have a predictable order of keys, you cannot use list() to assign the values of the array to variables based on the key names.
$people = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);
list($name, $age, $city) = array_values($people);

echo $name . " "; // output: John
echo $age . " "; // output: 30
echo $city . " "; // output: New York


/*=================================================================================================
----------------63 - range(start, end, step) - Array function-----------------------------> 
===================================================================================================*/

/* range(start, end, step) - Array function
In PHP, the range() function is used to create an array containing a range of elements between a specified starting and ending point. The function takes two or three arguments:
 * https://www.php.net/manual/en/function.range.php
 * https://www.w3schools.com/Php/func_array_range.asp
 * https://www.geeksforgeeks.org/php-range-function/
 * https://www.javatpoint.com/post/php-array-range-function
 */

//01:
$numbers = range(1, 5);
print_r($numbers);

//02:
$oddNumber = range(1, 10, 2);
print_r($oddNumber);

echo "\n\n";

//03:
$nums = range(0, 5);
foreach ($nums as $num) {
    echo "$num, ";
}

echo "\n\n";

//04:
$nums = range(0, 50, 7);
foreach ($nums as $value) {
    if ($value > 0) {
        echo "$value, ";
    }
}


/*=================================================================================================
-----------64 - mt_rand(min,max) , rand(min,max) - Array function----------------------------------> 
===================================================================================================*/

/* mt_rand(min,max) , rand(min,max) - Array function
In summary, if you require a higher quality of randomness and more secure random numbers, you should use "mt_rand()" instead of "rand()". However, if you need a quick and simple way to generate random numbers for non-cryptographic purposes, "rand()" may be sufficient.
 * https://www.w3schools.com/php/func_math_mt_rand.asp
 * https://www.php.net/manual/en/function.mt-rand.php
 */

//01:
echo rand(1, 10) . PHP_EOL;
echo mt_rand(1, 10) . PHP_EOL;

//02:
$num = range(1, 30);
// count($num) . PHP_EOL; //30
$random = mt_rand(0, 29);

echo $num[$random] . PHP_EOL;

//03:
if ($num[$random] % 2 == 0) {
    echo "Tail\n";
} else {
    echo "Head\n";
}



/*=================================================================================================
-------------65 - shuffle(), array_rand() - Array function--------------------------------> 
===================================================================================================*/


/* shuffle(), array_rand() - Array function */


/* -------------- shuffle($array) -----------------------
The shuffle() Function is a builtin function in PHP and is used to shuffle or randomize the order of the elements in an array. This function assigns new keys for the elements in the array. It will also remove any existing keys, rather than just reordering the keys and assigns numeric keys starting from zero.
 * https://www.w3schools.com/php/func_array_shuffle.asp
 * https://www.php.net/manual/en/function.shuffle.php
 * https://www.geeksforgeeks.org/php-shuffle-function/
 */

//01:
$num = [1, 2, 3, 4, 5];
shuffle($num);
print_r($num);
// echo "Random number $num[2]\n";


/* -------------- array_rand(array, number) -----------------------
The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.
 * https://www.w3schools.com/php/func_array_rand.asp
 * https://www.php.net/manual/en/function.array-rand.php
 * https://www.javatpoint.com/post/php-array_rand-function
 */

//03: Associative array shuffling problems
$fruits = array("a" => "apple", "b" => "banana", "c" => "orange", "d" => "grape");
shuffle($fruits);
print_r($fruits);


// //03: 
// $n = range(1, 5);
// $k = array_rand($n);
// echo "Random number is " . $num[$k] . PHP_EOL;

// //04: 
// $fruits = array("a" => "apple", "b" => "banana", "c" => "orange", "d" => "grape");
// $key = array_rand($fruits);
// echo "Random fruits is " . $fruits[$key] . PHP_EOL;

// //05:
// $a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
// // print_r(array_rand($a, 1));
// print_r(array_rand($a, 2));


?>