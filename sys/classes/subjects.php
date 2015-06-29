<?php
require 'sys/classes/driverDB.php'; //Подключаем внешний класс по работе с БД

class Subjects extends DriverDB {
    public function AddSubject($name) {
        $query = "INSERT INTO subjects (name) ";
        $query .= "VALUES ('$name);";
        $this->executeNonQuery($query);
    }
    public function ReadSubject() {
        $query = "SELECT * FROM subjects;";
        $records = $this->executeReader($query);
        return $records;
    }
}
