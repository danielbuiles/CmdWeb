<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cp/formEmailValidation.css">
    <title>Document</title>
</head>
<body>
    <div class="field email-input">
        <h1 class="heading">Email Validation</h1>
        <input type="email" id="email" onkeydown="emailValidation()">
        <div class="error-text"></div>
    </div>
    <script>
        function emailValidation() {
            var email = document.querySelector("#email");
            var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            var error_text = document.querySelector('.error-text');

            error_text.style.opacity = "1";
            if(email.value.match(pattern)){
                error_text.innerHTML = "your email is valid"
                error_text.style.color = "rgb(26, 211, 134)";
                error_text.style.background = "rgb(27, 187, 120,0.121)";
                error_text.style.border = "";
            }else{
                error_text.innerHTML = "your email is not invalid";
                error_text.style.color = "rgb(255, 0, 0,0.700)";
                error_text.style.background = "rgb(255,0,0,0.08)";
                error_text.style.border = "1px solid red";
            }
        }
    </script>
</body>
</html>