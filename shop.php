<?php
    $mysqli = new mysqli("localhost", "pk1404", "123456", "shop1404");
    echo $mysqli->host_info . "\n";
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
        <h1>Витрина стандартного магазина</h1>
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>