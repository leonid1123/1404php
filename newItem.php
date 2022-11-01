<?php
$zagruzka = false;
$mysqli = new mysqli("localhost", "pk1404", "123456", "shop1404");
if (isset($_POST["go"])) {
    $uploaddir = 'images/';
    $uploadfile = $uploaddir . basename($_FILES['formFile']['name']);
    if (move_uploaded_file($_FILES['formFile']['tmp_name'], $uploadfile)) {
        $ext = pathinfo($_FILES["formFile"]["name"], PATHINFO_EXTENSION);
        if($ext=="png"){
            $zagruzka = true;
        }
    } else {
        die("всё плохо!!!");
    }
}

if (isset($_POST["go"])) {
    $stmt = $mysqli->prepare("INSERT INTO 
    vitrina(itemId, itemTitle, itemText, buttonText, buttonLink, imageName) 
    VALUES (null,?,?,?,?,?)");
    $itemTitle = $_POST["bigTitle"];
    $itemText = $_POST["description"];
    $buttonText = $_POST["buttonText"];
    $buttonLink = $_POST["link"];
   
    $imageName = basename($_FILES["formFile"]["name"]);
    $stmt->bind_param("sssss", $itemTitle, $itemText, $buttonText, $buttonLink, $imageName);
    $stmt->execute();
    echo $stmt->affected_rows;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Item</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/js/bootstrap.min.js">
</head>

<body>
    <?php
    include 'pageTop.php';
    ?>
    <h1>Добавление товара</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <label for="bigTitle" class="form-label">Большой заголовок</label>
            <input name="bigTitle" type="text" class="form-control" id="bigTitle" placeholder="Большой заголовок сюда">
            <label for="description" class="form-label">Описание товара</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Описание товара сюда"></textarea>
            <label for="buttonText" class="form-label">Текст на кнопке</label>
            <input name="buttonText" type="text" class="form-control" id="buttonText" placeholder="Что написать на кнопке">
            <label for="link" class="form-label">Адрес ссылки</label>
            <input name="link" type="url" class="form-control" id="link" placeholder="Указать ссылку начиная с https://">
            <div class="mb-3">
                <label for="formFile" class="form-label">Прикрепите изображение товара</label>
                <input name="formFile" class="form-control" type="file" id="formFile">
            </div>
            <div class="col-auto">
                <button name="go" type="submit" class="btn btn-primary mb-3">Внести товар</button>
            </div>
        </div>
    </form>
    <?php
    echo $_POST["bigTitle"];
    ?>
    </div>
</body>

</html>