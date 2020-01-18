<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/all.css" />
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <img
      src="./images/FireStreamLogo.png"
      width="200px"
      height="200px"
      alt="FireStream Logo"
    />
    <form action="connect.php" method="post">
      <div>
        <h5>Username</h5>
        <input type="username" name="username" id="" placeholder="Username" />
        <br />
        <h5>Password</h5>
        <input type="Password" name="password" placeholder="Password" />
        <br />
        <br />
        <input type="Submit" name="submit" value="LOGIN" />
      </div>
    </form>
  </body>
</html>
