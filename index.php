<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Online Fontawesome Icon cdn provided in the Header Component  -->
    <!-- Custom Globle css link provided in Header Component-->

    
    <!-- Deme favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">


    <!-- Slider CSS -->
    <link rel="stylesheet" href="css/slider.css">
    <title>Home Page</title>
</head>

<body>

    <?php include_once 'global_files/header.php' ?>

    <h1 style="text-align: center; margin: 10px 0;" >I'm working on this page............</h1>

    <div class="main-container">


        <div class="slider-cards-container">

            <div class="slider">
                <div class="slider-container">
                    <div class="carousel">
                        <div class="carousel-inner">
                            <!-- <img src="images/slider-img1.jpg" class="carousel-item"> -->
                            <img src="images/slider-image.jpg" class="carousel-item">
                            <img src="images/slider-image.jpg" class="carousel-item">
                            <img src="images/slider-image.jpg" class="carousel-item">
                            <img src="images/slider-image.jpg" class="carousel-item">
                            <img src="images/slider-image.jpg" class="carousel-item">
                        </div>
                        <div class="carousel-controls" style="display: none;">
                            <span class="prev">prev</span>
                            <span class="next">next</span>
                        </div>
                        <div class="carousel-indicators"></div>
                    </div>
                </div>
            </div>

            <div class="slider-cards">
                <ul>
                    <li>
                        <a href="#">
                            <span>Supervisor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Supervisor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Supervisor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Supervisor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Supervisor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                        </a>
                    </li>
                </ul>
            </div>

        </div>



        <div class="banner-section">

            <div class="images-slideshow">

                <div class="slideshow-container">

                    <div class="slideshow-item fade-slideshow">

                        <div class="slideshow-content-container">
                            <div class="slideshow-image">
                                <img src="images/slider-img1.jpg">
                            </div>
                            <div class="slideshow-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quasi quidem aut exercitationem amet odio rerum eligendi quo magni at praesentium, sapiente minima! Illum voluptas facilis aspernatur vero voluptatibus iure porro sapiente?
                            </div>
                        </div>

                    </div>
                    <div class="slideshow-item fade-slideshow">

                        <div class="slideshow-content-container">
                            <div class="slideshow-image">
                                <img src="images/slider-img2.jpg">
                            </div>
                            <div class="slideshow-details">
                            m amet odio rerum eligendi quo magni at praesentium, sapientem amet odio rerum eligendi quo magni at praesentium, sapientem amet odio rerum eligendi quo magni at praesentium, sapientem amet odio rerum eligendi quo magni at praesentium, sapiente
                            </div>
                        </div>

                    </div>


                    <a class="prev-slidshow-btn" onclick="plusSlides(-1)">❮</a>
                    <a class="next-slidshow-btn" onclick="plusSlides(1)">❯</a>

                </div>


                <!-- <div class="image-slidshow-dots-container">
                    <span class="image-slidshow-dot" onclick="currentSlide(1)"></span>
                    <span class="image-slidshow-dot" onclick="currentSlide(2)"></span>
                    <span class="image-slidshow-dot" onclick="currentSlide(3)"></span>
                </div> -->

            </div>

        </div>


    </div>


    <?php include_once 'global_files/footer.php' ?>





</body>
<script src="script/slider-script.js"></script>
<script src="script/images-slidshow.js"></script>


</html>