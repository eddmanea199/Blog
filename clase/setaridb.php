<?php
class confdb {    
  private $_host = 'localhost';
  private $_username = 'root';
  private $_password = '';
  private $_database = 'blog';
   
  
     
    protected $connection;
    
    public function __construct(){
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Nu merge conexiunea! Eroare de server!';
                exit;
            }            
        }    
        
        return $this->connection;
    }
}
?>
