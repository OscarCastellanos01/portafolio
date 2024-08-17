<?php
class UserModel extends Model {
    
    public function getUsers() {
        $result = $this->db->query('SELECT name, email FROM users');
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }
}