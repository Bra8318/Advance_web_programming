<?php
$arr = array(
    array(1,2,3,4,5,6),
    array(7,8,9,10,11,12),
    array(13,14,15,16,17,18),
    array(19,20,21,22,23,24),
    array(25,26,27,28,29,30),
    array(31,32,33,34,35,36)
);

// display diagonal element. 
echo "Diagonal Elements are.<br>";
for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i][$i]. " ";
}

echo "<br>";
// Sum of the array excluding the first and last row.
$total = 0;
for ($row = 0; $row < count($arr); $row++){
    $sum = 0;
    if ($row == 0 || $row == count($arr)-1){
        echo $sum."<br>";
    }
    else{
        for ($col = 0; $col < count($arr[$row]); $col++){
            $sum += $arr[$row][$col];
        }
        echo "Total sum of the row $row ".$sum. "<br>"; 
        $total += $sum;  
    }
    
}
echo "Total sum of the array ".$total;  
?>