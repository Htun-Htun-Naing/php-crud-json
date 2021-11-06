

<div class="container">

<div class="card">
    <div class="card-header">
        <h3>
        <?php if (isset($user['id'])): ?>
        Update User: <?php echo $user['name']; ?>
        <?php else: ?>
        Create New User
        <?php endif?>
        </h3>
    </div>
    <div class="card-body">
    <form method="POST" enctype="multipart/form-data"  action="">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name="name" class="form-control form-control-sm <?php echo $errors['name'] ? 'is-invalid' : '' ?> id="name" value="<?php echo $user['name'] ?>">
    <div class="invalid-feedback">
          <?php echo $errors['name'] ?>
    </div>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input name="username" class="form-control form-control-sm <?php echo $errors['username'] ? 'is-invalid' : '' ?>" value="<?php echo $user['username'] ?>">
        <div class="invalid-feedback">
          <?php echo $errors['username'] ?>
        </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input name="email" class="form-control form-control-sm <?php echo $errors['email'] ? 'is-invalid' : '' ?>" value="<?php echo $user['email'] ?>">
    <div class="invalid-feedback">
          <?php echo $errors['email'] ?>
        </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input name="phone" class="form-control form-control-sm <?php echo $errors['phone'] ? 'is-invalid' : '' ?>" value="<?php echo $user['phone'] ?>">
    <div class="invalid-feedback">
          <?php echo $errors['phone'] ?>
        </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Website</label>
    <input name="website" class="form-control form-control-sm" value="<?php echo $user['website'] ?>">
  </div>
  <div class="mb-3">
  <label for="formFileSm" class="form-label">Small file input example</label>
  <input name="picture" class="form-control form-control-sm" id="formFileSm" type="file">
</div>

  
  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
</form>
</div>
    </div>
</div>