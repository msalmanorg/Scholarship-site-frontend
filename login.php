<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Deme favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">


    <title>Login Page</title>

    <!-- Online Fontawesome Icon cdn provided in the Header Component  -->
    <!-- Custom Globle css link provided in Header Component-->

    <!-- CSS link for the signup and login files only -->
    <link rel="stylesheet" href="css/login-signup-form.css">

</head>

<body>


    <?php include_once 'global_files/header.php' ?>


    <div class="main-container">
        <div class="form-container login-form-container ">
            <div class="form-left-container">
                <div>
                    <h3>Welcome Back</h3>
                    <span>Login to see what scholarships you recieved today !</span>
                </div>
            </div>
            <div class="form-right-container">
                <div class="form-right">
                    <h1>Login to continue</h1>
                    <form class="form" action="#" method="post">
                        <!-- error message to show the password or username is invalid when the user have a fail attempt to login -->
                        <div class="invalid-data-error" style="display: none;">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <span>Invalid username or password</span>
                        </div>
                        <div class="input-group">
                            <label for="email">Email <span>*</span> </label>
                            <input type="email" required id="email" placeholder="Enter email or username">
                        </div>
                        <div class="input-group input-group-password">
                            <label for="password">Password <span>*</span> </label>
                            <input type="password" required id="password" placeholder="Enter your password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="forgot-password">
                            <a href="#" class="line-ancher">
                                <span>Forgot Password</span>
                            </a>
                        </div>
                        <button type="submit">Login In</button>

                        <div class="other-links">
                            <span>Not have any account?</span>
                            <a href="signup.php" class="line-ancher">
                                <span>Signup Now</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php include_once 'global_files/footer.php' ?>


</body>

<script src="script/show-hide-passwords.js"></script>

</html>