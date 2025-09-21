<?php
session_start();

$_SESSION['accomplishments'] = $_POST['accomplishments'] ?? '';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Welcome, please confirm that the following information is correct: <?php
        echo "<br>";
        echo "First name: " . $_SESSION['first'];
        echo "<br>";
        echo "Last name: " . $_SESSION['last'];
        echo "<br>";
        echo "Courses taken: ";
        $total_courses = 0;
        foreach ($_SESSION as $key => $value) {
            if (str_contains($key, "course")) {
                $total_courses++;
            }
        }
        $courses_taken = 0;
        echo "<ul>";
        for ($i = 1; $i <= $total_courses; $i++) {
            if (!empty($_SESSION["course$i"])) {
                echo "<li>" . $_SESSION["course$i"] . "</li>";
                $courses_taken++;
            }
        }
        echo "</ul>";
        echo "Accomplishments: ";
        echo '<br>';
        echo $_SESSION['accomplishments'];
        ?>
        <form action="results.php" method="POST">
            <input type="submit">
        </form>

    </body>
</html>
