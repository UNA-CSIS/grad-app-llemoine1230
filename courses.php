<?php
session_start();

$_SESSION["first"] = $_POST["first"] ?? "";
$_SESSION["last"]  = $_POST["last"] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Courses</title>
</head>
<body>
    Welcome <?php echo $_SESSION["first"] . " " . $_SESSION["last"]; ?>, please select which courses you have completed from below:
    
    <form action="accomplish.php" method="POST">
        <input type="checkbox" id="course1" name="course1" value="Object-Oriented Programming">
        <label for="course1">Object-Oriented Programming</label><br>
        
        <input type="checkbox" id="course2" name="course2" value="Systems Analysis & Design">
        <label for="course2">Systems Analysis & Design</label><br>
        
        <input type="checkbox" id="course3" name="course3" value="Advanced Programming">
        <label for="course3">Advanced Programming</label><br>
        
        <input type="checkbox" id="course4" name="course4" value="Introduction to Networking">
        <label for="course4">Introduction to Networking</label><br>
        
        <input type="checkbox" id="course5" name="course5" value="Introduction to Computer Security">
        <label for="course5">Introduction to Computer Security</label><br>
        
        <input type="submit">
    </form>
</body>
</html>
