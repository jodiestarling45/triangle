<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=acdwebsite",'root','');
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email=$_POST['email'];
        $account = $_POST['account'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        $sql = "INSERT INTO users(name, phone, account, password, address, age, type_user) VALUES ('$name','$phone','$account','$password','$address','$age','$type')";
        $conn->query($sql);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
}
