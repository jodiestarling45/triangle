<?php


class Manager_Users
{
    protected $serverName;
    protected $dbname;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->serverName = 'localhost';
        $this->dbname = 'acdwebsite';
        $this->user = 'root';
        $this->password = '';
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->serverName;dbname=$this->dbname", $this->user, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function add($user)
    {   $name = $user->getName();
        $accout=$user->getAccount();
        $age = $user->getAge();

        $conn = $this->connect();
        $sql = "INSERT INTO `users`(`name`, `id`, `phone`, `account`, `password`, `address`, `age`, `type_user`) VALUES ()";

    }

}
