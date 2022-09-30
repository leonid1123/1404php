<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/js/bootstrap.min.js">
</head>

<body>
    <div class="container-lg">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <p>Выберите картинку</p>
            <select class="form-control" name="pictures">
                <option value="smile1">Смайлик 1</option>
                <option value="smile2">Смайлик 2</option>
            </select>
            <p>Выберите размер картинки по ширине</p>
            <select class="form-control" name="picSize">
                <option value="smallPic">маленький</option>
                <option value="mediumPic">средний</option>
                <option value="bigPic">большой</option>
            </select>
            <p>Загрузить своё изображение</p>
            <input class="form-control" type="file" name="uploadfile">
            <input class="btn btn-primary" type="submit" value="ТЫК!">
        </form>
        <?php
        $picArray = array();
        if (isset($_POST["pictures"])) {

            //добавить проверки
            //--загрузка файлов--
            $targetDir = "upload/";
            $targetFile = $targetDir . basename($_FILES["uploadfile"]["name"]);
            move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $targetFile);
            //------
            //получение списка файлов
            $picArray = scandir("upload/");
        }
        ?>
        <div class="container text-center">
            <div class="row">

            <?php
            //$picArray = array("01.png","02.png","8biticon.jpg"); 
            foreach ($picArray as $value) {
                if (pathinfo($value, PATHINFO_EXTENSION) == "png" || pathinfo($value, PATHINFO_EXTENSION) == "jpg") {
                    echo '<div class="col">';
                    echo "<div ><img class='img-thumbnail' src=upload/" . $value . "></div>";
                    echo "</div>";
                }
            }
            ?>
            </div>
        </div>
</body>

</html>