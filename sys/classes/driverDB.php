<?php
    class DriverDB {
        private $db_host;
        private $db_user;
        private $db_pass;
        private $db_name;
        private $db_conn;
    
    public function __construct() {
        require 'res/configs/db_config.php';
        $this->db_host = HOST;
        $this->db_user = USER;
        $this->db_pass = PASS;
        $this->db_name = NAME;
    }
    
    private function connect() {
        $this->db_conn = mysql_connect($this->db_host, $this->db_user, $this->db_pass)
            or die('Ошибка соединения с сервером БД: '.mysql_error());
        mysql_select_db($this->db_name, $this->db_conn)
            or die('Ошибка выбора БД: '.mysql_error());
        mysql_query("SET NAMES utf8"); //Чтобы выводило кириллицу
    }
    
    private function disconnect() {
        mysql_close($this->db_conn);
    }

    public function executeNonQuery($query) {
        $this->connect();
        mysql_query($query, $this->db_conn) 
            or die('Ошибка выполнения SQL-запроса: '.mysql_error());
        $this->disconnect();
    }
    
    public function executeReader($query) {
        $this->connect();
        $records = array();
        $result = mysql_query($query, $this->db_conn)
            or die('Ошибка выполнения SQL-запроса: '.mysql_error());
        $N = mysql_num_rows($result);
        if ($N == 0) {
            $this->disconnect();
            return NULL;
        } else {
            for ($i = 0; $i < $N; $i++) {
                $records[] = mysql_fetch_assoc($result);
            }
            $this->disconnect();
            return $records;
        }  
    }
}