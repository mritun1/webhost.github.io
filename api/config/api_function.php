<?php 
function StartAPI($className, $req){
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if($req){
            //If have id
            echo $className::getDataUsingId($req);
        }else{
            //Read all the lists of data
            echo $className::getAllData();
        }
    }else{
        if(isset($_POST['purpose'])){
            if($_POST['purpose'] == 'Insert'){
                //EXECUTE FUNCTION FOR INSERT
                echo $className::insertData();
            }else
            if($_POST['purpose'] == 'Update'){
                //EXECUTE FUNCTION FOR INSERT
                $id = $_POST['id'];
                echo $className::UpdateData($id);
            }else
            if($_POST['purpose'] == 'Delete'){
                //EXECUTE FUNCTION FOR INSERT
                $id = $_POST['id'];
                echo $className::DeleteData($id);
            }else{
                echo "Error: required_data_not_send";
            }
        }
    }
}
?>