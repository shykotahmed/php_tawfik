<?php
//<?php
//PHP Super Global variables — Built-in variables that are always available in all scopes


/*=================================================================================================
----------01 - Introduction to PHP Super Global variables----------------------------------> 
===================================================================================================*/


/*
PHP superglobal variables are built-in variables in PHP that are available in all scopes of a script. They are prefixed with a special character ($), followed by an underscore, and then the variable name. Here are some of the most commonly used superglobals:
 * $GLOBALS — References all variables available in global scope
 * $_SERVER: This variable contains information about the server environment and execution of the current script, such as the current page name, the IP address of the client, and the request method used to access the page.
 * $_GET: This variable contains the values of the variables passed to the current script via the URL parameters.
 * $_POST: This variable contains the values of variables submitted to the current script via an HTTP POST request.
 * $_REQUEST: This variable contains the values of $_GET, $_POST, and $_COOKIE variables combined.
 * $_FILES: This variable contains information about uploaded files, such as the file name, type, and size.
 * $_COOKIE: This variable contains any cookies that have been set by the current script or previous scripts.
 * $_SESSION: This variable contains data that is preserved across multiple requests, typically used for user authentication and tracking.
 * $_ENV — Environment variables
 * $http_response_header — HTTP response headers
These superglobals are accessible from anywhere in your PHP code, and are very useful for a wide range of tasks, such as accessing user input, tracking sessions, and handling file uploads.
 * 
 * https://www.php.net/manual/en/language.variables.superglobals.php
 * https://www.w3schools.com/php/php_superglobals.asp
 * https://www.geeksforgeeks.org/php-superglobals/
 */



/*=================================================================================================
--------02 - $GLOBALS — References all variables available in global scope------------------------------------> 
===================================================================================================*/

/* $GLOBALS — References all variables available in global scope
 * https://www.php.net/manual/en/reserved.variables.globals.php
 * https://www.w3schools.com/php/php_superglobals_globals.asps
 * https://www.geeksforgeeks.org/php-superglobals/
 */

//01
$x = 75;
$y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;

//02
function getName() {
    $name = "Towfik";
    echo "Global name = {$GLOBALS['name']}\n";
    echo "Local name = {$name}\n";
}
$name = "Rakib Hasan";
getName();



/*=================================================================================================
-----------------03 - $_SERVER — Server and execution environment information---------------------------> 
===================================================================================================*/

/* $_SERVER - This variable contains information about the server environment and execution of the current script, such as the current page name, the IP address of the client, and the request method used to access the page.
 * https://www.php.net/manual/en/reserved.variables.server.php
 * https://www.w3schools.com/php/php_superglobals_server.asp
 * https://www.geeksforgeeks.org/php-superglobals/
 */

 echo "PHP_SELF = " . $_SERVER['PHP_SELF'] . "<br><br>";

 echo "REQUEST_METHOD = " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
 
 echo "SERVER_NAME = " . $_SERVER['SERVER_NAME'] . "<br><br>";
 
 echo "SERVER_PORT = " . $_SERVER['SERVER_PORT'] . "<br><br>";
 
 echo "HTTP_HOST = " . $_SERVER['HTTP_HOST'] . "<br><br>";
 
 echo "SCRIPT_NAME = " . $_SERVER['SCRIPT_NAME'] . "<br><br>";
 
 echo "SCRIPT_FILENAME = " . $_SERVER['SCRIPT_FILENAME'] . "<br><br>";
 
 echo "SERVER_SOFTWARE = " . $_SERVER['SERVER_SOFTWARE'] . "<br><br>";
 
 echo "HTTP_USER_AGENT = " . $_SERVER['HTTP_USER_AGENT'] . "<br><br>";
 
 echo "SERVER_PROTOCOL = " . $_SERVER['SERVER_PROTOCOL'] . "<br><br>";
 
 echo "REQUEST_TIME = " . $_SERVER['REQUEST_TIME'] . "<br><br>";
 
 echo "HTTP_ACCEPT = " . $_SERVER['HTTP_ACCEPT'] . "<br><br>";
 
 echo "REMOTE_ADDR = " . $_SERVER['REMOTE_ADDR'] . "<br><br>";
 
 echo "REMOTE_PORT = " . $_SERVER['REMOTE_PORT'] . "<br><br>";



/*=================================================================================================
----------04 - $_GET — HTTP GET variables----------------------------------> 
===================================================================================================*/


/* $_GET: This variable contains the values of the variables passed to the current script via the URL parameters.
* https://www.php.net/manual/en/reserved.variables.get.php
* https://www.w3schools.com/php/php_superglobals_get.asp
* https://www.geeksforgeeks.org/php-superglobals/
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$_GET - Method</title><!-- Milligram Mini css framework setup -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
</head>

<body>
    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <?php
                if (isset($_GET['fname']) && $_GET['fname'] != "") {
                    echo "FirstName: {$_GET['fname']}<br>";
                }
                if (isset($_GET['lname']) && !empty($_GET['lname'])) {
                    echo "LastName: {$_GET['lname']}";
                }

                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <!-- Form default method $_GET  & Default action same file-->
                <form action="" method="GET">
                    <input type="text" name="fname" placeholder="First name...">
                    <input type="text" name="lname" placeholder="Last name...">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>



/*=================================================================================================
------------05 - $_POST — HTTP POST variables--------------------------------> 
===================================================================================================*/


/* $_POST: This variable contains the values of variables submitted to the current script via an HTTP POST request.
 * https://www.php.net/manual/en/reserved.variables.post.php
 * https://www.w3schools.com/php/php_superglobals_post.asp
 * https://www.geeksforgeeks.org/php-superglobals/
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$_POST - Method</title><!-- Milligram Mini css framework setup -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
</head>

<body>
    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <?php
                if (isset($_POST['fname']) && $_POST['fname'] != "") {
                    echo "FirstName: {$_POST['fname']}<br>";
                }
                if (isset($_POST['lname']) && !empty($_POST['lname'])) {
                    echo "LastName: {$_POST['lname']}";
                }

                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <!-- Form default method $_GET  & Default action same file-->
                <form method="POST">
                    <input type="text" name="fname" placeholder="First name...">
                    <input type="text" name="lname" placeholder="Last name...">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>


/*=================================================================================================
-------06 - $_REQUEST — contains the contents of $_GET, $_POST and $_COOKIE.-------------------------------------> 
===================================================================================================*/


/* $_REQUEST: This variable contains the values of $_GET, $_REQUEST, and $_COOKIE variables combined.
 * https://www.php.net/manual/en/reserved.variables.request.php
 * https://www.w3schools.com/php/php_superglobals_request.asp
 * https://www.geeksforgeeks.org/php-superglobals/
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$_REQUEST - Method</title><!-- Milligram Mini css framework setup -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
</head>

<body>
    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <?php
                if (isset($_REQUEST['fname']) && $_REQUEST['fname'] != "") {
                    echo "FirstName: {$_REQUEST['fname']}<br>";
                }
                if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                    echo "LastName: {$_REQUEST['lname']}";
                }

                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <!-- Form default method $_GET  & Default action same file-->
                <form method="POST">
                    <input type="text" name="fname" placeholder="First name...">
                    <input type="text" name="lname" placeholder="Last name...">
                    <input type="submit" value="POST">
                </form>
                <a class="button" href="?fname=Tufik&&lname=Hasan">$_GET Method</a>
            </div>
        </div>
    </div>
</body>

</html>



/*=================================================================================================
--------07 - $_FILES - File upload & Delete------------------------------------> 
===================================================================================================*/


/* $_FILES: This variable contains information about uploaded files, such as the file name, type, and size.
 * https://www.php.net/manual/en/reserved.variables.files.php
 * https://www.php.net/manual/en/function.move-uploaded-file.php
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$_FILES - File upload & Delete</title><!-- Milligram Mini css framework setup -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
</head>

<body>
    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <?php
                if (isset($_FILES['file']) && $_FILES['file'] != "") {
                    $img_name = $_FILES['file']['name'];
                    $img_tmp_name = $_FILES['file']['tmp_name'];
                    //show image name
                    echo "Image Name: {$img_name}<br>";

                    //image upload
                    $path = "./" . basename($img_name);
                    move_uploaded_file($img_tmp_name, $path);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <input type="submit" value="Upload">
                </form>
                <?php
                if (isset($_GET['image'])) {
                    //delete image from folder
                    @unlink($_GET['image']);
                }
                if (isset($_FILES['file']) && $_FILES['file'] != "") :
                    $image_path = "./" . $_FILES['file']['name']; ?>
                    <a class="button" href="?image=<?php echo $image_path; ?>">Delete image</a>
                    <div class="row">
                        <img src="<?php echo $image_path; ?>" alt="">
                    </div>
                <?php endif;  ?>
            </div>
        </div>
    </div>
</body>

</html>


/*=================================================================================================
---------08 - $_SESSION - set,session name,timeout,destroy-----------------------------------> 
===================================================================================================*/





/*=================================================================================================
---------09 - $_SESSION - login system-----------------------------------> 
===================================================================================================*/

session_start([
    'cookie_lifetime' => 300, //300/60 = 5 minutes
]);
$error = false;
if (isset($_POST['username']) && isset($_POST['password'])) {
    /* password hassing
    -> md5('12345'); //827ccb0eea8a706c4c34a16891f84e7b
    -> sha1('12345');  //8cb2237d0679ca88db6464eac60da96345513964
    -> hash('sha1', '12345');  //8cb2237d0679ca88db6464eac60da96345513964
    -> hash('sha256', '12345');
    -> hash('sha512', '12345');
    */
    if ('admin' == $_POST['username'] && '8cb2237d0679ca88db6464eac60da96345513964' == sha1($_POST['password'])) {
        $_SESSION['login'] = true;
    } else {
        $_SESSION['login'] = false;
        $error = true;
    }
}
if (isset($_POST['logout'])) {
    $_SESSION['login'] = false;
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Session login system</title><!-- Milligram Mini css framework setup -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
</head>

<body>
    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <?php
                if (true == $_SESSION['login']) {
                    echo "Hello ! Admin Welcome";
                } else {
                    echo "Hello ! Stranger. Login Below";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">

                <?php
                if ($error) {
                    echo "<blockquote>Invalid username and password</blockquote>";
                }
                if (false == $_SESSION['login']) : ?>
                    <form method="POST">
                        <label for="name">Username</label>
                        <input type="text" name="username" id="name">
                        <label for="pass">Password</label>
                        <input type="password" name="password" id="pass">
                        <input type="submit" value="Login">
                    </form>
                <?php else : ?>
                    <form method="POST">
                        <input type="hidden" name="logout" value="1">
                        <input type="submit" value="Logout">
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>



/*=================================================================================================
---------10 - $_SESSION - crud project login system-----------------------------------> 
===================================================================================================*/





/*=================================================================================================
-----11 - $_SESSION - role management system---------------------------------------> 
===================================================================================================*/





/*=================================================================================================
-------12 - $_SESSION - scope multiple subdomains or pages on the same domain-------------------------------------> 
===================================================================================================*/

/*
This code sets the name of the PHP session to "MyApp" using the session_name() function. 
 * cookie_domain: This option sets the domain for the session cookie. In this case, the session cookie will be set for the domain ".local.com", which means it will be valid for all subdomains of "local.com".
 * cookie_path: This option sets the path for the session cookie. In this case, the session cookie will be valid for all paths on the domain, because the path is set to "/".
By default, the PHP session cookie is only valid for the current domain and path, so these options are useful if you want to share the session between multiple subdomains or pages on the same domain.
NOTE that in order for the "cookie_domain" option to work, you must also ensure that your web server is configured to serve all subdomains of the domain you specified. This can usually be done by adding a wildcard DNS record for the domain (e.g. *.local.com), and configuring the web server to handle requests for all subdomains.
 */
session_name("MyApp");
session_start([
    'cookie_domain' => '.local.com',
    'cookie_path' => '/',
]);
$_SESSION['name'] = "tufik Hasan";
echo $_SESSION['name'];
// session_destroy();



/*=================================================================================================
-------------13 - $_COOKIE - A cookie is often used to identify a user-------------------------------> 
===================================================================================================*/
/* $_COOKIE: This variable contains any cookies that have been set by the current script or previous scripts.
A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
------ setcookie(name, value, expire, path, domain, secure, httponly); --------
NOTO: Only the name parameter is required. All other parameters are optional.
NOTE: The setcookie() function must appear BEFORE the <html> tag.
 * https://www.w3schools.com/php/php_cookies.asp
 * https://www.php.net/manual/en/reserved.variables.cookies.php
 * https://www.php.net/manual/en/function.setcookie.php
*/
$cookie_name = "user";
$cookie_value = "Tufik Hasan";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>


/*=================================================================================================
----------------14 - $_COOKIE - show cookie using js, cookies loop----------------------------> 
===================================================================================================*/

// // 01: Cookies Set PHP and Showing using javaScript 
// setcookie('name', 'tufik', time() + 30);
// echo <<<EOD
//     <script src="
//     https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js
//     "></script>
//     <script>
//         alert(Cookies.get('name'));
//     </script>
// EOD;

// 02: cookie array set like this
setcookie("array[id]", 1, time() + 30);
setcookie("array[name]", 'Tufik Hasan', time() + 30);
foreach ($_COOKIE['array'] as $key => $value) {
    echo "$key: $value<br>";
}
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Secur



/*=================================================================================================
------------------15 - $_ENV - $http_response_header--------------------------> 
===================================================================================================*/



/* $_SESSION - $_ENV - $http_response_header
 * $_SESSION: This variable contains data that is preserved across multiple requests, typically used for user authentication and tracking.
 -> https://www.php.net/manual/en/reserved.variables.session.php
 -> https://www.w3schools.com/php/php_sessions.asp
 * 
 * $_ENV — Environment variables
 -> https://www.php.net/manual/en/reserved.variables.environment.php
 * 
 * $http_response_header — HTTP response headers
 -> https://www.php.net/manual/en/reserved.variables.httpresponseheader.php
*/










?>



/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/






/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/




/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/





/*=================================================================================================
--------------------------------------------> 
===================================================================================================*/











?>
