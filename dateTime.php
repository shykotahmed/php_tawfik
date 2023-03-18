<?php
// PHP DATE AND TIME

/*=================================================================================================
-------------------01 - time() - microtime($boolean)--------------------------> 
===================================================================================================*/

/* time() - microtime($boolean)
In PHP, the time() function returns the current Unix timestamp, which represents the number of seconds that have elapsed since January 1, 1970, at 00:00:00 UTC.
//unix approach to unix timestamps
 * https://www.w3schools.com/php/func_date_time.asp
 * https://www.php.net/manual/en/function.time.php
 */

//01:
echo time() . PHP_EOL;
//02:
echo 'Now: ' . time() . PHP_EOL;
//03:
$timestamp = time();
echo date( "d/m/Y", $timestamp ) . PHP_EOL;

//04:
echo "Unix timestamps with micro seconds = " . microtime( true ) . PHP_EOL;
echo "Unix timestamps with micro seconds = " . microtime( false ) . PHP_EOL;
//05:
$mt = microtime( true );
printf( "%10.5f", $mt );
echo PHP_EOL;

//06:
$startTime = microtime( true );
factorial( 100 );
$endTime = microtime( true );

$executionTime = $endTime - $startTime;
printf( "%10.8f", $executionTime );

function factorial( $num ) {
    $result = 1;
    for ( $i = 1; $i <= $num; $i++ ) {
        $result *= $i;
    }
    return $result;
}

/*=================================================================================================
----------------02 - date() - Commonly use all date formats-----------------------------> 
===================================================================================================*/

date_default_timezone_set( 'Asia/Dhaka' );
/* date() - Commonly use all date formats
 * https://www.php.net/manual/en/dateinterval.format
 * https://www.w3schools.com/php/func_date_date_format.asp
 */

//--------- Hour -----------
//12-hour format - (1 to 12)
echo date( 'g' ) . "\n"; //9
//24-hour format - (00 to 23)
echo date( 'G' ) . "\n"; //9
//12-hour format - (01 to 12)
echo date( 'h' ) . "\n"; //09
//24-hour format - (00 to 23)
echo date( 'H' ) . "\n\n"; //09

//--------- Minutes -----------
//Leading zeros (00 to 59)
echo date( 'i' ) . "\n\n"; //08

//--------- Seconds -----------
//Leading zeros (00 to 59)
echo date( 's' ) . "\n\n"; //36

//--------- AM & PM -----------
//Lowercase
echo date( 'a' ) . "\n"; //am
echo date( 'A' ) . "\n\n"; //AM

//--------- Timezone identifier  -----------
echo date( 'e', ) . "\n"; //UTC

//--------- Week -----------
//Three letters
echo date( 'D' ) . "\n"; //sun
//Full textual
echo date( 'l' ) . "\n"; //Sunday
//Monday is represented by 1 and Sunday is represented by 7
echo date( 'N' ) . "\n"; //7
//A numeric representation of the day (0 for Sunday, 6 for Saturday)
echo date( 'w' ) . "\n"; //0
//The current week number of year
echo date( 'W' ) . "\n\n"; //10

//--------- Days -----------
//From 01 to 31 - leading 0
echo date( 'd' ) . "\n"; //12
//From 1 to 31 - without leading 0
echo date( 'j' ) . "\n\n"; //12

//----------- Month ----------
//Three letters
echo date( 'M' ) . "\n"; //Mar
//From 01 to 12 - leading 0
echo date( 'm' ) . "\n"; //03
//From 1 to 12 - without leading 0
echo date( 'n' ) . "\n"; //3
//Full textual
echo date( 'F' ) . "\n"; //March
//days in the given month
echo date( 't' ) . "\n\n"; //31

//--------- Year -----------
//Two digit
echo date( 'y' ) . "\n"; //23
//Four digit
echo date( 'Y' ) . "\n"; //2023

//---------- leap year return 1, otherwise 0 -------
echo date( 'L', strtotime( '2024-01-01' ) ) . "\n"; //1
//The day of the year (from 0 through 365)
echo date( 'z' ) . "\n"; //70
//ISO-8601 year number
echo date( 'o' ) . "\n\n"; //203

//--------- S ---------
//S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
echo date( "S" ) . "\n"; //th
echo "days " . date( 'jS' ) . "\n"; //12th
echo "days " . date( 'dS' ) . "\n\n"; //12th


/*=================================================================================================
---------------03 - date($format,$timeStamp) - Some example------------------------------> 
===================================================================================================*/

/* date($format,$timeStamp) - Some example
 * https://www.php.net/manual/en/function.date.php
 * https://www.geeksforgeeks.org/php-date-time/
 * https://www.w3schools.com/php/php_date.asp
 */

//----- week - day - month - year - Hour - Minute - second - AM/PM - Timezone ---
echo date( 'D-d-m-y g:i:s a e' ) . "\n"; //Mon-13-03-23 4:26:44 am UTC

echo date( 'N-jS-n-Y h:i:s A e' ) . "\n"; //1-13th-3-2023 04:29:46 AM UTC

echo date( 'l-j-M-Y G:i:s A e' ) . "\n"; //Monday-13-Mar-2023 4:26:19 AM UTC

echo date( 'w-dS-F-Y H:i:s A e' ) . "\n"; //1-13th-March-2023 04:30:51 AM UTC

//Current date +1 days
echo date( 'D-d-m-y g:i:s a e', time() + 24 * 60 * 60 ) . "\n"; //Tue-14-03-23 4:36:27 am UTC


/*=================================================================================================
--------------------04 - date time - commonly used function-------------------------> 
===================================================================================================*/

/* date time - commonly used function

 * https://www.w3schools.com/php/php_ref_date.asp
 * https://www.php.net/manual/en/function.date.php
 * 

 * time() - Return the current Unix timestamp
 * 
 * microtime(bool) - Return the current Unix timestamp with microseconds
 * 
 * mktime() - returns the Unix timestamp for a date
 * 
 * gmmktime() - returns the GMT Unix timestamp for a date
 * 
 * date(format,timestamp) - Return date and time
 * 
 * DateTime() - Object Representation of date and time.
 * 
 * date_default_timezone_set(timezone) - sets the default timezone
 * 
 * date_default_timezone_get() - returns the default timezone
 * 
 * date_diff(datetime1, datetime2) - returns the difference between two DateTime objects
 * 
 * strtotime(time, now); - parses an English textual datetime into a Unix timestamp
 * 
 * date_add(object, interval) - adds some days, months, years, hours, minutes, and seconds to a date
 * 
 * date_sub(object, interval) - subtracts some days, months, years, hours, minutes, and seconds from a date
 * 
 * date_create(time, timezone) - returns a new DateTime object
 * 
 * date_create_from_format(format, time, timezone) -  returns a new DateTime object formatted according to the specified format
 * 
 * checkdate(month, day, year) - is used to validate a Gregorian date
 * 
 * getdate(timestamp) - returns date/time information of a timestamp or the current local date/time
 * 
 * date_date_set(object, year, month, day) - sets a new date
 * 
 * date_interval_create_from_date_string(datetime) - sets up a DateInterval from the relative parts of the string
 * 
 * date_format(object, format) - Return a new DateTime object, and then format the date
 * 
 * date_timestamp_get() - Return the timezone of the given DateTime object

/*=================================================================================================
--------------05 - mktime(hour, minute, second, month, day, year)-------------------------------> 
===================================================================================================*/

/* mktime(hour, minute, second, month, day, year)
 * https://www.php.net/manual/en/function.mktime.php
 * https://www.w3schools.com/php/func_date_mktime.asp
 */

//01 Thu-23-03-23 2:10:30 am UTC
$timeStamp = mktime( 2, 10, 30, 3, 23, 2023 );
echo date( 'D-d-M-Y h:i:s A e', $timeStamp ) . "\n";

//02 Prints: October 3, 1975 was on a Friday
echo "October 3, 1975 was on a " . date( "l", mktime( 0, 0, 0, 10, 3, 1975 ) );



/*=================================================================================================
---------------06 - mktime(),gmmktime() - Generating Unix timestamps------------------------------> 
===================================================================================================*/

/* Generating Unix timestamps of any date, month, year, and GMT timestamp
 * https://www.w3schools.com/php/php_ref_date.asp
 * https://www.php.net/manual/en/function.date.php
 *
 */
//---------- 01 --------
//Default Unix timestamps from (1 January) to current time
echo time() . "\n";

//Generating Unix timestamps from (1 January) to (1 January 2000)
echo mktime( 0, 0, 0, 1, 2000 ) . "\n\n";

//---------- 02 --------
//Set timezone
date_default_timezone_set( 'Asia/Dhaka' );

//Generating Unix timestamps from (1 January) to (1 January 2000)
$timeStamp = mktime( 0, 0, 0, 1, 2000 );
echo $timeStamp . "\n";

//GMT Unix timestamps from (1 January) to (1 January 2000)
$gmtTimeStamp = gmmktime( 0, 0, 0, 1, 2000 );
echo $gmtTimeStamp . "\n\n";

echo "Difference GMT time to Bangladesh time = " . (  ( $gmtTimeStamp - $timeStamp ) / ( 60 * 60 ) ) . " hours\n\n";

//---------- 03 --------
$date1 = mktime( 0, 0, 0, 12, 31, 2022 );
$date2 = mktime( 0, 0, 0, 1, 31, 2023 );

echo "From Dec 31 2022 to jan 31 2023 Days = " . (  ( $date2 - $date1 ) / ( 60 * 60 * 24 ) );

/*=================================================================================================
----------------------07 - strtotime() - Parse about any English textual datetime-----------------------> 
===================================================================================================*/

/* strtotime() - Parse about any English textual datetime
"strtotime()" is a built-in PHP function that converts a human-readable date/time string into a Unix timestamp (i.e., the number of seconds since January 1, 1970, 00:00:00 UTC).
The "strtotime()" function accepts a string representing the date/time in various formats (such as "now", "tomorrow", "next Monday", "February 15th, 2022", "2022-02-15", etc.), and returns the corresponding Unix timestamp.
Here are some examples of the possible formats that you can use as the parameter of:
'2022-03-14'
'2022/03/14'
'14 Mar 2022'
'March 14, 2022'
'2022-03-14 14:30:00 America/New_York'
'2022-03-14T14:30:00+02:00'
'2022-03-14 to 2022-03-20'
'14:30:00'
'2:30pm'
'14h30m00s'
'14:30'
'2pm to 4pm'
'now'
'today'
'yesterday'
'last Month'
'tomorrow'
'next Monday'
'noon'
'midnight'
'last Monday to next Friday'
'+1 day'
'-1 week'
'+1 month'
'+1 year'
'+2 weeks'
'+2 hours'
'-30 minutes'
'first day of +1 month'
'last day of -1 month'
'first day of next month'
 * https://www.php.net/manual/en/function.strtotime.php
 * https://www.w3schools.com/php/func_date_strtotime.asp
 *
 */
date_default_timezone_set('Asia/Dhaka');

echo strtotime("now") . "\n";

echo strtotime("last Month") . "\n";

echo strtotime("next month") . "\n";

echo (strtotime("+1 week -2 days +72 hours") - strtotime("now")) / (86400), "\n";

echo date('jS-F-Y h:i:s a', strtotime('+3 days 2hours 5 minutes 23 seconds')) . "\n";

echo date('dS/M/Y h:i:s a', strtotime("midnight")) . "\n";

echo date('h:i:s a', strtotime("noon")) . "\n";

echo date('h:i:s a', strtotime("today 8pm")) . "\n";

echo date('dS.M.Y h:i:s a', strtotime("first day of -1 month")) . "\n";

echo date('dS.M.Y', strtotime("first friday dec 2022")) . "\n";

echo date('dS.M.Y', strtotime(" +7 day")) . "\n";

echo date('D-dS.M.Y h:i:s a', strtotime("12/5/1997")) . "\n";

echo date('dS.M.Y', strtotime("next friday end month")) . "\n";

echo date('D dS.M.Y h:i:s a', strtotime("now America/New_York")) . "\n";


/*=================================================================================================
------------08 - DateTime() Class - Date difference---------------------------------> 
===================================================================================================*/

/* DateTime() Class - Date difference
In PHP, the DateTime class is used to represent date and time values. This class allows you to create, manipulate, and format dates and times.
To create a DateTime object, you can use the new keyword and pass a string representing the date and time as the first argument to the constructor. The format of the string should match the desired output format.
 * https://www.php.net/manual/en/class.datetime.php
 *
 */

//Date difference using strtotime() function
$date1 = strtotime('1 jan 2023 12pm');
$date2 = strtotime('31 january 2023 12AM');
$defference = $date2 - $date1;
echo ($date2 - $date1) / (86400) . PHP_EOL;


//01: DateTime() - Date difference
$date1 = new DateTime('1 jan 2022 3pm');
$date2 = new DateTime('31 jan 2023 3pm');

$diff = $date1->diff($date2);
echo $diff->d . PHP_EOL;


//02: DateTime() - Date difference
$date1 = new DateTime('1 jan 2023 3pm');
$date2 = new DateTime('31 jan 2023 3pm');

$diff = $date1->diff($date2);
echo $diff->y > 0 ? $diff->y . PHP_EOL : "Zero\n";


//03: DateTime() - Date difference
$date1 = new DateTime('1 jan 2022');
$date2 = new DateTime('25 july 2023');

$diff = $date1->diff($date2);
echo $diff->d . " day " . $diff->m . " month " . $diff->y . " year " . PHP_EOL;


//04: DateTime() - Date difference
$date1 = new DateTime('1 jan 2022');
$date2 = new DateTime('25 july 2023');

$diff = $date1->diff($date2);
echo isPluralOrSingle($diff->d, "day") . isPluralOrSingle($diff->m, "month") . isPluralOrSingle($diff->y, "year") . PHP_EOL;


function isPluralOrSingle($number, $type)
{
    if ($number == 0) {
        return "";
    } elseif ($number > 1) {
        return "{$number} {$type}s ";
    } else {
        return "{$number} {$type} ";
    }
}


//----------
$date = new DateTime('2023-03-14 12:00:00');
$date->add(new DateInterval('P1D')); //1day plus
$formatted_date = $date->format('Y-m-d H:i:s');
echo $formatted_date;


/*=================================================================================================
----------------09 - date_diff() - Date difference-----------------------------> 
===================================================================================================*/

/* date_diff() - Date difference
 * https://www.geeksforgeeks.org/php-date_diff-function/
 * https://www.php.net/manual/en/datetime.diff.php
 * https://www.w3schools.com/php/func_date_date_diff.asp
 *
 */

 $date1 = new DateTime( '1 jan 2023' );
 $date2 = new DateTime( '31 january 2023' );
 
 //01:
 $diff = date_diff( $date1, $date2 );
 echo $diff->format( "%d" ) . PHP_EOL;
 
 //02:
 $diff = date_diff( $date1, $date2 );
 echo $diff->d . PHP_EOL;
 
 //03:
 $diff = date_diff( $date1, $date2 );
 
 echo isPluralOrSingle( $diff->d, "day" ) . isPluralOrSingle( $diff->m, "month" ) . isPluralOrSingle( $diff->y, "year" ) . PHP_EOL;
 
 function isPluralOrSingle( $number, $type ) {
     if ( $number == 0 ) {
         return "";
     } elseif ( $number > 1 ) {
         return "{$number} {$type}s ";
     } else {
         return "{$number} {$type} ";
     }
 }
 
 //04:
 $date1 = date_create( '1 jan 2023' );
 $date2 = date_create( '31 january 2023' );
 
 $diff = date_diff( $date1, $date2 );
 echo $diff->d . PHP_EOL;

/*=================================================================================================
--------------10 - date_create(), date_add(), date_sub(), date_format()-------------------------------> 
===================================================================================================*/

/* date_create(), date_add(), date_sub(), date_format()
-> date_create() - create a new DateTime object
-> date_add() - Alias of DateTime::add()
-> date_sub() - Alias of DateTime::sub()
-> date_format() - Alias of DateTime::format()
-> date_interval_create_from_date_string() — Alias of DateInterval::createFromDateString()
 * https://www.php.net/manual/en/ref.datetime.php
 * https://www.w3schools.com/php/php_ref_date.asp
 *
 */

// date_create()
$date = date_create( '2019-01-01' );
echo date_format( $date, 'Y-M-d' ) . PHP_EOL;

// date_add()
$date = date_create( '2019-01-01' );
date_add( $date, date_interval_create_from_date_string( '1 year 30 days' ) );
echo date_format( $date, 'Y-M-d' ) . PHP_EOL;

// date_sub()
$date = date_create( "2019-01-01" );
date_sub( $date, date_interval_create_from_date_string( "1 year 30 days" ) );
echo date_format( $date, "Y-M-d" );



?>