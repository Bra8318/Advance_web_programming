<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <!-- Enter Your String: <input type="text" name="str"><br><br> -->
        <button type="submit" name="action" value="length">Find Length</button>
        <button type="submit" name="action" value="substring">Find Substring</button>
        <button type="submit" name="action" value="replace">Replace Text </button>
        <button type="submit" name="action" value="remove">Remove Whitespace</button>
        <button type="submit" name="action" value="value">Check Value</button>
        <button type="submit" name="action" value="title">Make Title</button>
    </form>
</body>

</html>


<?php
$str = "hello vikas what's up ! have your program runned ";
if (isset($_POST['action'])){
    $action = ($_POST['action']);
    //$str = ($_POST['str']);
    if ($action === 'length'){
        $length = strlen($str);
        echo "<br>";
        echo "The length of the given string is " . $length;
        }
    else if($action === 'remove'){
        echo "<br>";
        echo "Removed whitespaces <br>" .trim($str);

    }
    else if($action === 'substring'){
        echo "<br>";
        echo "Substring of a given string is <br>".substr($str,5);
    }
    else if($action === 'replace'){
        echo "<br>";
        echo "Replaced text with in Aman <br>".str_replace('vikas','Aman',$str);
    }
    else if($action === 'value'){
        echo "<br>";
        echo "Check the given value is string or not. <br>";
        if(is_string($str)){
            echo "The given value is a string.";
        }
        else{
            echo "The given value is not a string.";
        }
    }
    else if($action === 'title'){
        echo "<br>";
        echo "Make the first letter in uppercase. <br>".ucwords($str);
    }
}


?>