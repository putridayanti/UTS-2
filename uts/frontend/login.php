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
        <form id="form" action="" method="post">
            <div class="input-field">
                <p>your name </p>
                <input type="text" id="name" name="name" required placeholder="enter your name" maxlength="50">
            </div>
            <div class="input-field">
                <p>your email </p>
                <input type="email" id="email" name="email" required placeholder="enter your email" maxlength="50">
            </div>
            <div class="input-field">
                <p>your password</p>
                <input type="password" id="pass" name="pass" required placeholder="enter your pass" maxlength="50">
            </div>
            <div>
                <input type="submit" name="submit" value="login now" class="btn"><a href="../backend/index.php"></a>
            </div>
            <p>do you not have accound?</p>
            <a href="register.php">register now</a>
        </form>
    </div>

    <script>
        let form = document.getElementById('form');
        form.onsubmit= function() {
            console.log("oooooooooooooooooo");
            event.preventDefault();
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let pass = document.getElementById('pass').value;

            if ((name == "admin") && (email == "admin@mail.com") && (pass == "admin")){
                window.location.href = '../backend/index.php';
            }
            else{
                alert("anda belum terdaftar")
            }
        }
    </script>
</body>

</html>