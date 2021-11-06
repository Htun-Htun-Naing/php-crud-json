<?php

function getUsers()
{
    return json_decode(file_get_contents(__DIR__ . '/users.json'), true);

}

function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user ){
        if($user['id'] == $id){
            return $user;
        }
    }
    return null;
}

function createUsers($data)
{
    $users = getUsers();

    $data['id'] = rand(1000000, 2000000);

    $users[] = $data;

    putJSON($users);

    return $data;

}

function updateUsers($data , $id)
{
    $updateUser = [];
    $users = getUsers();
    foreach($users as $i => $user){
        if($user['id'] == $id){
          
            $users[$i] = $updateUser = array_merge($user, $data);
         
        }
    }
    putJSON($users);
    return $updateUser;
    

            
}

function deleteUsers($id)
{
    $users = getUsers();
    
    foreach($users as $i => $user){
        if($user['id'] == $id){
            array_splice($users, $i , 1);
        }
    }
    putJSON($users);
    // echo '<pre>';
    // var_dump($users);
    // echo '</pre>';
    // exit;

}

function putJSON($users) 
{
    file_put_contents(__DIR__ . '/users.json', json_encode($users , JSON_PRETTY_PRINT));

}