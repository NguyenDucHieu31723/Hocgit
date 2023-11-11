<?php
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổ dữ liệu lên giao diện bảng</title>
</head>
<style>
    table tr th {
        border-bottom: 3px solid green;
        padding: 8px 20px;
    }

    table tr td {
        border-bottom: 1px solid green;
        padding: 8px 20px;

    }
</style>

<body>
    <h1>Danh sách sinh viên</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>MaSV</th>
            <th>Họ và tên</th>
            <th>Điểm</th>
        </tr>
        <?php
        $stt = 0;
        foreach ($listSV as $sv) {
            $stt++;
            ?>
            <tr>
                <td>
                    <?php echo $stt; ?>
                </td>
                <td>
                    <?php echo $sv['masv'] ?>
                </td>
                <td>
                    <?php echo $sv['name'] ?>
                </td>
                <td>
                    <?php echo $sv['point'] ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h1>Danh sách sinh viên thi trượt</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>MaSV</th>
            <th>Họ và tên</th>
            <th>Điểm</th>
        </tr>
        <?php
        $stt = 0;
        foreach ($listSV as $sv) {
            if ($sv['point'] < 5) {
                $stt++;
                ?>
                <tr>
                    <td>
                        <?php echo $stt ?>
                    </td>
                    <td>
                        <?php echo $sv['masv'] ?>
                    </td>
                    <td>
                        <?php echo $sv['name'] ?>
                    </td>
                    <td>
                        <?php echo $sv['point'] ?>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
<!-- BTVN
1. Code lại 5 lần
2. Tạo thêm cột trạng thái ở bảng ds sinh viên , code PHP
để tự động điền trạng thái pass vào dòng có sinh viên thi đạt,
điền trạng thái fail vào dòng có sinh viên thi trượt
3. Thêm vào $listSV thông tin về avanta và hiển thị ảnh của sinh viên lên bảng -->
</body>

</html>