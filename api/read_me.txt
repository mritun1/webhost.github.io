---------------------------------------------------------------------------------------------------
API should have CRUD functions

C = Create ( Insert data into database ) use POST method 
R = Read   ( Read all data list & single data using ID ) use GET method [ query = '/' and '/id' ]
U = Update ( Update data into database using ID ) use POST method 
D = Delete ( Delete data from database using ID ) use POST method 
---------------------------------------------------------------------------------------------------

To create an api 

1. GO and Edit /obj/db.php

    $this->db = new mysqli("localhost", "root", "", "test");

    CHANGE IT WITH YOUR DATABASE DETAILS

2. GOTO /obj/ FOLDER AND CREATE YOUR CLASSES i.e., /obj/example.php

    public static functions should be same as given on line 4.

3. GOT /api/ FOLDER AND CREATE FILE i.e., /api/example.php AND ADD THIS CODE

    <?php StartAPI('EXAMPLE', $exp_req[3]); ?>

    For example:

    //API URL CREATED

    // [ CREATE API ]
    // 'yoursite.com/api/filename/'   -->SEND POST METHOD { purpose = Insert, others data }

    // [ READ API ]
    // 'yoursite.com/api/filename/'   --> Get all Lists of data
    // 'yoursite.com/api/filename/id' --> Get Single Data

    // [ UPDATE API ]
    // 'yoursite.com/api/filename/'   -->SEND POST METHOD { purpose = Update, id = 1, others data }

    // [ DELETE API ]
    // 'yoursite.com/api/filename/'   -->SEND POST METHOD { purpose = Delete, id = 1 }

4. CLASS EXAMPLE

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

    