<?php
require_once 'models/Client.php';
require_once 'config/database.php';

class ClientController
{
    private $db;
    private $client;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->client = new Client($this->db);
    }

    public function index()
    {
        $stmt = $this->client->read();
        $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once 'views/clients/index.php';
    }

    public function create()
    {
        require_once 'views/clients/create.php';
    }

    public function store()
    {
        $this->client->name = $_POST['name'];
        $this->client->email = $_POST['email'];
        $this->client->phone = $_POST['phone'];
        if ($this->client->create()) {
            header("Location: index.php?controller=Client&action=index");
        }
    }

    public function edit($id)
    {
        $query = "SELECT * FROM clients WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $client = $stmt->fetch(PDO::FETCH_ASSOC);
        require_once 'views/clients/edit.php';
    }

    public function update($id)
    {
        $this->client->id = $id;
        $this->client->name = $_POST['name'];
        $this->client->email = $_POST['email'];
        $this->client->phone = $_POST['phone'];
        if ($this->client->update()) {
            header("Location: index.php?controller=Client&action=index");
        }
    }

    public function delete($id)
    {
        $this->client->id = $id;
        if ($this->client->delete()) {
            header("Location: index.php?controller=Client&action=index");
        }
    }
}
