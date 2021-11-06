
 <?php 
  require 'partials/header.php';

 require 'users/users.php';
 
 $users = getUsers();
 ?>
 
   <div class="container">
       <a class="btn btn-sm btn-outline-success mb-3 mt-3 p-2" href="create.php">Create New User</a>
   <table class="table">
        <thead>
            <tr>
            <th>Name</th>
            <th>Username</th>
            <th>email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Action</th>

            </tr>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td>
                        <a target="_blank" href="http://<?php echo $user['website'] ?>">
                        <?php echo $user['website'] ?>
                        </a>
                    </td>
                    <td>
                        <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                        <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                        <form style="display:inline-block" action="delete.php" method="POST">
                            <button class="btn btn-sm btn-outline-danger">
                                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                            delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </thead>

    </table>
   </div>
    
<?php include 'partials/footer.php' ?>