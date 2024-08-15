<?php
class Supplier
{
    private $conn;
    private $table_name = "suppliers";

    public $id;
    public $name;
    public $contact_email;
    public $phone;
    public $address;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " (name, contact_email, phone, address) VALUES (:name, :contact_email, :phone, :address)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":contact_email", $this->contact_email);
        $stmt->bindParam(":phone", $this->phone);
        $stmt->bindParam(":address", $this->address);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET name = :name, contact_email = :contact_email, phone = :phone, address = :address WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":contact_email", $this->contact_email);
        $stmt->bindParam(":phone", $this->phone);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }
}
