<?php
$mysqli = new mysqli("localhost", "pk1404", "123456", "shop1404");
$result = $mysqli->query("SELECT itemTitle, itemText, buttonText, buttonLink, imageName FROM vitrina");
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
        <h1>Витрина стандартного магазина</h1>
        <?php
        while ($row = $result->fetch_row()) {
            echo '<div class="card">';
            echo '    <div class="row g-0">';
            echo '        <div class="col-md-4">';
            echo '            <img src="images/' . $row[4] . '" class="img-fluid rounded-start" alt="...">';
            echo '        </div>';
            echo '        <div class="col-md-8">';
            echo '            <div class="card-body">';
            echo '                <h5 class="card-title">' . $row[0] . '</h5>';
            echo '               <p class="card-text">' . $row[1] . '</p>';
            echo '                <a href="' . $row[3] . '" class="btn btn-primary">' . $row[2] . '</a>';
            echo '</div> </div> </div> </div>';
        }
        ?>
    </div>
</body>

</html>