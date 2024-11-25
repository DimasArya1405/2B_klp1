<?php
// app/models/User.php
require_once '../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM organizers");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM organizers WHERE id_nama_penyelenggara = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_penyelenggara, $kontak, $email) {
        $query = $this->db->prepare("INSERT INTO organizers (nama_penyelenggara, kontak, email) VALUES (:nama_penyelenggara, :kontak, :email)");
        $query->bindParam(':nama_penyelenggara', $nama_penyelenggara);
        $query->bindParam(':kontak', $kontak);
        $query->bindParam(':email', $email);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_penyelenggara', $data['nama_penyelenggara']);
        $stmt->bindParam(':kontak', $data['kontak']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM organizers WHERE id_nama_penyelenggara = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
