<?php
//----------------------PHP - Strings, Strings functions/methods----> 

/*=================================================================================================
--------------------------12 - How to Write Strings Differently in PHP.--------------------> 
===================================================================================================*/ 

/* How to Write Strings Differently in PHP -- 
 -> https://www.php.net/manual/en/language.types.string.php
 */

//01: Single-quoted string:
//Single-quoted strings are simpler and do not support escape sequences or variable interpolation. They are defined using single quotes (').
$name = "Tufik";
echo 'My name is  $name . This is a single-quoted string.';

echo "\n\n";

//02: Double-quoted string::
//Double-quoted strings in PHP allow for the use of escape sequences to include special characters and variables. They are defined using double quotes (").
$name = "Tufik";
echo "My name is $name. This is a double-quoted string.";

echo "\n\n";

//03: Heredoc string:
//Heredoc syntax allows for the creation of a string with multiple lines and variables without the need for concatenation or escape sequences. Heredoc syntax begins with <<< followed by an identifier, and ends with the same identifier on a new line. The identifier can be any valid label name, and must not be indented.
$name = "Tufik";
$age = 30;
$message = <<<EOT
My name is $name.
I am $age years old.
This is a heredoc string.
EOT;

echo $message;

echo "\n\n";

//04: Nowdoc string:
//Nowdoc syntax is similar to Heredoc, but it does not allow for variable interpolation or escape sequences. It is defined using single quotes (') and the same syntax as Heredoc, but with '<<<' instead of '<<'.
$name = "Tufik";
$age = 30;
$message = <<<'EOT'
My name is $name.
I am $age years old.
This is a nowdoc string.
EOT;

echo $message;





/*=================================================================================================
--------------------------12.0 - Heredoc - PHP text block syntax--------------------> 
===================================================================================================*/ 

/*
 ***** Heredoc PHP
Heredoc syntax is used in PHP to define a block of text that can contain any combination of letters, numbers, symbols, and even variables. It allows you to define a large block of text in a single statement, making your code more concise and easier to read.
 * https://www.php.net/manual/en/language.types.string.php
Some common use cases for heredoc syntax in PHP include:
-> Embedding HTML or other markup languages in your code
-> Writing SQL queries or other database-related statements
-> Embedding multiline text strings that would otherwise require cumbersome concatenation with the dot operator
-> Embedding a large block of text in a program or script that will be output to the user or displayed in some other way.
Overall, heredoc syntax can make your PHP code more efficient and easier to read, especially when you need to include large blocks of text.
 */
// ---------- SYNTAX -------
<<<YOUGIVEANYNAME
YOUGIVEANYNAME;

// ============ Started PHP Development Server - OPEN TERMINAL RUN [php -S localhost:8080] COMMAND
//01:
$passion = "laravel developer";
echo <<<EOD
    <h1>Example 01:</h1>
    <p>I am a $passion</p>
    <br/>
    EOD;

//02:
$fullName = <<<HH
    <h1>Example 02:</h1>
    <p>Tufik Hasan</p>
    <br/>
    HH;

echo $fullName;

//03:
$values = [<<<END
a
  b
    c
END,'d e f'];
var_dump( $values );

//04:
echo <<<END
      a
     b
    c
<br/>
END;

//05: Parse error: Invalid body indentation level
// different indentation for body (spaces) ending marker (tabs)

// echo <<<END
//     a
//  b
// c
//     END;




/*=================================================================================================
--------------------------12.1 - Accessing characters within a string--------------------> 
===================================================================================================*/ 

/* Accessing characters within a string */

$name = "Tufik Hasan";
echo $name . PHP_EOL;

echo $name[0] . PHP_EOL; //output = T

echo $name[6] . PHP_EOL; //output = H

echo $name[-4] . PHP_EOL; //output = a

echo $name[-1] . PHP_EOL; //output = n

//update string character
$name[5] = "_";
echo $name . PHP_EOL;


/*=================================================================================================
--------------------------12.2 - Commonly used string functions / methods--------------------> 
===================================================================================================*/ 

/* Commonly used string functions / methods -- 
* https://www.w3schools.com/php/php_ref_string.asp
* https://www.php.net/manual/en/ref.strings.php
 -> strlen() - Returns the length of a string
 -> substr() - Returns a part of a string
 -> str_word_count() - Count the number of words in a string
 -> strtolower() - Converts a string to lowercase letters
 -> strtoupper() - Converts a string to uppercase letters
 
 -> ucwords() - Converts the first character of each word in a string to uppercase
 
  -> ucfirst() - Converts the first character of a string to uppercase
 
  -> lcfirst() - Converts the first character of a string to lowercase
 -> str_repeat() - Repeats a string a specified number of times
 -> str_replace() - Replaces some characters in a string (case-sensitive)
 -> str_ireplace() - Replaces some characters in a string (case-insensitive)
 
 -> strpos() - Returns the position of the first occurrence of a string inside another string (case-sensitive)
 -> strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
 -> stripos() - Returns the position of the first occurrence of a string inside another string (case-insensitive)
 -> strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
 -> trim() - Removes whitespace or other characters from both sides of a string
 -> ltrim() - Removes whitespace or other characters from left sides of a string
 -> rtrim() - Removes whitespace or other characters from right sides of a string
 -> wordwrap() - Wraps a string to a given number of characters
 
 -> str_split() - Splits a string into an array
 
 -> explode() - Breaks a string into an array
 
 -> implode() - Returns a string from the elements of an array
 
 -> join() - Alias of implode()
 -> str_shuffle() - Randomly shuffles all characters in a string
 -> str_pad() - Pads a string to a new length
 
 -> vprintf() - Outputs a formatted string
 -> printf() - Outputs a formatted string
 -> nl2br() - Inserts HTML line breaks in front of each newline in a string
 -> md5() - Calculates the MD5 hash of a string
 -> md5_file() - Calculates the MD5 hash of a file
 -> sha1() - Calculates the SHA-1 hash of a string
 -> sha1_file() - Calculates the SHA-1 hash of a file
 -> chr() - Returns a character from a specified ASCII value
 -> ord() - Returns the ASCII value of the first character of a string
 -> bin2hex() - Converts a string of ASCII characters to hexadecimal values
 -> hex2bin() - Converts a string of hexadecimal values to ASCII characters
 */




/*=================================================================================================
--------------------------12.3 - PHP String functions--------------------> 
===================================================================================================*/ 

/*
====== PHP String functions ===========
The PHP string functions are part of the PHP core. No installation is required to use these functions.
-> https://www.w3schools.com/php/php_ref_string.asp
-> https://www.php.net/manual/en/ref.strings.php
*/

//01: The PHP strlen() function returns the length of a string.
echo strlen("String length"),"\n";      //output = 11

//02: Converts a string to uppercase letters
echo strtoupper("string upper"),"\n";   //output = STRING UPPER

//03: Converts a string to lowercase letters
echo strtolower("STRING LOWER"),"\n";   //output = string lower

//04: strrev() function reverses a string.
echo strrev("String reverse"),"\n";     //output = esrever gnirtS

//05: str_word_count() function counts the number of words in a string.
echo str_word_count("String word count"),"\n";  //output = 3

/*06:
strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
-> strpos(subject,)
*/
echo strpos("Tufik Hasan","Hasan"),"\n";    //output = 6
echo strpos("ABC","C"),"\n";    //output = 2

/*07:
str_replace() function replaces some characters with some other characters in a string.
-> str_replace(search,replace,subject)
*/
echo str_replace("Rakib","Tufik","Rakib Hasan"),"\n";    //output = Tufik Hasan
echo str_replace("B","R","ABCDB Bb"),"\n";    //output = ARCDEFGHRIJKLR

$challenge = '-aaa----b-c-----d--e---f';
echo str_replace('--', '-', $challenge)."\n";   //output = -aaa--b-c---d-e--f
echo preg_replace('/--+/', '-', $challenge)."\n";   //output = -aaa-b-c-d-e-f

/*08:
trim() function in PHP is used to remove whitespace or other specified characters from the beginning and end of a string.
*/
$hello = "    Hello World      ";
echo trim($hello),"\n";     // Output: "Hello, World"
//You can also specify which characters you want to remove by passing them as a second argument to the trim() function
$str = "Hello World!";
echo trim($str,"Hed!")."\n";  //output = llo Worl


//09: wordwrap() - Wrap a string into new lines when it reaches a specific length
echo wordwrap("Hello World",5)."\n"; 
/*output = 
Hello
World
*/

//10: join() - Join array elements with a string:
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."\n";   //output = Hello World! Beautiful Day!

//11: md5() - Calculate the MD5 hash of the string "Tufik"
echo md5("Tufik")."\n";     //output = 31006770c0afba01db5a7410cb306f7e

//12: md5() - Calculate the MD5 hash of the file "index.php"
echo md5_file("index.php")."\n";     //output = 38f5cafba953f4feb2bf6ee27e01abb6

//13: str_split() function splits a string into an array.
//syntax; str_split(string,length)
print_r(str_split("Tufik"));  //output = Array( [0] => T[1] => u[2] => f[3] => i[4] => k)
print_r(str_split("Tufik",3)); //output = Array([0] => Tuf[1] => ik)

//NOTE: print_r() is a PHP function used to print human-readable information about a variable. It can be useful for debugging and inspecting the contents of arrays and objects.




/*=================================================================================================
--------------------------12.4 - String functions--------------------> 
===================================================================================================*/ 

$a = "tufik hasan";

//ucwords() — Uppercase the first character of each word in a string
echo ucwords( $a ) . "\n";

//ucfirst() - Make a string's first character uppercase
echo ucfirst( $a ) . "\n";

//strtoupper() - Make a string uppercase
echo strtoupper( $a ) . "\n";

//Make a string lowercase
echo strtolower( $a ) . "\n";

//str_repeat() function repeats a string a specified number of times.
echo str_repeat( $a . " ", 3 ) . "\n";




/*=================================================================================================
--------------------------12.5 - String functions - explode,implode,join,str_split--------------------> 
===================================================================================================*/ 


/* PHP String functions:
 *
 * The PHP string functions are part of the PHP core. No installation is required to use these functions.
 *
 * https://www.w3schools.com/php/php_ref_string.asp
 * https://www.php.net/manual/en/ref.strings.php
 */

//------------------------------ explode(separator,string,limit) ---------------------------
//Break a string into an array:
//01:
$name = "Tufik Hasan";
$part = explode( " ", $name );

print_r( $part );

echo "{$part[0]}\n";
echo "{$part[1]}\n";

//02:
echo "\nUsing the limit parameter to return a number of array elements:\n";

$str = 'one,two,three,four';
// zero limit
print_r( explode( ',', $str, 0 ) );
echo "\n";
// positive limit
print_r( explode( ',', $str, 2 ) );
echo "\n";
// negative limit
print_r( explode( ',', $str, -1 ) );

//------------------------------ implode(separator,array) ---------------------------
//Join array elements with a string:
echo "\n\n";

$arr = array( 'Hello', 'World!', 'Beautiful', 'Day!' );
echo implode( " ", $arr );

//------------------------------ join(separator,array) ---------------------------
//Join array elements with a string:
echo "\n\n";

$arr = array( 'Hello', 'World!', 'Beautiful', 'Day!' );
echo join( "+", $arr );

//------------------------------ str_split(string,length) ---------------------------
//The str_split() function splits a string into an array.
echo "\n\n";
print_r( str_split( "Hello" ) );
print_r( str_split( "Hello", 3 ) );




/*=================================================================================================
--------------------------12.6 - strpos() - checking right way--------------------> 
===================================================================================================*/ 

/* strpos() - checking right way -- */

//strpos($haystack, $needle, ? $offset)

//01:
$name = "Tufik Hasan";
echo strpos( $name, 'T' ) . PHP_EOL;
echo strpos( $name, 'a', 8 ) . PHP_EOL;
//strpos() - important things
$str = "hello world";
$needle = "h";
$pos = strpos( $str, $needle );

if ( $pos ) {
    echo "'{$needle}' is present {$pos}\n";
} else {
    echo "'{$needle}' is not present\n";
}

// this is the right way to check
if ( $pos !== false ) {
    echo "'{$needle}' is present {$pos}\n";
} else {
    echo "'{$needle}' is not present\n";
}





/*=================================================================================================
--------------------------12.7 - Reversing strings--------------------> 
===================================================================================================*/ 
/* Reversing strings */

$name = "Tufik Hasan";

$len = strlen( $name );
//01:
for ( $i = 1; $i <= $len; $i++ ) {
    echo $name[$i * -1];
}

echo "\n";

//02:
for ( $i = $len - 1; $i >= 0; $i-- ) {
    echo $name[$i];
}

echo "\n";

//03:
echo strrev( $name );

echo "\n";

//word reverse
$strArr = explode( " ", $name );
foreach ( $strArr as $value ) {
    $wLen = strlen( $value );
    for ( $i = $wLen - 1; $i >= 0; $i-- ) {
        echo $value[$i];
    }
    echo " ";
}












/*=================================================================================================
--------------------------12.8 - chr(), ord() - Converting to & from ASCII--------------------> 
===================================================================================================*/ 

/* Custom Exception - Inheritance Exception class
 * https://www.php.net/manual/en/language.exceptions.extending.php
 * https://www.w3schools.com/php/php_exception.asp
 */

 $person = [
    "id"   => 0512,
    "name" => "Tufik",
    "sex"  => "female",
];
function myFunction( $array ) {
    if ( "male" == $array['sex'] ) {
        echo "Process\n";
    } else {
        throw new GenderException( $array );
    }
}

//custom exception
class GenderException extends Exception {
    private $person;
    public function __construct( $person ) {
        $this->person = $person;
        parent::__construct( "Gender not match\n" );
    }
    public function getGenderMessage() {
        echo "Gender misMatch person id {$this->person['id']}";
    }
}

try {
    myFunction( $person );
} catch ( GenderException $e ) {
    echo $e->getMessage();
    echo $e->getGenderMessage();
} catch ( Exception $e ) {
    echo $e->getMessage();
}



/*=================================================================================================
--------------------------12.9 - strtok() for tokening string--------------------> 
===================================================================================================*/ 

/* strtok( $string,$delimiters )
 *
"strtok()" is a string function in PHP that is used to tokenize a string. The function takes two arguments: the first argument is the input string to be tokenized, and the second argument is a string containing a list of delimiter characters.
The "strtok()" function returns a string token from the input string, where each token is defined as a sequence of characters delimited by one of the characters in the delimiter string. The function keeps track of the position within the input string where the last token ended, so that subsequent calls to "strtok()" can continue tokenizing the input string from where the previous call left off.
 *
 * https://www.w3schools.com/php/func_string_strtok.asp
 * https://www.php.net/manual/en/function.strtok.php
 * https://www.geeksforgeeks.org/php-strtok-for-tokening-string/
 */

//01:
// $name = "My name is Tufik Hasan";
// $token = strtok( $name, " " );
// while ( $token !== false ) {
//     echo $token . PHP_EOL;
//     $token = strtok( " ," );
// }

//02:
// $string = "The quick brown fox,jumped over the lazy-dog";
// $token = strtok( $string, " " );
// while ( $token !== false ) {
//     echo $token . PHP_EOL;
//     $token = strtok( " " );
// }

//03:
// $string = "The quick brown fox,jumped over the lazy-dog";
// $token = strtok( $string, " ," );
// while ( $token !== false ) {
//     echo $token . PHP_EOL;
//     $token = strtok( " ," );
// }

//03:
$string = "The quick-brown fox,jumped over the lazy-dog";
$token = strtok( $string, " ,-" );
while ( $token !== false ) {
    echo $token . PHP_EOL;
    $token = strtok( " ,-" );
}


/*=================================================================================================
--------------------------12.10 - str_replace() - str_ireplace()--------------------> 
===================================================================================================*/ 


/* str_replace($search, $replace, $string, $count)
 *
"str_replace()" is a built-in PHP function used to replace all occurrences of a search string with a replacement string within a given string. The function takes three mandatory arguments and an optional fourth argument:
 *
 * https://www.php.net/manual/en/function.str-replace.php
 * https://www.w3schools.com/php/func_string_str_replace.asp
 * https://www.geeksforgeeks.org/php-str_replace-function/
 * https://www.javatpoint.com/php-string-str_replace-function
 */

//01:
$string = "The quick brown fox jumped over the lazy dog";
$replace = str_replace( "dog", "cat", $string );
echo $replace . PHP_EOL;

//02:
// $string = "The quick brown fox jumped over the lazy dog";
// $replace = str_replace( "dog", "cat", $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//03:
// $string = "The brown brown fox jumped over the lazy dog dog";
// $replace = str_replace( array( "brown", "dog" ), array( "red", "cat" ), $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//04:
// $string = "The brown brown fox jumped over the lazy dog dog";
// $replace = str_replace( ["brown", "dog"], ["red", "cat"], $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//05:
// $string = "fox dog";
// $replace = str_replace( ["fox", "dog"], "cat", $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//06:
// $string = "fox Fox Dog dog";
// $replace = str_replace( ["fox", "dog"], "cat", $string, $count );
// echo $replace . PHP_EOL;
// echo "Total replace : $count\n";

//07: case insensitive
$string = "fox Fox Dog dog";
$replace = str_ireplace( ["fox", "dog"], "cat", $string, $count );
echo $replace . PHP_EOL;
echo "Total replace : $count\n";


/*=================================================================================================
--------------------------12.11 - trim($string, $characters) - ltrim() - rtrim()--------------------> 
===================================================================================================*/ 

/* trim($string, $characters) - ltrim() - rtrim()
 *
"trim()" is a built-in function that is used to remove whitespace (or other characters) from the beginning and end of a string.
01: The first parameter "$string" is the input string that you want to trim.
02: The second parameter "$characters" is optional and specifies the characters you want to remove from the string. By default, trim() removes the following characters:
-> space
-> tab
-> newline
-> carriage return
-> null character
-> vertical tab
You can specify any other characters that you want to remove by passing them as a string to the "$characters" parameter.
The "trim()" function returns the trimmed string. Note that the original string is not modified by the function; a new trimmed string is returned.
 *
 * https://www.php.net/manual/en/function.trim.php
 * https://www.w3schools.com/php/func_string_trim.asp
 * https://www.geeksforgeeks.org/php-trim-function/
 */

//01:
$string = "  Tufik Hasan  ";
echo trim( $string );

//02:
// $string = "  Tufik \n";
// echo trim( $string );
// echo "Hasan";

//03:
// $string = "  Tufik \n";
// echo trim( $string, " " );
// echo "Hasan";

//04:
// $string = "  Tufik \n";
// echo trim( $string, "\n" );
// echo "Hasan";

//05:
// $string = "  Tufik \n";
// echo trim( $string, " \n" );
// echo "Hasan";

//06:
// $string = "  .Tufik, \n";
// // echo trim( $string, " \n," );
// echo trim( $string, "., \n" );
// echo "Hasan";

//08: right trim
// $string = "  Tufik Hasan  ";
// echo rtrim( $string );

//07: left trim
// $string = "  Tufik Hasan  ";
// echo ltrim( $string );



/*=================================================================================================
--------------------------12.12 - wordwrap ($str, $width, $break, $cut )--------------------> 
===================================================================================================*/ 

/* wordwrap ($str, $width, $break, $cut )
 *
Wraps a string to a given number of characters using a string break character.
Here's what each parameter means:
-> "$str" (required): The input string to wrap.
-> "$width" (required): The number of characters at which to wrap the string.
-> "$break" (optional): The character or string to use for line breaks. The default value is "\n" (newline).
-> "$cut" (optional): A boolean flag indicating whether to cut words that are longer than the specified width. The default value is false.
Note: This function may leave white spaces at the beginning of a line.
 *
 * https://www.php.net/manual/en/function.wordwrap.php
 * https://www.geeksforgeeks.org/php-wordwrap-function/
 * https://www.w3schools.com/php/func_string_wordwrap.asp
 */

//01:
$str = "The function returns a string wrapped upto specified length";
$wrap = wordwrap( $str, 30 );
echo $wrap;

echo "\n\n";

//02:
$str = "readerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
$wrap = wordwrap( $str, 30 );
echo $wrap;

echo "\n\n";

//03:
$str = "readerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
$wrap = wordwrap( $str, 30, "\n", true );
echo $wrap;

//04: Use <br/> for browser
// $str = "It is a long established fact that a readerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr will be distracted by the readable content of a page when looking at its layout";
// $wrap = wordwrap( $str, 30, "<br />", true );
// echo $wrap;




/*=================================================================================================
--------------------------12.13 - nl2br() - Convert newline character to HTML line break--------------------> 
===================================================================================================*/ 

/* nl2br($string,xhtml) - Convert newline character to HTML line break
 *
In PHP, the "nl2br()" function is used to convert newline characters "(\n)" to HTML line breaks "(<br>)". This is often used to display text that has been entered by a user with line breaks in a web page.
In normal text editors, the new line is generally denoted by using any of the following.
\n\r
\r\n
\n
\r
 01: string: Required. Specifies the string to check
 02: xhtml: Optional. A boolean value that indicates whether or not to use XHTML compatible line breaks:
    -> TRUE- Default. Inserts <br />
    -> FALSE - Inserts <br>
 *
 * https://www.php.net/manual/en/function.nl2br.php
 * https://www.w3schools.com/php/func_string_nl2br.asp
 * https://www.geeksforgeeks.org/php-nl2br-function/
 */

//01:
echo nl2br("One line.\nAnother line.");

echo "\n\n";

//02:
echo nl2br("One line.\nAnother line.", false);

echo "\n\n";

//03:
echo nl2br("One line.\nAnother line.", true);



/*=================================================================================================
--------------------------12.14 - sscanf() - parse a string according to a specified format.--------------------> 
===================================================================================================*/ 


/* sscanf() - parse a string according to a specified format.
 *
The "sscanf()" function parses input from a string according to a specified format. The sscanf() function parses a string into variables based on the format string.
If only two parameters are passed to this function, the data will be returned as an array. Otherwise, if optional parameters are passed, the data parsed are stored in them. If there are more specifiers than variables to contain them, an error occurs. However, if there are less specifiers than variables, the extra variables contain NULL.
SYNTAX: sscanf(string,format,arg1,arg2,arg++)
 *
 * https://www.php.net/manual/en/function.sscanf.php
 * https://www.w3schools.com/php/func_string_sscanf.asp
 * https://www.javatpoint.com/php-string-sscanf-function
 */

//01:
$string = "Tufik Hasan 01521489753 tufikhasan05@gmail.com";
$info = sscanf($string, "%s %s %11s %s");
print_r($info);

//02:
$string = "Tufik Hasan 01521489753 tufikhasan05@gmail.com";
sscanf($string, "%s %s %11s %s", $fName, $lName, $mobile, $gmail);
echo "Firstname = $fName, Lastname = $lName\n";
echo $gmail;

echo "\n";

//03: hexa to decimal code
$hexColor = "#FF36Fc";
sscanf($hexColor, "#%2x %2x %2x", $red, $green, $blue);
echo $red . $green . $blue;





























?>
