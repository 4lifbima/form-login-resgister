<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Form</title>
    <link rel="stylesheet" href="asset/css/styles.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <div class="form-container">
      <form action="register.php" method="post">
        <h2>Register Form</h2>
        <div class="input-container">
          <i data-feather="user" class="icon"></i>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Username"
            required
          />
        </div>
        <hr />
        <div class="input-container">
          <i data-feather="mail" class="icon"></i>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
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
        <div class="input-container">
          <i data-feather="lock" class="icon"></i>
          <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            placeholder="Confirm Password"
            required
          />
        </div>
        <hr />
        <button type="submit">Register</button>
        <a href="index.php">Login</a>
      </form>
    </div>
    <script>
      feather.replace();
    </script>
  </body>
</html>
