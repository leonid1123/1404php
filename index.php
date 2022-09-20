<?php
if (isset($_POST["login"])) {
    $login = $_POST["login"];
    $password = $_POST["pass"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <p>Login</p>
        <input type="text" name="login">
        <p>Password</p>
        <input type="text" name="pass">
        <input type="submit" value="ТЫК!">
    </form>

    <?php
    if (isset($login)&isset($password)) {
        $txt1="Вы ввели логин:";
        $txt2="Вы ввели пароль:";
        $smile1 = "01.png";
        $smile2 = "02.png";
        echo "<p>".$txt1." ".$login."</p>";
        echo "<p>".$txt2." ".$password."</p>";
        if ($login==$password) {
            echo "<p>Ну так совсем не надо 8-/ </p>" ;
            echo "<img src=".$smile1.">";
        } else if ($login=="") {
            echo "<p>Пустой логин плохая идея</p>";
            echo "<img src=".$smile2.">";
        } else if ($password=="123456") {
            echo "Это кем надо быть, чтобы придумать такой пароль 0_о";
        }
    }
    ?>
</body>
</html>