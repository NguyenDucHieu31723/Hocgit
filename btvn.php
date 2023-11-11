<?php
$listSV ;
$listSV = array(
    array(
        'masv' => 'ph723',
        'name' => 'Nguyen Duc Hieu',
        'point' => 8
    ),
    array(
        'masv' => 'ph789',
        'name' => 'Doan Trung Dung',
        'point' => 9
    ),
    array(
        'masv' => 'ph763',
        'name' => 'Ha Van Danh',
        'point' => 6
    ),
    array(
        'masv' => 'ph723',
        'name' => 'Luu Ngoc Hao',
        'point' => 4
    ),
    array(
        'masv' => 'ph623',
        'name' => 'Nguyen Tien Cuong',
        'point' => 3
    ),
    array(
        'masv' => 'ph983',
        'name' => 'Nguyen Duc Duong',
        'point' => 4
    )
);
// echo '<pre>';
// print_r($listSV);
// echo '</pre>';
$countPass=0;
echo "<h1> Danh sách sinh viên hoc lai </h1>";
foreach ($listSV as $sv) {
    if ($sv['point'] < 5) {
        echo "Sinh viên " . $sv['name'] . " có mã sinh viên: " . $sv['masv'];
        echo "<br>--------------------------------</br>";
    }
    else{
        $countPass++;
    }
}
echo "Số lượng sinh viên thi đỗ là: ".$countPass;