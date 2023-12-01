<?php
    class Conexao {
        private $conec;

        public function __construct() {
            $server= "localhost";
            $user = "root";
            $password = "";
            $database = "usuarios";

            $this->conec = mysqli_connect($server, $user, $password, $database);

            if (!$this -> conec) {
                die("Falha de Conexão");
            }
        }

        public function getConnection() {
            echo "Ok";
            return $this -> conec;
        }

        public function close() {
            if ($this -> conec) {
                mysqli_close($this -> conec);
            }
        }
    }
?>