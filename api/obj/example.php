<?php 
class EXAMPLE{
    public static function getAllData(){
        //LISTS OF ALL DATA
        $db = new DB();
        $para = "SELECT * FROM cars";
        return $db->GetDataJson($para);
    }

    public static function getDataUsingId($id){
        //GET SINGLE DATA BY ID
        $db = new DB();
        $para = "SELECT * FROM cars WHERE id='$id' LIMIT 1";
        return $db->GetDataJson($para);
    }

    public static function insertData(){
        //INSERT DATA
        $db = new DB();
        $para = "INSERT INTO cars(car_name)
                VALUES('" . $_POST['car_name'] . "')";
        return $db->InputData("Insert", $para);
    }

    public static function UpdateData($id){
        //UPDATE DATA BY ID
        $db = new DB();
        $para = "UPDATE cars SET 
                car_name='" . $_POST["car_name"] . "' 
                WHERE id='" . $id ."' LIMIT 1";
        return $db->InputData("Update", $para);
    }

    public static function DeleteData($id){
        //DELETE DATA BY ID
        $db = new DB();
        $para = "DELETE FROM cars WHERE id='$id' LIMIT 1";
        return $db->InputData("Delete", $para);
    }
}
?>