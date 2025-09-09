<!-- login.php -->
 <?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "12345") {
        echo "Login successful!";
    } else {
        echo "Invalid credentials!";
    }
}
?>