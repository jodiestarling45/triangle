<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="addNew.php" method="post">
    name : <input type="text" name="name" placeholder="name"><br>
    age  : <input type="text" name="age" placeholder="age"><br>
    phone: <input type="text" name="phone" placeholder="phone"><br>
    address: <input type="text" name="address" placeholder="address"><br>
    email: <input type="text" name="email" placeholder="email"><br>
    account<input type="text" name="account" placeholder="account"><br>
    password<input type="text" name="password" placeholder="password"><br>
    <select name="type" id="">
        <option value="buyer">buyer</option>
        <option value="seller">seller</option>
    </select><br>
    <input type="submit" value="enter">
</form>
</body>
</html>
