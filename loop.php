<?php
$num=11;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box {
            background: red;
            height: 100px;
            width: 100px;
            float: left;
            margin: 5px;
        }

        .green {
            background: green;
            height: 100px;
            width: 100px;
            float: left;
            margin: 5px;
        }
    </style>
</head>
<body>
    <blockquote>
        <?php for($x=1; $x <= $num; $x++ ) : ?>
            <?php if($x % 2 == 0 ) : ?>
                <div class = "green"></div>
                <?php else:?>
                <div class = "box"></div>
            <?php endif; ?>
        <?php endfor; ?>
    </blockquote>

</body>
</html>