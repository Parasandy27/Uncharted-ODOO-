<?php
include 'database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    // $password = md5($_POST['pass']); // Use password_hash in real projects
    // $password = password_verify($_POST['pass'], $hash); // Use password_hash in real projects

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    // $sql2 = "SELECT * FROM users WHERE fname = '$fname'";

    $result = mysqli_query($conn, $sql);
    // $result2 = mysqli_query($conn, $sql2);
    $num_rows = mysqli_num_rows($result);
    // $result3 = mysqli_fetch_assoc($result2.$fname);''

    if ($num_rows == 1) {
        $_SESSION['email'] = $email;
        session_start();
        $_SESSION['loggedin'] = true;
        // $_SESSION['username'] = $sql2;
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/reg.css">
</head>

<body>

<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/img/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
</body>
</html>