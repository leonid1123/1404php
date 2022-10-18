<?php
/*
    $stmt = $mysqli->prepare("INSERT INTO 
    vitrina(itemId, itemTitle, itemText, buttonText, buttonLink, imageName) 
    VALUES (null,?,?,?,?,?)");
    $itemTitle = "Кофрик для мышЫ";
    $itemText = "Это коврик для мышЫ, что ты хотел тут увидеть?";
    $buttonText = "Чпок.!.";
    $buttonLink = "https://kuda.to";
    $imageName = "05.png";
    $stmt->bind_param("sssss", $itemTitle,$itemText,$buttonText,$buttonLink,$imageName);
    $stmt->execute();
    echo $stmt->affected_rows;
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/js/bootstrap.min.js">
</head>

<body>
    <div class="container-md">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="shop.php">Наш магаз!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="shop.php">На главную</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="newItem.php">Добавить</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">что-то</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">что-то</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

        </form>
</body>

</html>