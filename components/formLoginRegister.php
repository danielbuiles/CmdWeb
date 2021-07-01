<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/cp/formLoginRegister.css">
    <title>LoginRegistration</title>
</head>
    <body>
        <div class="container">
            <div class="main-text">
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">
                        Login
                    </label>
                    <label for="signup" class="slide signup">
                        Signup
                    </label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form action="" class="login">
                        <div class="field">
                            <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link">
                            <a href="#">
                                Forgot Password
                            </a>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login">
                        </div>
                        <div class="signup-links">
                            Not a member?
                            <a href="#">Signup Now</a>
                        </div>
                    </form>
                    <form action="" class="signup">
                        <div class="field">
                            <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Confirm Password" required>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            const loginText = document.querySelector(".main-text login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const SignupBtn = document.querySelector("label.signup");
            const signupLink=document.querySelector("form .signup-links a");
            SignupBtn.onclick = (() => {
                loginForm.style.marginLeft = "-50%";
                loginText.style.marginLeft= "-50%";
            });
            loginBtn.onclick = (() => {
                loginForm.style.marginLeft = "0%";
                loginText.style.marginLeft= "0%";
            });
            signupLink.onclick = (() => {
                SignupBtn.click();
                return false;
            });
        </script>
    </body>
</html>