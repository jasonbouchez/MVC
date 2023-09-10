<?php
require 'model/Model.php';

class ContactModel extends Model{
    public function getAllContacts(){

            $query = "SELECT * FROM contact";
            $stmt = $this->db->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
