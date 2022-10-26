<?php

require_once './getData.php';

$getData = new getData();
$user = $getData->getUserData();
$post = $getData->getPostData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            width: 1200px;
            height: 1200px;
            margin: 0 auto;
        }
        .outline{
            width: 1200px;
            height: 130px;
            background-color: red;
        }
        .image{
            display: inline-block;
            width: 200px;
            height: 120px;
            background-color: #add8e6;
        }
        .over{
            width: 800px;
            height: 60px;
            /* display: inline-block; */
            background-color: #87ceeb;
            vertical-align: top;
            text-align: right;
        }
        .under{
            width: 800px;
            height: 60px;
            /* display: inline-block; */
            background-color: #00ffff;
            text-align: right;
        }
        table{
            width: 800px;
        }
    </style>
</head>
<body>
    <div class="main">
        <!-- <div class="outline"> -->
            <div class="image">PIC</div>
            <div style="display:inline-block;vertical-align: top; margin:0; padding:0;">
                <div class="over"><?php echo "ようこそ{$user["last_name"]}{$user["first_name"]}さん"; ?></div>
                <div class="under"><?php echo "最終ログイン日:{$user["last_login"]}"; ?></div>
            </div>
                <!-- </div> -->
        <div style="width: 1000px; margin: 0 auto;">
        <table border="1">
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            <?php foreach($post as $val){ ?>
                <tr>
                    <?php foreach($val as $key => $row){ ?>
                        <?php if($key === 'category_no' && $row === "1") { ?>
                        <td><?php echo "食事"; ?></td>
                        <?php } elseif($key === 'category_no' && $row === "2") { ?>
                        <td><?php echo "旅行"; ?></td>
                        <?php }else if($key === 'category_no'){ ?>
                        <td><?php echo "その他"; ?></td>
                        <?php }else{ ?>
                        <td><?php echo $row; ?></td> 
                        <?php } ?>  
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
</body>
</html>