<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h2>Введите свое имя</h2>
        <form method="POST" action='index.php'>
            <input type='text' name='user' placeholder="Имя"><br>
            <input type='submit' name='submit' value='Отправить'>  
        </form>
        <?php
        If (isset($_POST['user'])) {
            $_SESSION['user'] = $_POST['user'];
        }

        $user = $_POST['user'];
        if (isset($_SESSION['user'])) {
            echo "Привет " . $_SESSION['user'] . "<br>";
        }
        ?>

        <?php
        $name = 'Цикл';
        $name2 = str_split($name);
        $i = 0;
        foreach ($name2 as $key => $value) {
            while ($i <= rand(10, 20)) {
                $i += 1;
                echo $value . "<br>";
            }
        }
        ?>

    </body>
</html>