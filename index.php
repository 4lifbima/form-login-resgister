<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="asset/css/styles.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <div class="form-container">
      <form action="login.php" method="post">
        <h2>Login Form</h2>
        <div class="input-container">
          <i data-feather="user" class="icon"></i>
          <input
            type="text"
            id="username"
            name="username_email"
            placeholder="Username or Email"
            required
          />
        </div>
        <hr />
        <div class="input-container">
          <i data-feather="lock" class="icon"></i>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
            required
          />
        </div>
        <hr />
        <button type="submit">Login</button>
        <a href="daftar.php">Register</a>
      </form>
    </div>
    <script>
      feather.replace();
    </script>
  </body>
</html>
