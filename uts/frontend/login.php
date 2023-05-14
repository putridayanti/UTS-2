<style type="text/css">
    <?php include 'css/style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <div class="title">
            <h1>Login now</h1>
        </div>
        <form action="../backend/index.php" method="post">
            <div class="input-field">
                <p>your name </p>
                <input type="text" name="name" required placeholder="enter your name" maxlength="50">
            </div>
            <div class="input-field">
                <p>your email </p>
                <input type="email" name="email" required placeholder="enter your email" maxlength="50">
            </div>
            <div class="input-field">
                <p>your password</p>
                <input type="password" name="pass" required placeholder="enter your pass" maxlength="50">
            </div>
            <div>
            <input type="submit" name="submit" value="login now" class="btn"><a href="../backend/index.php"></a>
            </div>
            <p>do you not have accound?</p>
            <a href="register.php.php">register now</a>
        </form>
    </div>
</body>
</html>