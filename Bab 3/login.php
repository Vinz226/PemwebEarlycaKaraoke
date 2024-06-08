<!DOCTYPE html>
<html>
<head>
    <title>Earlyca - Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <a href="index.php" class="back-button">
        <img src="assets/icons8-arrow-50.png" alt="Back to Index">
    </a>

    <div class="main">   
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="login">
            <form action="login-proses.php" method="POST" >
                <label for="chk" aria-hidden="true">Earlyca - Login</label>
                <input type="username" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
                
        <div class="signup">
            <form method="POST" action="register-proses.php">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="number" name="umur" placeholder="Umur">
                <button type="submit">Sign up</button>
            </form>
        </div>
    </div>
</body>
</html>
