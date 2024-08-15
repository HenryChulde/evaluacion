<?php
require_once 'models/Supplier.php';
require_once 'config/database.php';

class SupplierController
{
    private $db;
    private $supplier;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->supplier = new Supplier($this->db);
    }

    public function index()
    {
        $stmt = $this->supplier->read();
        $suppliers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once 'views/suppliers/index.php';
    }

    public function create()
    {
        require_once 'views/suppliers/create.php';
    }

    public function store()
    {
        $this->supplier->name = $_POST['name'];
        $this->supplier->contact_email = $_POST['contact_email'];
        $this->supplier->phone = $_POST['phone'];
        $this->supplier->address = $_POST['address'];
        if ($this->supplier->create()) {
            header("Location: index.php?controller=Supplier&action=index");
        }
    }

    public function edit($id)
    {
        $query = "SELECT * FROM suppliers WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $supplier = $stmt->fetch(PDO::FETCH_ASSOC);
        require_once 'views/suppliers/edit.php';
    }

    public function update($id)
    {
        $this->supplier->id = $id;
        $this->supplier->name = $_POST['name'];
        $this->supplier->contact_email = $_POST['contact_email'];
        $this->supplier->phone = $_POST['phone'];
        $this->supplier->address = $_POST['address'];
        if ($this->supplier->update()) {
            header("Location: index.php?controller=Supplier&action=index");
        }
    }

    public function delete($id)
    {
        $this->supplier->id = $id;
        if ($this->supplier->delete()) {
            header("Location: index.php?controller=Supplier&action=index");
        }
    }
}
