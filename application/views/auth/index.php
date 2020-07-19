<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <title>Document</title>
</head>

<body>

  <div class="container">
    <form action="<?= base_url('auth/login') ?>" method="post">
      <div class="input">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username">
        <?= form_error('username', '<small style="display:block; color:red">', '</small>'); ?>
      </div>
      <div class="input">
        <label for="username">Password</label>
        <input type="password" name="password" placeholder="Password">
        <?= form_error('password', '<small style="display:block; color:red">', '</small>'); ?>
      </div>
      <a href="">Lupa Password?</a>
      <button type="submit">LOGIN</button>
    </form>
  </div>

</body>

</html>