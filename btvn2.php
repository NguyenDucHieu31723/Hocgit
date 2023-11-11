<?php
$listSV = array(
    array(
        'masv' => 'PH001',
        'name' => 'Nguyễn Đức Hiếu',
        'point' => 9,
        'avatar' => 'img/anh1.jpg'
    ),
    array(
        'masv' => 'PH002',
        'name' => 'Lưu Ngọc Hào',
        'point' => 4,
        'avatar' => 'img/anh1.jpg'

    ),
    array(
        'masv' => 'PH003',
        'name' => 'Nguyễn Tiến Cường',
        'point' => 3,
        'avatar' => 'img/anh1.jpg'

    ),
    array(
        'masv' => 'PH004',
        'name' => 'Nguyễn Đức Dương',
        'point' => 2,
        'avatar' => 'img/anh1.jpg'

    ),
    array(
        'masv' => 'PH005',
        'name' => 'Hà Văn Danh',
        'point' => 8,
        'avatar' => 'img/anh1.jpg'

    ),
    array(
        'masv' => 'PH005',
        'name' => 'Đoàn Trung Dũng',
        'point' => 7,
        'avatar' => 'img/anh1.jpg'

    )
)
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table tr th {
        border-bottom: 3px solid red;
        padding: 10px 20px;

    }

    table tr td {
        border-bottom: 1px solid green;
        padding: 10px 20px;
    }

    img {
        width: 80px;
        height: 80px;
    }
</style>

<body>
    <h1>Danh sách sinh viên</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>MaSV</th>
            <th>Họ và Tên</th>
            <th>Điểm</th>
            <th>Trạng Thái</th>
            <th>Avatar</th>
        </tr>
        <?php
        $stt = 0;
        foreach ($listSV as $sv) {
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
                <td>
                    <?php if ($sv['point'] < 5) {
                        echo "Fail";
                    } else {
                        echo "Pass";
                    } ?>
                </td>
                <td>
                    <img src="<?php echo $sv['avatar'] ?>" alt="">
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>