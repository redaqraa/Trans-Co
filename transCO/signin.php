<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/svg+xml+png">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <!-- Sign In Form -->
                    <form action="login.php" method="POST" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <h4>Trans <span style="color: rgb(255, 174, 0);">CO</span></h4>
                        </div>
                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registered yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="name" id="name" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" name="password" id="password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>
                            <input type="submit" value="Sign In" class="sign-btn" />
                        </div>
                    </form>

                    <!-- Sign Up Form -->
                    <form action="register.php" method="POST" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <h4>Trans <span style="color: rgb(255, 174, 0);">CO</span></h4>
                        </div>
                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="user-name" id="user-name" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>
                            <div class="input-wrap">
                                <input type="email" name="email" id="email" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" name="password" id="password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>
                            <input type="submit" value="Sign Up" class="sign-btn" />
                            <p class="text">
                                By signing up, I agree to the
                                <a href="termes-sign.php">Terms & Conditions</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="assets/images/gallery-3.jpg" class="image img-1 show" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/js/app.js"></script>
</body>
</html>
