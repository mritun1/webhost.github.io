<?php 
class DB{
    private $db;

    public function __construct(){
        $this->db = new mysqli("localhost", "root", "", "test");
        if($this->db->connect_error){
            $this->db = false;
        }
    }

    public function db(){
        return $this->db;
    }

    //READ
    //"SELECT * FROM cars"
    //"SELECT * FROM cars WHERE id='1'"
    public function GetDataJson($para){
        $arr = array();
        $sql = $this->db->query($para);
        if($sql->num_rows > 0){
            foreach($sql as $row){
                $arr[] = $row;
            }
        }
        return json_encode($arr);
    } 

    //DELETE, UPDATE, CREATE
    //"DELETE FROM cars WHERE id='1'"
    //"INSERT INTO cars() VALUES()"
    //$comment = Delete, Insert, Update
    public function InputData($comment,$para){
        $sql = $this->$db->query($para);
        if($sql == true){
            return $comment . " success";
        }else{
            return $comment . " failed";
        }
    }
}
?>