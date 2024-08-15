<?php
require_once 'models/Product.php';
require_once 'config/database.php';

class ProductController
{
    private $db;
    private $product;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);
    }

    public function index()
    {
        $stmt = $this->product->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once 'views/products/index.php';
    }

    public function create()
    {
        require_once 'views/products/create.php';
    }

    public function store()
    {
        $this->product->name = $_POST['name'];
        $this->product->price = $_POST['price'];
        $this->product->quantity = $_POST['quantity'];
        if ($this->product->create()) {
            header("Location: index.php?controller=Product&action=index");
        }
    }

    public function edit($id)
    {
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        require_once 'views/products/edit.php';
    }

    public function update($id)
    {
        $this->product->id = $id;
        $this->product->name = $_POST['name'];
        $this->product->price = $_POST['price'];
        $this->product->quantity = $_POST['quantity'];
        if ($this->product->update()) {
            header("Location: index.php?controller=Product&action=index");
        }
    }

    public function delete($id)
    {
        $this->product->id = $id;
        if ($this->product->delete()) {
            header("Location: index.php?controller=Product&action=index");
        }
    }
}
