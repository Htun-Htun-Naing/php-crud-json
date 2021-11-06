<?php
include 'partials/header.php'; 

require_once __DIR__ . '/users/users.php';

$user = [
    'id' => '',
    'name'  => '',
    'username' => '',
    'phone' => '',
    'email' => '',
    'website' => ''
];

$errors= [
    'name'      => '',
    'username'  => '',
    'email'     => '',
    'phone'     => '',
    'website'   => ''
];

$isValid = true;

if($_SERVER["REQUEST_METHOD"] === "POST"){

   
    $user = array_merge($user, $_POST);

    if(!$user['name']){
        $isValid = false;
        $errors['name'] = 'Name is mandatory';
    }

    if(!$user['username'] || strlen($user['username'] ) < 6 || strlen($user['username'] ) > 11){
        $isValid = false;
        $errors['username'] = 'Username must be between 6 and 11 characters';
    }

    if(!$user['email'] || !filter_var($user['email'], FILTER_VALIDATE_EMAIL)){
        $isValid = false;
        $errors['email'] = 'invalid email address';
    }

    if(!$user['phone'] || !filter_var($user['phone'], FILTER_VALIDATE_INT)){
        $isValid = false;
        $errors['phone'] = "invalid phone number";
    }
    

    if($isValid){
        $user = createUsers($_POST);

        header("Location: index.php");
    }


   
}


?>
<?php include '_form.php' ;?>