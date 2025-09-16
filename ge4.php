<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        User Name: <input type="text" name="user"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        if($user === 'john' && $password === '1234'){
            ?>
            <script>
                window.location.href = 'welcome.php';
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert ("The Username And Password Doesn't Match.");
            </script>
            <?php
        }
    }
    
?>