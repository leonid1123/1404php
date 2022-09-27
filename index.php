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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <p>Выберите картинку</p>
        <select name="pictures">
            <option value="smile1">Смайлик 1</option>
            <option value="smile2">Смайлик 2</option>
        </select>
        <p>Выберите размер картинки по ширине</p>
        <select name="picSize">
            <option value="smallPic">маленький</option>
            <option value="mediumPic">средний</option>
            <option value="bigPic">большой</option>
        </select>
        <p>Загрузить своё изображение</p>
        <input type="file" name="uploadfile">
        <input type="submit" value="ТЫК!">
    </form>
    <?php
        $selectedPic="";
        $picSize="";
        //добавить проверки
        $targetDir="upload/";
        $targetFile = $targetDir . basename($_FILES["uploadfile"]["name"]);
        echo $targetFile;
        move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $targetFile);

        if (isset($_POST["pictures"]) & isset($_POST["picSize"])) {
            $smile1="01";
            $smile2="02";
            $pic = $_POST["pictures"];
            $picSize = $_POST["picSize"];
            if ($pic=="smile1" ) {
                $selectedPic = $smile1;
            } else if($pic=="smile2") {
                $selectedPic = $smile2;
            }
        }           
        ?>
    <img class=<?php echo "'".$picSize."'"; ?> src= <?php echo "'". $selectedPic.".png'"; ?> >
</body>

</html>
