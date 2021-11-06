<?php
include 'partials/header.php'; 

require_once __DIR__ . '/users/users.php';

if(!isset($_GET['id'])){
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);

if(!$user){
    include "partials/not_found.php";
    exit;
}
//check request method for userid
if ($_SERVER["REQUEST_METHOD"] === "POST"){

    //called function updateUsers() from users.php for updating users info
    //passed values for function with 2 argument 
    updateUsers($_POST, $userId);
        // if (isset($_FILES['picture'])){
        //     if(!is_dir(__DIR__ . "/users/images")){
        //         mkdir(__DIR__ . "/users/images");
        //     }
        //     move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__ . "users/images/$userId.jpg");
        // }
        
    

    header("Location: index.php");

}



?>
 


<?php include '_form.php'; ?>
