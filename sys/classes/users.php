<?php
    require 'sys/classes/driverDB.php'; //Подключаем внешний класс
    class Users extends DriverDB { //Наследование, Для интерфейсов - implements;
        public function Add($login, $pass, $email, $status, $regdate) {
            $query = "INSERT INTO users (login, password, email, status, regdate) ";
            $query .= "VALUES ";
            $query .= "('$login', '$pass', '$email', '$status', '$regdate')";
            $this->executeNonQuery($query);
        }
        
        public function Search_L($login) {
            $query = "SELECT * FROM users WHERE login='$login'";
            $records = $this->executeReader($query);
            return $records;
        }
        
        public function Search_LP($login, $pass) {
            $query = "SELECT login, password FROM users WHERE ";
            $query .="login='$login' AND password='$pass'";
            $records = $this->executeReader($query);
            return $records;
        }
    }
