<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page ( Employee )</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Signup Page ( Employee )</h1>
    <form action="registration.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Jacky" required>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="abc@gmail.com" required>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="******" required>
    <input type="submit" name="submit" value="Register">
    <h5>Don't have an account?<a href="signin.php">Sign up here!</a></h5>
    </form>
</body>
</html>