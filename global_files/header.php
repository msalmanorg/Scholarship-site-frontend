<!-- Online Fontawesome Icon cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Slider CSS link for resposive the main container -->
<link rel="stylesheet" href="css/slider.css">
<!-- Custom global css link -->
<link rel="stylesheet" href="css/style.css">


<div class="header-container">
    <header>
        <div class="logo-link">
            <a href="#" class="logo">
                <img src="images/logo.png">
            </a>
            <ul class="nav-links" id="nav-links">

                <!-------- For responsive view -------->
                <div class="resp-logo-btns">
                    <div class="logo-xmark">
                        <a href="0" class="logo">
                            <img src="images/logo.png" alt="">
                        </a>
                        <i class="fa-solid fa-x" onclick="toggleNavbar()"></i>
                    </div>
                    <div class="login-signup-btns">
                        <a href="login.php">Login</a>
                        <a href="signup.php">Signup</a>
                    </div>
                </div>
                <!------------------------------->

                <li>
                    <a href="index.php" class="line-ancher">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="line-ancher">
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="line-ancher">
                        <span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="line-ancher">
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="line-ancher">
                        <span>Services</span>
                    </a>
                </li>
            </ul>
            <!-- For responsive don't remove it -->
            <div onclick="toggleNavbar()"></div>
        </div>
        <div class="login-signup-btns">
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
            <i class="fa-solid fa-bars" onclick="toggleNavbar()"></i>
        </div>
    </header>
</div>

<span class="slide-to-top-btn" title="Back to top">
    <i class="fa-solid fa-angles-up"></i>
</span>

<script src="script/toggle-slide-btn-onScroll.js"></script>
<script src="script/toggleNavbar.js"></script>