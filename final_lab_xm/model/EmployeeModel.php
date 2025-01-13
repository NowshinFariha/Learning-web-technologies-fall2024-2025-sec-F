<?php
require_once 'DBConnection.php';

class EmployeeModel extends DBConnection {
    public function register($name, $contact, $username, $password) {
        $name = $this->escape($name);
        $contact = $this->escape($contact);
        $username = $this->escape($username);
        $password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO employees (name, contact_no, username, password) VALUES ('$name', '$contact', '$username', '$password')";
        return $this->query($sql);
    }

    public function update($id, $name, $contact) {
        $name = $this->escape($name);
        $contact = $this->escape($contact);

        $sql = "UPDATE employees SET name='$name', contact_no='$contact' WHERE id=$id";
        return $this->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM employees WHERE id=$id";
        return $this->query($sql);
    }

    public function search($query) {
        $query = $this->escape($query);
        $sql = "SELECT * FROM employees WHERE name LIKE '%$query%' OR contact_no LIKE '%$query%'";
        return $this->query($sql);
    }

    public function authenticate($username, $password) {
        $username = $this->escape($username);
        $sql = "SELECT * FROM employees WHERE username='$username'";
        $result = $this->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            return password_verify($password, $user['password']) ? $user : false;
        }

        return false;
    }
}
?>
