<?php


class Manager_product
{
    protected $nameServer;
    protected $user;
    protected $password;
    protected $dbname;

    private function __construct()
    {
        $this->nameServer = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'acdwebsite';
    }

    private function connect()
    {
        $conn = new PDO("mysql:host=$this->nameServer;dbname=$this->dbname", $this->user, $this->password);
        return $conn;
    }

    public function add($product)
    {

        try {
            $name = $product->getName();
            $amount = $product->getAmount();
            $status = $product->getStatus();
            $type = $product->getType();
            $conn = $this->connect();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `product`(`ID`, `type`, `status`, `name`, `amount`) VALUES (0,$type,$status,$name,$amount)";
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function delete($index)
    {
        $conn = $this->connect();
        $sql = "DELETE FROM `product` WHERE ID=$index";
        $conn->exec($sql);
    }

    public function search($name)
    {
        $conn = $this->connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `product` WHERE name = $name";
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function update($index,$product)
    {
        $conn = $this->connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE `product` SET `type`=$product->getType(),`status`=$product->getStatus(),`name`=$product->getName(),`amount`=$product->getAmount() WHERE ID=$index";
        $conn->exec($sql);
    }
}