<!DOCTYPE html>
<html>
<body>
<?php
//Initialize matrix a
$a = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$rows = count($a);
$cols = count($a[0]);

for($i = 0; $i < $rows; $i++){
    $sumRow = 0;
    for($j = 0; $j < $cols; $j++){
        $sumRow = $sumRow + $a[$i][$j];
    }
    print("Tong cua hang:" . ($i+1)  ." la : ". $sumRow);
    print("<br>");
}

for($i = 0; $i < $cols; $i++){
    $sumCol = 0;
    for($j = 0; $j < $rows; $j++){
        $sumCol = $sumCol + $a[$j][$i];
    }
    print("Tong cua cot : " . ($i+1)  ." la ". $sumCol);
    print("<br>");
}
?>
</body>
</html>