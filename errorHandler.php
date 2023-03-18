<?php
//PHP EXCEPTION ERROR HANDLER


/*=================================================================================================
--------------01 - PHP Exception error handler - introduction------------------------------> 
===================================================================================================*/

/* PHP Exception error handler - introduction
 * https://www.php.net/manual/en/language.exceptions.php
 * https://www.w3schools.com/php/php_exceptions.asp
 * https://www.javatpoint.com/exception-handling-in-php
 *
 */

//01:
function ageCounter( $age ) {
    if ( $age <= 15 ) {
        return throw new Exception( "You are not Adult" );

    } elseif ( $age > 40 ) {
        return throw new Exception( 'You are old' );
    }
}
try {
    ageCounter( 4 );
} catch ( Exception $e ) {
    echo $e->getMessage();
} finally {
    echo "\nFinally run all time\n";
}

// //02:
// function inverse( $x ) {
//     if ( !$x ) {
//         throw new Exception( 'Division durch Null.' );
//     }
//     return 2 * $x;
// }

// try {
//     echo inverse( 5 ) . "\n";
//     echo inverse( 0 ) . "\n";
// } catch ( Exception $e ) {
//     echo 'Exception: ', $e->getMessage(), "\n";
// }

// //03:
// function ageCounter( $age ) {
//     if ( $age <= 15 ) {
//         return throw new Exception( "You are not Adult", 401 );

//     } elseif ( $age > 40 ) {
//         return throw new Exception( 'You are old', 401 );
//     }
// }
// try {
//     ageCounter( 4 );
// } catch ( Exception $e ) {
//     echo $e->getMessage() . PHP_EOL;
//     echo $e->getCode() . PHP_EOL;
//     echo $e->getLine() . PHP_EOL;
// }

// //04:
// function ageCounter( $age ) {
//     if ( $age <= 15 ) {
//         return throw new Exception( "You are not Adult", 401 );

//     } elseif ( $age > 40 ) {
//         return throw new Exception( 'You are old', 401 );
//     }
// }
// try {
//     ageCounter( 4 );
// } catch ( Exception $e ) {
//     echo $e->getMessage() . PHP_EOL;
//     echo $e->getCode() . PHP_EOL;
//     echo $e->getLine() . PHP_EOL;
//     echo $e->getFile() . PHP_EOL;
//     print_r( $e->getTrace() );
//     print_r( $e );
// }




/*=================================================================================================
-------------02 - Exception - Custom Exceptions-------------------------------> 
===================================================================================================*/

/* PHP Exception - Custom Exceptions
A custom exception is an exception class that you define yourself in your code. It allows you to create specific error conditions that are unique to your application, and can be used to handle errors in a more granular way.
 * https://www.php.net/manual/en/language.exceptions.extending.php
 *
 */

//01:
Class MyException extends Exception {}
Class NetworkException extends Exception {}

function testException() {
    return throw new MyException();
}

try {
    testException();
} catch ( MyException $e ) {
    echo "MyException caught";
} catch ( NetworkException $e ) {
    echo "NetworkException caught";
}

// //02:
// Class MyException extends Exception {}
// Class NetworkException extends Exception {}

// function testException() {
//     return throw new NetworkException();
// }

// try {
//     testException();
// } catch ( MyException $e ) {
//     echo "MyException caught";
// } catch ( NetworkException $e ) {
//     echo "NetworkException caught";
// }

// //03: do not use exception in first catch
// Class MyException extends Exception {}
// Class NetworkException extends Exception {}

// function testException() {
//     return throw new NetworkException();
// }

// try {
//     testException();
// } catch ( Exception $e ) {
//     echo "Exception caught";
// } catch ( MyException $e ) {
//     echo "MyException caught";
// } catch ( NetworkException $e ) {
//     echo "NetworkException caught";
// }

// //04: Always try to use Exception in last catch
// Class MyException extends Exception {}
// Class NetworkException extends Exception {}

// function testException() {
//     return throw new MyException();
// }

// try {
//     testException();
// } catch ( MyException $e ) {
//     echo "MyException caught";
// } catch ( NetworkException $e ) {
//     echo "NetworkException caught";
// } catch ( Exception $e ) {
//     echo "Exception caught";
// }



/*=================================================================================================
--------------03 - Exception - Custom Exception examples------------------------------> 
===================================================================================================*/

/* PHP Exception - Custom Exception 2
 * https://www.php.net/manual/en/language.exceptions.extending.php
 *
 */
class ServerLoadException extends Exception {}
class NetworkException extends Exception {}
class DiskFullException extends Exception {}

//Network interface create
interface NetworkStorage {
    function connect();
    function getName();
}

class MySQLServer implements NetworkStorage {
    function connect() {
        throw new NetworkException;
    }
    function getName() {
        return "MySQL";
    }
}
class PostgreSQLServer implements NetworkStorage {
    function connect() {
        throw new DiskFullException;
    }
    function getName() {
        return "PostgreSQL";
    }
}
class MSSQLServer implements NetworkStorage {
    function connect() {
        return $this;
    }
    function getName() {
        return 'MSSQL';
    }
}

class ConnectionPool {
    private $storage;
    private $connection;
    public function __construct() {
        $this->storage = array();
    }
    public function addStorage( NetworkStorage $storage ) {
        array_push( $this->storage, $storage );
    }
    function getConnection() {
        foreach ( $this->storage as $storage ) {
            try {
                $this->connection = $storage->connect();
            } catch ( ServerLoadException $e ) {
                echo "{$storage->getName()} is facing server loading error\n";
            } catch ( NetworkException $e ) {
                echo "{$storage->getName()} is having some trouble with it's networks\n";
            } catch ( DiskFullException $e ) {
                echo "{$storage->getName()} has it's disk full\n";
            }
            if ( $this->connection ) {
                break;
            }
        }
        if ( $this->connection ) {
            return $this->connection;
        }
        return false;
    }
}

$mySql = new MySQLServer();
$PostgreSQL = new PostgreSQLServer();
$MSSQL = new MSSQLServer();

$cp = new ConnectionPool();

$cp->addStorage( $mySql );
$cp->addStorage( $PostgreSQL );
$cp->addStorage( $MSSQL );

$conn = $cp->getConnection();
print_r( $conn );



/*=================================================================================================
-----------04 - Custom Exception - Inheritance Exception class---------------------------------> 
===================================================================================================*/





/*=================================================================================================
----------05 - error_reporting() - settings & error reporting----------------------------------> 
===================================================================================================*/

/* error_reporting() - settings & error reporting
The error_reporting() is a pre-defined function of PHP. It allows you to control how many and which PHP errors will be reported. As we already discussed that PHP has several levels of errors. Using the error_reporting() function sets that level for the duration of your current script.
 * https://www.php.net/manual/en/function.error-reporting.php
 * https://www.w3schools.com/php/func_error_reporting.asp
 * https://www.javatpoint.com/php-error_reporting
 *
 */

// //01: Turn off all error reporting
// error_reporting( 0 );
// echo $name; //Warning error
// echo "gf" / 5; //fatal error


// //02: Report all PHP errors
// error_reporting( E_ALL );
// echo $name; //Warning error
// echo 12 / 0; //fatal error


// //03: Report all PHP errors
// error_reporting(-1);
// echo $name; //Warning error
// echo 12 / 0; //fatal error


// //04: Show only Warning error
// error_reporting( E_WARNING );
// echo $name; //Warning error
// echo 12 / 0; //error


// //05: Show only Warning error & Fatal error - You can show multiple error
// error_reporting( E_WARNING | E_ERROR );
// echo $name; //Warning error
// echo 12 / 0; //error


// //06: Report all errors except E_ERROR
// error_reporting(E_ALL & ~E_ERROR);
// echo $name; //Warning error
// echo 12 / 0; //error



/*=================================================================================================
---------06 - error_reporting() settings using ini_set() function-----------------------------------> 
===================================================================================================*/

/* error_reporting() - using in_set() function
 * https://www.php.net/manual/en/function.error-reporting.php
 */

//----------------- Turn Off all error ----------
//01:
ini_set('display_errors', 'Off');
echo $name;
echo 12 / 0;

// //02:
// ini_set('display_errors', 0);
// echo $name;
// echo 12 / 0;

//------------------ Turn On all error --------------
// //01
// ini_set('display_errors', 'On');
// echo $name;
// echo 12 / 0;

// //02
// ini_set('display_errors', 1);
// echo $name;
// echo 12 / 0;


//------------------ Report all errors --------------
// ini_set('error_reporting', E_ALL);
// echo $name;
// echo 12 / 0;


//------------------ Report Only Warning errors --------------
// ini_set('error_reporting', E_WARNING);
// echo $name;
// echo 12 / 0;


//------------------ Report errors (E_WARNING,E_ERROR,E_NOTICE) --------------
// ini_set('error_reporting', E_WARNING | E_ERROR | E_NOTICE);
// echo $name;
// echo 12 / 0;


//------------------ Report all errors except Warning --------------
// ini_set('error_reporting', E_ALL & ~E_WARNING);
// echo $name;
// echo 12 / 0;




/*=================================================================================================
-------------07 - error_reporting() - manually settings (php.ini)-------------------------------> 
===================================================================================================*/

/* error_reporting() - manually settings (php.ini) 
In PHP, you can also set the error reporting level in the php.ini configuration file, which applies to all scripts running on the server. The php.ini file is usually located in the /etc directory on Unix-like systems or in the PHP installation directory on Windows.
To set the error reporting level in php.ini, look for the error_reporting directive and set its value to the desired level of error reporting.
 */

/* 
01: Open terminal and run below command to find (php.ini) file path
 => php --ini
02: Get php.ini file path run below code
echo "The location of php.ini is: " . get_cfg_var('cfg_file_path')."\n";
echo "The location of php.ini is: " . php_ini_loaded_file()."\n";
*/

/* ---------- Open (php.ini) file notepad and error settings ----
//default set error on
display_errors = On

//Turn off all error
display_errors = Off

//Show all Error
error_reporting(E_ALL);

//Show only (E_ERROR,E_WARNING,E_NOTICE) Error
error_reporting(E_ERROR | E_WARNING | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting = E_ALL & ~E_NOTICE



/*=================================================================================================
----------08 - Log Errors to a Text File - using ini_set()----------------------------------> 
===================================================================================================*/

/* Log Errors to a Text File with PHP
 * https://www.php.net/manual/en/function.error-reporting.php
 */

//*************** Error log - run this **********
ini_set("log_errors", 1);
ini_set("error_log", dirname(__FILE__) . "/log.txt");
// ini_set("display_errors", 1);
// ini_set("error_reporting", E_ALL);
echo $name;



/*=================================================================================================
--------09 - error_log() - function sends an error message to a log, to a file, or to a mail account------------------------------------> 
===================================================================================================*/

/* error_log(message, type, destination, headers);
The error_log() function sends an error message to a log, to a file, or to a mail account.
error_log(message, type, destination, headers)
 * message - Required. Specifies the error message to log
 * type - Optional. Specifies where the error message should go. Possible values:
    -> 0 - Default. Message is sent to PHP's system logger, using the OS' system logging mechanism or a file, depending on what the error_log configuration is set to in php.ini
    -> 1 - Message is sent by email to the address in the destination parameter
    -> 2 - No longer in use (only available in PHP 3)
    -> 3 - Message is appended to the file specified in destination
    -> 4 - Message is sent directly to the SAPI logging handler
 * destination	Optional. Specifies the destination of the error message. This value depends on the value of the type parameter
 * headers	Optional. Only used if the type parameter is set to 1. Specifies additional headers, like From, Cc, and Bcc. Multiple headers should be separated with a CRLF (\r\n)
 * https://www.w3schools.com/php/func_error_log.asp
 * https://www.php.net/manual/en/function.error-log.php
//find (php.ini) file path Using command
 => php --ini
                OR
// Get php.ini file path run below code
echo get_cfg_var('cfg_file_path');
echo php_ini_loaded_file();
//---------------- Open (php.ini) file -----------
// default log errors On - It is always on
log_errors = On
//Default Error log set commented and value = syslog
;error_log = syslog
//Create a new error file name as you want and link it
error_log = C:\php\tmp\error_log.txt
*/
//------------ EXAMPLES ----------------------
echo ini_get('error_log');

//01: Message is sent to PHP's system logger
error_log("This is an error");

// //02: send mail
// echo ini_get('error_log');
// $headers = "From: system@server.com \r\n";
// $headers .= "Content-Type: text/html; charset: ISO-8859-1\r\n";
// error_log("This is an error", 1, "server@gmail.com", $headers);

//03: Message is appended to the file specified destination
error_log("This is an error \n", 3, "./log.txt");



/*=================================================================================================
---------10 - set_error_handler() - restore_error_handler()-----------------------------------> 
===================================================================================================*/

/* set_error_handler() - restore_error_handler()
 * https://www.w3schools.com/php/func_error_set_error_handler.asp
 * https://www.php.net/manual/en/function.set-error-handler.php
 * 
 * https://www.w3schools.com/php/func_error_restore_error_handler.asp
 * https://www.php.net/manual/en/function.restore-error-handler.php
 */

// //01: 
// // A user-defined error handler function
// function myErrorHandler($errno, $errstr, $errfile, $errline)
// {
//     echo "<b>Error No:</b> [$errno] <br> Error Message: $errstr<br>";
//     echo " Error on line $errline <br> File: $errfile<br>";
// }

// // Set user-defined error handler function
// set_error_handler("myErrorHandler");
// echo $name;


// //02:
// function myErrorHandler($errno, $errstr, $errfile, $errline)
// {
//     switch ($errno) {
//         case E_NOTICE:
//             echo "<b>Notice:</b> [$errno] <br> Message: $errstr<br>";
//             break;
//         default:
//             echo "<b>Error:</b> [$errno] <br> Message: $errstr<br>";
//             echo " On line $errline <br> File: $errfile<br>";
//     }
// }
// set_error_handler("myErrorHandler");
// echo $name;


// //03: All Error handler
// function myErrorHandler($errno, $errstr, $errfile, $errline)
// {
//     echo nl2br("<b>Error No:</b> [$errno] \n Error Message: $errstr\n");
//     echo nl2br("Error on line $errline \n File: $errfile\n\n");
// }

// set_error_handler("myErrorHandler");
// // Trigger error throw a custom error
// trigger_error("A custom error has been triggered");



// ------------ Restore Error Handler ---------
// // 01:
// function myErrorHandler($errno, $errstr, $errfile, $errline)
// {
//     echo nl2br("<b>Error No:</b> [$errno] \n Error Message: $errstr\n");
//     echo nl2br("Error on line $errline \n File: $errfile\n\n");
// }

// set_error_handler("myErrorHandler");
// echo $name;

// // Trigger error again
// if ($test > 1) {
//     trigger_error("A custom error has been triggered");
// }


// //02: Restore Error Handler
// function myErrorHandler($errno, $errstr, $errfile, $errline)
// {
//     echo nl2br("<b>Error No:</b> [$errno] \n Error Message: $errstr\n");
//     echo nl2br("Error on line $errline \n File: $errfile\n");
// }
// // Set user-defined error handler function
// set_error_handler("myErrorHandler");
// echo $name;

// // Restore previous error handler
// restore_error_handler();

// // Trigger error again
// if ($test > 1) {
//     trigger_error("A custom error has been triggered");
// }



/*=================================================================================================
------11 - set_exception_handler() - restore_exception_handler()--------------------------------------> 
===================================================================================================*/

/* set_exception_handler() - restore_exception_handler()
 * https://www.php.net/manual/en/function.set-exception-handler
 * https://www.w3schools.com/php/func_error_set_exception_handler.asp
 *
 * https://www.php.net/manual/en/function.restore-exception-handler
 * https://www.w3schools.com/php/func_error_restore_exception_handler.asp
 */

//----------- Set Exception Handler -------------
function myException($exception)
{
    echo "<b>Code:</b> ", $exception->getCode() . "<br>";
    echo "<b>Message:</b> ", $exception->getMessage() . "<br>";
    echo "<b>Line:</b> ", $exception->getLine() . "<br>";
    echo "<b>File:</b> ", $exception->getFile() . "<br>";
}

// Set user-defined exception handler function
set_exception_handler("myException");

// Throw exception
throw new Exception("Not Found", 404);




// ------------ Restore Exception Handler ---------
// //01:
// function myException1( $exception ) {
//     echo __FUNCTION__ . "<br>";
//     echo "<b>Code:</b> ", $exception->getCode() . "<br>";
//     echo "<b>Message:</b> ", $exception->getMessage() . "<br>";
//     echo "<b>Line:</b> ", $exception->getLine() . "<br>";
//     echo "<b>File:</b> ", $exception->getFile() . "<br>";
// }
// function myException2( $exception ) {
//     echo __FUNCTION__ . "<br>";
//     echo "<b>Code:</b> ", $exception->getCode() . "<br>";
//     echo "<b>Message:</b> ", $exception->getMessage() . "<br>";
//     echo "<b>Line:</b> ", $exception->getLine() . "<br>";
//     echo "<b>File:</b> ", $exception->getFile() . "<br>";
// }

// // Set user-defined exception handler function
// set_exception_handler( "myException1" );
// set_exception_handler( "myException2" );

// // Throw exception
// throw new Exception( "Not Found", 404 );


// //02:
// function myException1( $exception ) {
//     echo __FUNCTION__ . "<br>";
//     echo "<b>Code:</b> ", $exception->getCode() . "<br>";
//     echo "<b>Message:</b> ", $exception->getMessage() . "<br>";
//     echo "<b>Line:</b> ", $exception->getLine() . "<br>";
//     echo "<b>File:</b> ", $exception->getFile() . "<br>";
// }
// function myException2( $exception ) {
//     echo __FUNCTION__ . "<br>";
//     echo "<b>Code:</b> ", $exception->getCode() . "<br>";
//     echo "<b>Message:</b> ", $exception->getMessage() . "<br>";
//     echo "<b>Line:</b> ", $exception->getLine() . "<br>";
//     echo "<b>File:</b> ", $exception->getFile() . "<br>";
// }

// // Set user-defined exception handler function
// set_exception_handler( "myException1" );
// set_exception_handler( "myException2" );

// restore_exception_handler();

// // Throw exception
// throw new Exception( "Not Found", 404 );


/*=================================================================================================
--------12 - Fatal error handle - register_shutdown_function()------------------------------------> 
===================================================================================================*/

/* Fatal error handle - register_shutdown_function()
 * https://www.php.net/manual/en/function.register-shutdown-function.php
 */

//01:
// Turn of all error
ini_set('display_errors', 0);

//fatal error handler function
function fatal_error_handle()
{
    $error = error_get_last();
    if ($error) {
        echo "Fatal error\n";
        echo "Line: " . $error['line'] . "\n";
        echo "File: " . $error['file'] . "\n";
        // echo "Type: " . $error['type'] . "\n";
        // echo "Message: " . $error['message'] . "\n";
    }
}

//Register a function for execution on shutdown
register_shutdown_function('fatal_error_handle');

echo 12 / 0; //fatal error



// //02: Not working only recursion function
// //Turn of all error
// ini_set('display_errors', 0);

// //fatal error handler function
// function fatal_error_handle()
// {
//     $error = error_get_last();
//     if ($error) {
//         echo "Fatal error";
//     }
// }

// //Register a function for execution on shutdown
// register_shutdown_function('fatal_error_handle');

// function recursion()
// {
//     recursion();
// }



/*=================================================================================================
---------13 - Backtracing for Debugging-----------------------------------> 
===================================================================================================*/















?>
