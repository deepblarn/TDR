<?php


if (isset($_POST['button'])){
    echo 'HELL YEAH';
    echo var_dump($_POST);
}




?>

<html>
<body>
<form method="post" action="example.php">
    <input type="text" name="user">
    <button name="button"></button>
</form>
</body>
</html>
