<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>Выберите картинку</p>
        <select name="pictures">
            <option value="smile1">Смайлик 1</option>
            <option value="smile2">Смайлик 2</option>
        </select>
        <p>Выберите размер картинки по ширине</p>
        <select name="picSize">
            <option value="small">маленький</option>
            <option value="medium">средний</option>
            <option value="big">большой</option>
        </select>
        <input type="submit" value="ТЫК!">
    </form>
    <?php
        $selectedPic="";
        $smile1="01";
        $smile2="02";
        $pic = $_POST["pictures"];
        $picSize = $_POST["picSize"];
        if ($pic=="smile1" ) {
            $selectedPic = $smile1;
        } else if($pic=="smile2") {
            $selectedPic = $smile2;
        }
        ?>
    <img src= <?php echo "'". $selectedPic.".png'"; ?> >
</body>

</html>
