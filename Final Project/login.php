<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Login - Tugas 13 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylelogin.css">
    </head>
    <body>
        <div class="container">
            <div id="logobox">
                <img src="logo.png" alt="">
            </div>
            <p><b>LOGIN</b></p>
            <form action="proses.php" method="POST">
                <table>
                    <tr>
                        <td class="labeltd">E-mail</td>
                        <td><input type="email" class="form-login" name="email" placeholder="Masukkan E-mail"></td>
                    </tr>
                    <tr>
                        <td class="labeltd">Password</td>
                        <td><input type="password" class="form-login" name="password" placeholder="Masukkan Password"></td>
                    </tr>
                </table>
                <button type="submit" class="button-submit" name="login">Masuk</button>
                <p><b>Belum Punya Akun? <a class="abutton" href="register.php">Register</a> sekarang!</b>
                <hr/>
            </form>
        </div>
  </body>
</html>