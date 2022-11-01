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
        <?php
            include 'pageTop.php';
        ?>
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