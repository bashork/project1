Page Protection Script.

One of the most common problems with authentication systems is the developer forgetting to check if the user is logged in. It is very important you use the code below on every protected page to check that the user is logged in. Make sure you use this function to check if the user is logged in.

// Include database connection and functions here.  See 3.1. 
sec_session_start(); 
if(login_check($mysqli) == true) {
        // Add your protected page content here!
} else { 
        echo 'You are not authorized to access this page, please login.';
}


As an example of what you should do, we have included a sample protected page. Create a file called protected_page.php in the root directory of the application. The file should contain something like the following:

<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
                This is an example protected page.  To access this page, users
                must be logged in.  At some stage, we'll also check the role of
                the user, so pages will be able to determine the type of user
                authorised to access the page.
            </p>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>


Our application redirects to this page after a successful login. Your own implementation does not have to do this, of course.