<?php include_once("partials/login_header.php"); ?>
    <!--This is the main container-->
    <div class="container">
        <!-- Wrapper for the login and sign in form -->
        <div class="login-wrapper">
            <form method="post" action="" id="validation-form">
                <div class="username">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">
                    <span class="error" id="user_error"></span>
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <span class="error" id="pass_error"></span>
                </div>
                <div class="submit">
                    <input class="btn btn-primary" type="submit" value="Login" id="submit">
                </div>
                <div id="forgot_password">
                    <a href="">Forget Password</a>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/loginvalidation.js"></script>
<?php include_once("partials/login_footer.php"); ?>