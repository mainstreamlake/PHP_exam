<?php
    require 'sys/classes/driverDB.php'; //Подключаем внешний класс
    class News extends DriverDB { //Наследование, Для интерфейсов - implements;
        public function Add($author, $caption, $annotation, $fullnew, $datetime, $path) {
            $query = "INSERT INTO news (author, caption, annotation, fullnew, datetime, image) ";
            $query .= "VALUES ('$author', '$caption', '$annotation', '$fullnew', '$datetime', '$path')";
            $this->executeNonQuery($query);
        }
        
        public function Read() {
            $query = "SELECT * FROM news";
            $records = $this->executeReader($query);
            return $records;
        }
    }
