<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $total_courses = 0;
        foreach ($_SESSION as $key => $value) {
            if (str_contains($key, "course")) {
                $total_courses++;
            }
        }
        $courses_taken = 0;
        for ($i = 1; $i <= $total_courses; $i++) {
            if (!empty($_SESSION["course$i"])) {
                $courses_taken++;
            }
        }

        function requirementsMet($skill, $threshold) {
            global $courses_taken;
            global $_SESSION;
            global $total_courses;
            $percentage = ($courses_taken / $total_courses) * 100;
            // echo $percentage;
            if ($percentage >= $threshold && str_contains($_SESSION["accomplishments"], $skill)) {
                return true;
            } else {
                return false;
            }
        }
        if (requirementsMet("PHP", 50)){
            echo "you are accepted for an phone interview";
        }
        else{
            echo "sorry, your application was rejected";
        }

        ?>
    </body>
</html>