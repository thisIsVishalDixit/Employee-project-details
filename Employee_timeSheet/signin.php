<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page ( Employee ) </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Signin Page ( Employee )</h1>
    <form action="login.php" method="post">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="abc@gmail.com" required>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="******" required>
    <input type="submit" name="submit" value="login">
    <h5>Don't have an account?<a href="signup.php">Sign up here!</a></h5>
    </form>
</body>
</html>