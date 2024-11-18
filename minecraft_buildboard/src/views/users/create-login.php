<body >
    <div class="fcontainer" id="fcontainer">
        <div class="form-container sign-up">
            <form action="../register-page.php" method="post">
                <h1>Create Account</h1>
                <span>Register with E-mail</span>
                
                <input type="text" placeholder="Name" name="fname" id="fname" class="input-field" value="<?php if (isset($fn)) echo htmlspecialchars($fn); ?>">

                <input type="email" placeholder="Enter E-mail" name="email" id="email" class="input-field" value="<?php if (isset($e)) echo htmlspecialchars($e); ?>">
                
                <input type="password" placeholder="Enter Password" name="psword1" class="input-field" id="psword1">

                <input type="password" placeholder="Confirm Password" name="psword2" class="input-field" id="psword2">
                <button>Sign Up</button>
            </form>
        </div>


        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-github'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-linkedin'></i></a>
                </div>
                <span>Login With Email & Password</span>
                <input type="email" placeholder="Enter E-mail">
                <input type="password" placeholder="Enter Password">
                <a href="#">Forgot Password?</a>
                <button>Sign In</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome back!</h1>
                    <p>Sign in With ID & Password</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome to<br>BuildBoard!</h1>
                    <p>Share us your Minecraft Experiences</p>
                    <button class="hidden" id="register">Create Account</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/forms.js"></script>
</script>
</body>
</html>
<!--
    <div class="">
        <h1 class="form-title">Create an Account</h1>
        
        <form action="../register-page.php" method="post"> 
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="input-field" value="<?php if (isset($fn)) echo htmlspecialchars($fn); ?>"><br>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" class="input-field" value="<?php if (isset($ln)) echo htmlspecialchars($ln); ?>"><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="input-field" value="<?php if (isset($e)) echo htmlspecialchars($e); ?>"><br>

            <label for="psword1">Password:</label>
            <input type="password" name="psword1" class="input-field" id="psword1"><br>

            <label for="psword2">Confirm Password:</label>
            <input type="password" name="psword2" class="input-field" id="psword2"><br>

             Display validation errors if any exist after the form is submitted 
            <?php if (!empty($errors)) {
                display_validation_errors($errors);
            } ?>

            <input type="submit" value="Register" class="">
        </form>
    </div>
</body>
</html>
-->
