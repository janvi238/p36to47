<!-- result.php -->
<?php
if(isset($_GET['marks'])){
    $marks = $_GET['marks'];
    if($marks >= 40){
        echo "You passed with $marks marks.";
    } else {
        echo "You failed with $marks marks.";
    }
}
?>