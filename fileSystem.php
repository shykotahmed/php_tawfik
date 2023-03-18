<?php

//PHP directory and file-system


/*=================================================================================================
----------------01 - PHP Some commonly used directory and file functions----------------------------> 
===================================================================================================*/


/* 
------ Some commonly used PHP filesystem functions: -----
 * getcwd() — Gets the current working directory
 * basename() — Returns trailing name component of path
 * is_dir() - Checks if a given path is a directory.
 * mkdir() - Creates a directory.
 * rmdir() - Deletes a directory.
 * dirname() — Returns a parent directory's path
 * scandir() - Reads the contents of a directory into an array.
 * glob() - Finds pathnames that match a pattern.
 * realpath() - Returns the canonicalized absolute pathname of a file or directory.
 * filesize() - Returns the size of a file.
 * filemtime() - Returns the last modified time of a file.
----- Some commonly used PHP file read, open, and write functions: -----
 * readfile() - Outputs the contents of a file to the output buffer.
 * fopen() - Opens a file or URL for reading or writing.
 * fclose() - Closes an open file pointer.
 * fgets() - Reads a line from an open file pointer.
 * fgetcsv — Gets line from file pointer and parse for CSV fields
 * fread() - Reads a specified number of bytes from an open file pointer.
 * fwrite() - Writes a string to an open file pointer.
 * rewind — Rewind the position of a file pointer
 * fseek — Seeks on a file pointer
 * file() - Reads a file into an array, with each line of the file as an array element.
 * file_get_contents() - Reads the entire contents of a file into a string.
 * file_put_contents() - Writes a string to a file.
 * copy() - Copies a file.
 * rename() - Renames a file or directory.
 * delete — See unlink or unset
 * unlink() - Deletes a file.
 * filesize — Gets file size
 * filetype — Gets file type
 * file_exists() - Checks if a file or directory exists.
 * is_file() - Checks if a given path is a regular file.
 * is_readable() — Tells whether a file exists and is readable
 * is_writable() — Tells whether the filename is writable
 * is_writeable() — Alias of is_writable
 * is_uploaded_file() — Tells whether the file was uploaded via HTTP POST
 * 
 * https://www.php.net/manual/en/book.filesystem.php
 * https://www.w3schools.com/php/php_file_open.asp
 * https://www.geeksforgeeks.org/php-filesystem-functions-complete-reference/
*/

/*=================================================================================================
-----------------02 - File Open and Read only----------------------------> 
===================================================================================================*/





/*=================================================================================================
------------------03 - fopen() - A list of possible modes---------------------------> 
===================================================================================================*/

/* A list of possible modes for fopen() function */

/*01: ("r") - READ MODE ONLY
Open a file for read only. File pointer starts at the beginning of the file
*/
//
// $fOpen = fopen('text.txt', 'r');
// echo fgets($fOpen);

//
// if (is_readable('text.txtfdf')) {
//     $fOpen = fopen('text.txt', 'r');
//     echo fgets($fOpen);
// } else {
//     echo "Not readAble";
// }


/*02: ("r+") - READ AND WRITE MODE
Open a file for read/write. File pointer starts at the beginning of the file
*/
// //01
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r+');
// fwrite($fOpen, "orange");
// echo fgets($fOpen);

// //02
// $filename = "text.txt";
// $fOpen = fopen($filename, 'r+');

// echo fgets($fOpen);
// fwrite($fOpen, "apple");
// echo fgets($fOpen);
// fwrite($fOpen, "pineapple");


/*03: ("w") - WRITE MODE ONLY
Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
*/
// $fOpen = fopen('text.txt', 'w');
// fwrite($fOpen, 'new');

// $contentsExisting = file_get_contents('text.txt'); // existing contents
// $fOpen = fopen('text.txt', 'w');
// fwrite($fOpen, $contentsExisting);
// fwrite($fOpen, "grape\n");
// echo file_get_contents('text.txt');

// if (is_writable('text.txt')) {
//     $fOpen = fopen('text.txt', 'w');
//     fwrite($fOpen, 'new');
//     echo "File is writeable";
// }

// $fOpen = fopen('text.txt', 'w');
// fwrite($fOpen, 'new');
// echo fgets($fOpen); //can't read (w) mode



/*04: ("w+") - WRITE AND READ MODE
Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
*/
// $fOpen = fopen('text.txt', 'w+');
// fwrite($fOpen, 'new');
// rewind($fOpen);
// echo fgets($fOpen); //read (w+) mode


/* 05: ("a") - APPEND MODE ONLY
Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
*/
// $fOpen = fopen('text.txt', 'a');
// fwrite($fOpen, "mango\n");

// $fOpen = fopen('text.txt', 'a');
// fwrite($fOpen, "mango\n");
// echo fgets($fOpen); //can't read (a) mode



/* 06: ("a+") APPEND AND READ MODE
Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
*/
// $fOpen = fopen('text.txt', 'a+');
// fwrite($fOpen, "\nmango");
// rewind($fOpen);
// echo fgets($fOpen); //read (a+) mode


/*07: ("x") - CREATE NEW FILE AND WRITE
Creates a new file for write only. Returns FALSE and an error if file already exists
*/
// $file = fopen("example.txt", "x");

// if ($file === false) {
//     echo "Failed to create file.";
// } else {
//     fwrite($file, "Hello, world!");
//     fclose($file);
// }

/*
08: "x+" - CREATE NEW FILE WRITE AND READ MODE
Creates a new file for read/write. Returns FALSE and an error if file already exists
*/
// $file = fopen("example.txt", "x+");

// if ($file === false) {
//     echo "Failed to create file.";
// } else {
//     fwrite($file, "Hello, world!");
//     rewind($file);
//     $data = fread($file, filesize("example.txt"));
//     echo $data;
//     fclose($file);
// }



/*=================================================================================================
-------------------04 - file_put_contents() - writes data to a file--------------------------> 
===================================================================================================*/


/* file_put_contents(filename, data, mode, context) - writes data to a file.
This function follows these rules when accessing a file:
 -> If FILE_USE_INCLUDE_PATH is set, check the include path for a copy of filename
 -> Create the file if it does not exist
 -> Open the file
 -> Lock the file if LOCK_EX is set
 -> If FILE_APPEND is set, move to the end of the file. Otherwise, clear the file content
 -> Write the data into the file
 -> Close the file and release any locks
NOTE: Use FILE_APPEND to avoid deleting the existing content of the file.
 * 
 * https://www.w3schools.com/php/func_filesystem_file_put_contents.asp
 * https://www.geeksforgeeks.org/php-file_put_contents-function/
 * https://www.php.net/manual/en/function.file-put-contents
*/
// //01: clear the file content and write new
// $file = 'text.txt';
// file_put_contents($file, 'mango');
// file_put_contents($file, 'orange');
// echo file_get_contents($file);

// //02: move to the end of the file and write new
// $file = 'text.txt';
// file_put_contents($file, "mango\n", FILE_APPEND);
// file_put_contents($file, "orange\n", FILE_APPEND);
// echo file_get_contents($file);

//02: Acquire an exclusive lock on the file while proceeding to the writing.
$file = 'text.txt';
file_put_contents($file, "mango\n", FILE_APPEND | LOCK_EX);
file_put_contents($file, "orange\n", FILE_APPEND | LOCK_EX);
echo file_get_contents($file);



/*=================================================================================================
----------------05 - fputcsv() - fgetcsv()-----------------------------> 
===================================================================================================*/

/* fputcsv() - fgetcsv() */

// NOTE: CSV Means - comma separated values

/* --- fputcsv($file, $fields, $separator, $enclosure) ---
The fputcsv() function in PHP is an inbuilt function which is used to format a line as CSV(comma separated values) file and writes it to an open file. The file which has to be read and the fields are sent as parameters to the fputcsv() function and it returns the length of the written string on success or FALSE on failure.
 * https://www.php.net/manual/en/function.fputcsv.php
 * https://www.w3schools.com/php/func_filesystem_fputcsv.asp
 * https://www.geeksforgeeks.org/php-fputcsv-function/
 * 
*/
//01:
$filename = "text.txt";
$fOpen = fopen($filename, 'w');
fputcsv($fOpen, ['Tufik', 'Hasan', 'Bogura']);
fputcsv($fOpen, ['Rakib', 'Khan', 'Dhaka']);
fclose($fOpen);

//02:
$list = array(
    array("Peter", "Griffin", "Norway"),
    array("Glenn", "Quagmire", "Germany")
);
$file = fopen("contacts.csv", "w");
foreach ($list as $line) {
    fputcsv($file, $line);
}
fclose($file);

/* --- fgetcsv($file, $fields, $separator, $enclosure) ---
The fgetcsv() function is a built-in PHP function that reads a single row from a CSV file and returns it as an array of values. It takes one parameter, which is the file handle for the CSV file you want to read from.
 * https://www.php.net/manual/en/function.fgetcsv.php
 * https://www.w3schools.com/php/func_filesystem_fgetcsv.asp
 * https://www.geeksforgeeks.org/how-to-parse-a-csv-file-in-php/
 * 
*/
//01:
$filename = "text.txt";
$fOpen = fopen($filename, 'r');
$getCsv = fgetcsv($fOpen);

print_r($getCsv);
fclose($fOpen);

//02:
$file = fopen("contacts.csv", "r");
while ($student = fgetcsv($file)) {
    echo sprintf("Student name is %s %s and lives in %s", $student[0], $student[1], $student[2]) . PHP_EOL;
}



/*=================================================================================================
-----------------06 - File data processing - Manually----------------------------> 
===================================================================================================*/


/* File data processing - Manually */

//---------- associative array item write into file ------
$students = [
    [
        "name" => "Tufik",
        "age" => 25,
        "roll" => 01,
        "class" => "BBA",
    ],
    [
        "name" => "Rakib",
        "age" => 42,
        "roll" => 17,
        "class" => "CSE",
    ],
    [
        "name" => "Sabbir",
        "age" => 32,
        "roll" => 4,
        "class" => "MSC",
    ],
];
$fOpen = fopen('students.csv', 'w');
foreach ($students as $student) {
    $data = sprintf("%s,%s,%s,%s\n", $student['name'], $student['age'], $student['roll'], $student['class']);
    fwrite($fOpen, $data);
}
fclose($fOpen);

// //-------- csv file read by line -----------
// $fOpen = fopen('students.csv', 'r');
// while ($line = fgets($fOpen)) {
//     $student = explode(',', $line);
//     printf("Name = %s\nAge = %s\nRoll = %s\nClass = %s\n\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fOpen);

// //------------- delete line from file ------------
// $students = file('students.csv');
// unset($students[2]);
// print_r($students);
// $fOpen = fopen('students.csv', 'w');
// foreach ($students as $student) {
//     if ($student != '') {
//         fwrite($fOpen, $student);
//     }
// }
// fclose($fOpen);



/*=================================================================================================
-----------------07 - File data processing using fputcsv(),fgetcsv()----------------------------> 
===================================================================================================*/


/* File data processing using fputcsv(),fgetcsv() */

//---------- associative array item write into file ------
$students = [
    [
        "name" => "Tufik",
        "age" => 25,
        "roll" => 01,
        "class" => "BBA",
    ],
    [
        "name" => "Rakib",
        "age" => 42,
        "roll" => 17,
        "class" => "CSE",
    ],
    [
        "name" => "Sabbir",
        "age" => 32,
        "roll" => 4,
        "class" => "MSC",
    ],
];
$fOpen = fopen('students.csv', 'w');
foreach ($students as $student) {
    fputcsv($fOpen, $student);
}
fclose($fOpen);

// //-------- csv file read by line -----------
// $fOpen = fopen('students.csv', 'r');
// while ($student = fgetcsv($fOpen)) {
//     printf("Name = %s\nAge = %s\nRoll = %s\nClass = %s\n\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fOpen);

// //------------- add new student ------------
// $student = [
//     "name"  => "Rocky",
//     "age"   => 19,
//     "roll"  => 45,
//     "class" => "Ten",
// ];
// $fOpen = fopen('students.csv', 'a');
// fputcsv($fOpen, $student);

// //------------- delete specific line from file ------------
// $students = file('students.csv');
// unset($students[2]);
// print_r($students);
// $fOpen = fopen('students.csv', 'w');
// foreach ($students as $student) {
//     if ($student != '') {
//         fwrite($fOpen, $student);
//     }
// }
// fclose($fOpen);



/*=================================================================================================
-------------------08 - File data processing using serialize(),unserialize()--------------------------> 
===================================================================================================*/


/* File data processing using serialize(),unserialize() */

//---------- associative array serialize into file ------
$students = [
    [
        "name" => "Tufik",
        "age" => 25,
        "roll" => 01,
        "class" => "BBA",
    ],
    [
        "name" => "Rakib",
        "age" => 42,
        "roll" => 17,
        "class" => "CSE",
    ],
    [
        "name" => "Sabbir",
        "age" => 32,
        "roll" => 4,
        "class" => "MSC",
    ],
];
$data = serialize($students);
file_put_contents('students.csv', $data, LOCK_EX);

// // //-------- csv file read by line -----------
// $data = file_get_contents('students.csv');
// $students = unserialize($data);
// print_r($students);

// //------------- add new student ------------
// $data = file_get_contents('students.csv');
// $students = unserialize($data);
// $student = [
//     "name"  => "Rocky",
//     "age"   => 19,
//     "roll"  => 45,
//     "class" => "Ten",
// ];
// array_push($students, $student);
// $data = serialize($students);
// file_put_contents('students.csv', $data, LOCK_EX);

// //------------- delete specific line from file ------------
// $data = file_get_contents('students.csv');
// $students = unserialize($data);
// unset($students[2]);
// $data = serialize($students);
// file_put_contents('students.csv', $data, LOCK_EX);


/*=================================================================================================
-------------------09 - File data processing using json_encode(),json_decode()-------------------------> 
===================================================================================================*/


/* File data processing using json_encode(),json_decode() */

//---------- associative array serialize into file ------
$students = [
    [
        "name" => "Tufik",
        "age" => 25,
        "roll" => 01,
        "class" => "BBA",
    ],
    [
        "name" => "Rakib",
        "age" => 42,
        "roll" => 17,
        "class" => "CSE",
    ],
    [
        "name" => "Sabbir",
        "age" => 32,
        "roll" => 4,
        "class" => "MSC",
    ],
];
$data = json_encode($students);
file_put_contents('students.csv', $data, LOCK_EX);

// //-------- csv file read by line - (json to object) -----------
// $data = file_get_contents('students.csv');
// $students = json_decode($data);
// print_r($students);
// echo $students[0]->name;

// //-------- csv file read by line - json to array -----------
// $data = file_get_contents('students.csv');
// $students = json_decode($data, true);
// print_r($students);
// echo $students[0]['name'];

// //------------- add new student ------------
// $data = file_get_contents('students.csv');
// $students = json_decode($data, true);
// $student = [
//     "name"  => "Rocky",
//     "age"   => 19,
//     "roll"  => 45,
//     "class" => "Ten",
// ];
// array_push($students, $student);
// $data = json_encode($students);
// file_put_contents('students.csv', $data, LOCK_EX);

// //------------- delete specific line from file ------------
// $data = file_get_contents('students.csv');
// $students = json_decode($data, true);
// unset($students[1]);
// print_r($students);
// $data = json_encode($students);
// file_put_contents('students.csv', $data, LOCK_EX);




?>