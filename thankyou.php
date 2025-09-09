<!-- thankyou.php -->
<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    echo "Thank you, $name! Your feedback has been submitted.";
}
?>