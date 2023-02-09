<?php
require_once "connection.php";
$user->__construct();
    class Pembayarann extends Database{
        private $conn;
        private $id_users;
        private $bukti_foto;


        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }

        public function Form_Pembayaran(){
            $this->conn;
            $this->id_users;
            $this->bukti_foto;

        }
    }
?>