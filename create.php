<?php
include 'partials/header.php'; 

require_once __DIR__ . '/users/users.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $user = createUsers($_POST);

    header("Location: index.php");
}

$user = [
    'id' => '',
    'name'  => '',
    'username' => '',
    'phone' => '',
    'email' => '',
    'website' => ''
];

?>
<?php include '_form.php' ;?>