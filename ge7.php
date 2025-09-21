
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Mysql</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="add" value="Add Data">
        <input type="submit" name="delete" value="Delete Data">
        <input type="submit" name="dispaly" value="Display Data">
    </form>

</body>
</html>

<?php
if(isset($_POST['add'])){
    $conn = mysqli_connect('localhost','root','','practice');
    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }

$sql = "INSERT INTO DATA (name,email,address,phone)
 VALUES ('Brajesh','brajesh@1gmail.com','',569745)";

if (mysqli_query($conn,$sql)){
    echo "</br></br>";
    echo "New Data added successfully.";

}
else{
    echo "Error" .$sql ."</br>".mysqli_error($conn);
}
mysqli_close($conn);
}

else if(isset($_POST['delete'])){
    $conn = mysqli_connect('localhost','root','','practice');
    if (!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
    $sql = "DELETE FROM DATA where name='Brajesh'";
    if(mysqli_query($conn,$sql)){
        echo "</br></br>";
        echo "Data Deleted Successfully.";
    }
    else{
        echo " Deletion Error ".$sql."</br>". mysqli_error($conn);
    }
mysqli_close($conn);
}

else{
    $conn = mysqli_connect('localhost','root','','practice');
    if (!$conn){
        die("Connection Failed".mysqli_connect_error());
    }

    $sql = 'select * from data';
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "</br> id :". $row['id']. " name: ". $row['name']. " Email: " . $row['email'].
             " Address: " .$row['address'] ." phone: " .$row['phone'] ."</br>";

        }
    }
    else{
        echo "0 Results";
    }  
    mysqli_close($conn);  
}
?>