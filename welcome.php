<!-- <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    echo "Welcome $user";
}
?> -->
<?php
session_start();

$user = isset($_POST['user']) ? $_POST['user'] : 'Guest';

echo "<h1>Welcome, " . htmlspecialchars($user) . "!</h1>";
echo "<p>You have successfully logged in.</p>";
?>

