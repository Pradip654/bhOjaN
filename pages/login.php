<html>

<head>
    <title>Login</title>

    <link rel="stylesheet" href="../css/styl.css">

</head>

<body>

    <div class="hero">

        <div class="form-box">
            
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <div class="social-icons">
                <a href="https://www.facebook.com"> <img src="../image/fb.png"> </a>
                <a href="https://www.twitter.com"> <img src="../image/tw.png"> </a>
                <a href="https://www.google.com"> <img src="../image/gp.png"> </a>
            </div>

            <form id="login" class="input-group" action="#" method="#">
                <input type="text" class="input-field" placeholder="User Id" minlength="5" required>
                <input type="password" class="input-field" placeholder="Enter Password" minlength="8" required>
                <input type="checkbox" class="chech-box" checked>
                <span>Remember Password</span>
                <input type="submit" class="submit-btn" value="Login">
            </form>

            <form id="register" class="input-group" action="../include/bir.php" method="POST">
                <input type="text" class="input-field" placeholder="User Id" name="name" minlength="5" required>
                <input type="email" class="input-field" id="email" name="email" placeholder="Email Id" required>
                <input type="password" class="input-field" id="fPassword" name="password" placeholder="Enter Password" minlength="8" required>
                <input type="password" class="input-field" id="sPassword" name="repassword" placeholder="Confirm Password" minlength="8" required>
                <input type="checkbox" class="chech-box" checked>
                <span>I agree to the terms and condition</span>
                <input type="submit" class="submit-btn" value="Register">
            </form>

        </div>

    </div>

    <script>

        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px"
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px"
        }
    </script>

</body>

</html>