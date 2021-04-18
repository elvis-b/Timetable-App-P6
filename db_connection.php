<?php
class Database{	
	
    protected $host;
    protected $username;
    protected $password;
    protected $db;
    protected $conn;

    public function __construct(){
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "" ;
        $this->db = "timetable_db";      
        $this->connect();
        
    }

    // Connection to the database
    private function connect(){
            try {
                $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db); 
                echo "Success connecting to db";
            } catch (Exception $e) {
                echo "Error connecting";
            }
            
    }

    // Get all the data
    function getData($table, $where){
            try {
                $this->connect();
                $sql = "SELECT * FROM ".$table." WHERE ".$where;          
                $sql = $this->conn->query($sql);
                $sql = $sql->fetch_assoc();
                return $sql;
            } catch(Exception $e){
                throw new Exception($e->getMessage());   
            }
            
    }

    // Update data that already exists
    function updateData($table, $update_value, $where){
        try {
            $this->connect();
            $sql = "UPDATE ".$table." SET ".$update_value." WHERE ".$where;        
            $sql = $this->conn->query($sql);
        } catch(Exception $e){
            throw new Exception($e->getMessage());   
        }

    }

    // Create new data and is sent to the database
    function createData($table, $columns, $values){
        try {
            $this->connect();
            $sql = "INSERT INTO ".$table." ".$columns." VALUES ".$values;        
            $sql = $this->conn->query($sql);
        } catch(Exception $e){
            throw new Exception($e->getMessage());   
        }
    }

    // Deletes data from the database
    function deleteData($table, $filter){ 
        try {
            $this->connect();
            $sql =  "DELETE FROM ".$table." ".$filter;  
            $sql = $this->conn->query($sql);
        } catch(Exception $e){
            throw new Exception($e->getMessage());   
        }    
    }
  
}

$ob = new Database();
?>