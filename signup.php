<?php include_once("partials/login_header.php"); ?>
    <!--This is the main container-->
    <div class="container">
        <!-- Wrapper for the login and sign in form -->
        <div class="login-wrapper">
            <form action="" id="validation-form">
                <div class="fname">
                    <label for="fname">FirstName</label>
                    <input type="text" name="fname" id="fname" placeholder="FirstName">
                    <span id="fname_error"></span>
                </div>
                <div class="lname">
                    <label for="lname">LastName</label>
                    <input type="text" name="lname" id="lname" placeholder="LastName">
                    <span class="error" id="lname_error"></span>
                </div>
                <div class="username">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <span class="error" id="pass_error"></span>
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <span class="error" id="pass_error"></span>
                </div>
                <div class="password">
                    <label for="conf_password">Password</label>
                    <input type="password" name="conf_password" id="conf_password" placeholder="Confirm Password">
                    <span class="error" id="conf_pass_error"></span>
                </div>
                <div class="submit">
                    <input class="btn btn-primary" type="submit" value="Sign Up" id="submit">
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/signupvalidation.js"></script>
    <?php include_once("partials/login_footer.php"); ?>