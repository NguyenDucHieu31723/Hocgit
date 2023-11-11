<?php
$listSV = array(
    array(
        'masv' => 'PH001',
        'name' => 'Nguyễn Đức Hiếu',
        'point' => 9,
        'status' => '',
        'avatar' => 'img/anh1.jpg'
    ),
    array(
        'masv' => 'PH002',
        'name' => 'Nguyễn Đức Dương',
        'point' => 4,
        'status' => '',
        'avatar' => 'img/anh1.jpg'
    ),
    array(
        'masv' => 'PH003',
        'name' => 'Nguyễn Tiến Cường',
        'point' => 5,
        'status' => '',
        'avatar' => 'img/anh1.jpg'
    ),
    array(
        'masv' => 'PH004',
        'name' => 'Lưu Ngọc Hào',
        'point' => 3,
        'status' => '',
        'avatar' => 'img/anh1.jpg'
    ),
    array(
        'masv' => 'PH005',
        'name' => 'Hà Văn Danh',
        'point' => 7,
        'status' => '',
        'avatar' => 'img/anh1.jpg'
    ),
    array(
        'masv' => 'PH006',
        'name' => 'Đoàn Trung Dũng',
        'point' => 4,
        'avatar' => 'img/anh1.jpg'
    ),

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
            <th>Mã SV</th>
            <th>Họ Tên</th>
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
                    <?php if ($sv['point'] <= 5) {
                        echo 'Fail';
                    } else {
                        echo 'Pass';
                    }
                    ?>
                </td>
                <td><img src="<?php echo $sv['avatar'] ?>" alt=""></td>
            </tr>

            <?php
        }
        ?>

    </table>
    <h1>Danh sách sinh viên thi trượt</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã SV</th>
            <th>Họ Tên</th>
            <th>Điểm</th>
            <th>Avatar</th>
        </tr>
        <?php
        $stt = 0;
        foreach ($listSV as $sv) {
            $stt++;
            if ($sv['point'] <= 5) {
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
                    <td><img src="<?php echo $sv['avatar'] ?>" alt=""></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>

</html>