<?php
session_start();

if (!isset($_SESSION['username'])) {
    $error_message = "You must log in to access this page.";
    header('Location: index.php?error=' . urlencode($error_message));
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Welcome</title>
        </head>

    <body>
        <h1>Login Done! 😍</h1>
    </body>

</html>
