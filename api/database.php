<?php 
require_once 'config/autoload.php';

$db = new DB();

//create cars table if not exists
// $sql = "CREATE TABLE IF NOT EXISTS cars (
//    car_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    car_name VARCHAR(30) NOT NULL,
//    car_price INT(6) NOT NULL,
//    car_image VARCHAR(30) NOT NULL,
//    car_model VARCHAR(30) NOT NULL,
//    car_fuel VARCHAR(30) NOT NULL,
//    car_bodytype VARCHAR(30) NOT NULL,
//    car_seattype VARCHAR(30) NOT NULL,
//    car_tyretype VARCHAR(30) NOT NULL,
//    car_seatcapacity VARCHAR(30) NOT NULL,
//    car_carrierability VARCHAR(30) NOT NULL
// )";
// if ($db->db()->query($sql) === TRUE) {
//    echo "Table cars created successfully";
// } else {
//    echo "Error creating table: " . $db->db()->error;
// }
?>