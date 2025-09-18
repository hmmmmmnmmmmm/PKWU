<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: #fff;
      font-family: 'Poppins', sans-serif;
    }
    .profile-pic {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .form-group {
      position: relative;
      margin-bottom: 20px;
    }
    .form-group i {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      color: #888;
    }
    .form-control {
      padding-left: 35px;
      border: none;
      border-bottom: 1px solid #ddd;
      border-radius: 0;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #000;
    }
    .btn-save {
      background: #000;
      color: #fff;
      width: 100%;
      border-radius: 30px;
      padding: 10px;
        transition: background 0.3s ease; 
    }

    .btn-save:hover {
      background: #333; 
      color: #fff;
    }
    
  </style>
</head>
<body>

<div class="container text-center mt-4">

  <!-- Header -->
  <div class="position-relative text-center mb-3">
    <a href="<?= site_url('profile') ?>" class="position-absolute top-0 start-0">
      <button class="btn btn-light"><i class="fa fa-arrow-left"></i></button>
    </a>
    <h5 class="m-0">Edit Profile</h5>
    <span></span>
  </div>

  <!-- Profile Picture -->
  <img src="<?= base_url('assets/images/profile.jpg'); ?>" alt="Profile" class="profile-pic">
  <h6 class="fw-bold"><?= $user->nama; ?></h6>
  <small class="text-muted"><?= $user->username; ?></small>

  <!-- Form -->
  <form method="post" action="<?= site_url('profile/update') ?>" class="mt-4 text-start">

    <div class="form-group">
      <i class="fa fa-user"></i>
      <input type="text" name="nama" class="form-control" value="<?= $user->nama; ?>" placeholder="Full Name" required>
    </div>

    <div class="form-group">
      <i class="fa fa-envelope"></i>
      <input type="email" name="email" class="form-control" value="<?= isset($user->email) ? $user->email : ''; ?>" placeholder="Email Address">
    </div>

    <div class="form-group">
      <i class="fa fa-phone"></i>
      <input type="text" name="phone" class="form-control" value="<?= isset($user->phone) ? $user->phone : ''; ?>" placeholder="Phone Number">
    </div>

    <button type="submit" class="btn btn-save mt-4">Save Changes</button>
  </form>

</div>

</body>
</html>
