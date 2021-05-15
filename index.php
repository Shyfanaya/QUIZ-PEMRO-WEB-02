<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container" >
        <h1>Halaman Login</h1>
        <br>
        <form action='LOGIN.php' method="POST"> 
            <label>Username</label><br>
            <input type="text" name="username"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <input class="button" type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>