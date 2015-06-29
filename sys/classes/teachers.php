<?php
require 'sys/classes/driverDB.php';
class Teachers extends DriverDB {
    public function AddTeacher($name) {
        $query = "INSERT INTO teachers (name) VALUES ('$name');";
        $this->executeNonQuery($query);
    }
    
    public function ShowTeacher() {
        $query = "SELECT * FROM teachers;";
        $records = $this->executeReader($query);
        return $records;
    }
}
