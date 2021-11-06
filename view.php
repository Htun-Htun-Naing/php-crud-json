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


 ?>
<div class="container">
<div class="card">
    <div class="card-header">
    <h3>View Users: <b><?php echo $user['name']; ?></b></h3>
    <a href="update.php?id=<?php echo $user['id'] ;?>" class="btn btn-sm btn-outline-secondary">Update</a>
    <form style="display:inline-block" action="delete.php" method="POST">
                            <button class="btn btn-sm btn-outline-danger">
                                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                            delete
                            </button>
                        </form>
</div>
    <table class="table">
    <tbody>
        <tr>
        <th>Name</th>
        <td><?php echo $user['name']; ?></td>
        </tr>

        <tr>
        <th>Username</th>
        <td><?php echo $user['username']; ?></td>
        </tr>

        <tr>
        <th>Email</th>
        <td><?php echo $user['email']; ?></td>
        </tr>

        <tr>
        <th>Phone</th>
        <td><?php echo $user['phone']; ?></td>
        </tr>

        <tr>
        <th>Website</th>
        <td>
            <a target="_blank" href="http://<?php echo $user['website']; ?>">
            <?php echo $user['website']; ?>
            </a>
        </td>
        </tr>
</tbody>

</table>
</div>
</div>






<?php include 'partials/footer.php'; ?>