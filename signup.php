<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Deme favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <title>SignUp Page</title>

    <!-- Online Fontawesome Icon cdn provided in the Header Component  -->
    <!-- Custom Globle css link provided in Header Component-->

    <!-- Custom css for forms -->
    <link rel="stylesheet" href="css/login-signup-form.css">

</head>

<body>

    <?php include_once 'global_files/header.php' ?>


    <div class="main-container">
        <div class="form-container signup-form-container">
            <div class="form-left-container">
                <div>
                    <h3>Register Yourself</h3>
                    <span>Join millions of students saving on college !</span>
                </div>
            </div>
            <div class="form-right-container">
                <div class="form-right">
                    <h1>Sign Up now! </h1>
                    <form class="form" action="#" method="post">
                        <div class="input-group">
                            <label for="f_name">First name <span>*</span> </label>
                            <input type="text" required id="f_name" placeholder="Enter your first name">
                        </div>
                        <div class="input-group">
                            <label for="l_name">Last name <span>*</span> </label>
                            <input type="text" required id="l_name" placeholder="Enter your last name">
                        </div>
                        <div class="input-group">
                            <label for="email">Email <span>*</span> </label>
                            <input type="email" required id="email" placeholder="Enter your email">
                        </div>
                        <div class="input-group input-group-password">
                            <label for="password">Password <span>*</span> </label>
                            <input type="password" minlength="8" required id="password" placeholder="Create 8+ strong password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="input-group input-group-password">
                            <label for="c_password">Confirm Password <span>*</span> </label>
                            <input type="password" minlength="8" required id="c_password" placeholder="Confirm Password">
                            <i class="fas fa-eye"></i>
                            <div class="invalid-input-error d-none">Please fill the correct password</div>
                        </div>
                        <button type="submit">Register Now</button>

                        <div class="other-links">
                            <span>Already have an account?</span>
                            <a href="login.php" class="line-ancher">
                                <span>Login Now</span>
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
<script src="script/match-passwords.js"></script>

</html>