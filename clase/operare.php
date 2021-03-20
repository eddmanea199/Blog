<?php
include_once 'setaridb.php'; 
class operare extends confdb{
    public function __construct(){ parent::__construct();}    
    public function preluare($query){        
        $result = $this->connection->query($query);
        if ($result == false) {return false;} 
        $rows = array();
        while ($row = $result->fetch_assoc()) { $rows[] = $row;}
        return $rows;
    }
        
    public function ruleaza($query){
        $result = $this->connection->query($query);
        if ($result == false) {echo 'Eroare: Nu se poate executa comanda dvs.'; return false;} 
        else {return true;}        
    }
    
    public function stergere($nr, $table){ 
        $query = "DELETE FROM $table WHERE nr = $nr";
        $result = $this->connection->query($query);    
        if ($result == false) { echo 'Eroare: Nu se poate sterge nr ' . $nr . ' din tabela ' . $table; return false;} 
        else { return true;}
    }
 
    public function strfix($value){return $this->connection->real_escape_string($value);}
}
?>
