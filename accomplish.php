<?php
session_start();
$_SESSION['course1'] = $_POST['course1'] ?? '';
$_SESSION['course2'] = $_POST['course2'] ?? '';
$_SESSION['course3'] = $_POST['course3'] ?? '';
$_SESSION['course4'] = $_POST['course4'] ?? '';
$_SESSION['course5'] = $_POST['course5'] ?? '';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="confirmation.php" method="POST">
            Please list your accomplishments: 
            <input type="text" name="accomplishments"><br>
            <input type="submit">
        </form>
    </body>
</html>