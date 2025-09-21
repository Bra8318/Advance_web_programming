<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        First Name: <input type="text" name="fname" required><br><br>
        Last Name: <input type="text" name="lname" required><br><br>
        <label for="gender">Gender</label>
        Male:<input type="radio" name="gender" value="male">
        Female:<input type="radio" name="gender" value="female"><br><br>
        Roll Number: <input type="number" name="roll"><br><br>
        Phone Number: <input type="number" name="phone"><br><br>
        Course: <input type="text" name="course" required><br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $fname = $_GET['fname'] ?? 'Guest';
    $lname = $_GET['lname'] ?? 'Guest';
    $gender = $_GET['gender'] ?? 'Guest';
    $roll = $_GET['roll'] ?? 'Guest';
    $phone = $_GET['phone'] ?? 'Guest';
    $course = $_GET['course'] ?? 'Guest';
    echo "hello,$fname $lname ,you are $gender ,and your course is $course";
}
?>