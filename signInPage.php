<?php
    require_once"systemClass.php";

    SystemClass::blockEntraceSigned("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        systemClass::printHead("./styles/signInPage/signInPage.css","zalogus sie")
    ?>
</head>
<body>
    <form   action="signIn.php" method="post">
        <label for="email_id">E-mail</label>
        <input type="email" name="email" id="">
        <label for="password_id">Password</label>
        <input type="password" name="password" id="password_id">

        <input type="submit" value="Zaloguj się">
        <?php
            if(isset($_SESSION['signInError'])) {
                echo("Błedne logowanie");
                unset($_SESSION['signInError']);
            }
        ?>

    </fomr>
</body>
</hrml>
