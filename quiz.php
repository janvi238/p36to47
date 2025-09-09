<!-- quiz.php -->
<?php
$score = 0;
if(isset($_POST['q1']) && $_POST['q1'] == "A") $score++;
if(isset($_POST['q2']) && $_POST['q2'] == "B") $score++;
if(isset($_POST['q3']) && $_POST['q3'] == "B") $score++;

echo "You scored $score out of 3.";
?>