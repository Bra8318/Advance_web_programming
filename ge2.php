
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        first: <input type="text" name="first" ><br><br>
        second: <input type="text" name="second"><br><br>
        <input type="submit" value="Evaluate">
    </form>
</body>
</html>

<?php
if ($_POST){
$first = $_POST['first'];
$second = $_POST['second'];
$sum = (int)$first + (int)$second;
echo "Sum of two number is  " .$sum;
}
?>
