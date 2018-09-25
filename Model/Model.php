<?php
    
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    include_once('Model/Connection.php');

    /**
    * 
    */
    class Model {

        public $conn = null;
        public $table = "";
        public $primaryKey = "id";
        
        function __construct() {
            $connection = new connection();
            $this->conn = $connection->conn;
        }

        public function findUser($obj, $data) {
            $query = "SELECT * FROM $this->table WHERE $obj = '" . $data . "'";

            $result = $this->conn->query($query);

            return $result->fetch_assoc();
        }

        public function store($arr_data) {
            $fields = "";
            $values = "";

            foreach ($arr_data as $key => $value) {
                $fields .= ",$key";
                $values .= ",'" . mysqli_real_escape_string($this->conn,$value) . "'";
            }

            $fields = trim($fields,",");
            $values = trim($values,",");

            $query = "INSERT INTO $this->table (".$fields.") VALUES (".$values.")";

            $result = $this->conn->query($query);

            return $result;
        }



    }

 ?>