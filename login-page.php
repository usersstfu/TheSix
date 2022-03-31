<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Halaman Login Admin</title>
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=deivce-width, initial-scale=1.0">
</head>

<body>
    <div class="center">
        <h1>Login Admin</h1>
        <form method="POST" action="login.php">
    </div>
    <div class="text_field">
        <input type="form-control" id="inputEmail" name="username" placeholder="Username" required>
        <label for="Username"> Username </label>
    </div>
    <div class="text_field">
        <input type="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required>
        <label for="Password"> Password </label>
    </div>
    <input type="Submit" placeholder="Login" required>
    </div>
</body>

</html>