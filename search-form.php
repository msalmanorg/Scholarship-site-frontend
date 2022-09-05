<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Deme favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- Custom css link for search form -->
    <link rel="stylesheet" href="css/search-form.css">

    <title> Search Form </title>
</head>

<body>

    <?php include_once 'global_files/header.php' ?>



    <div class="main-container">

        <div class="search-form-container">
            <div class="form-container">
                <div class="search-form-img">
                    <div class="search-form-img-details">
                        <h2>Search Advance</h2>
                        <span>Lorem ipsum doloipit debitis aliquid at ae numquam reiciendis aspernatur praesentium?</span>
                    </div>
                </div>
                <form action="search-advanced-form.script.php" method="POST" class="search-form">
                    <div class="advanced-search-container">
                        <h1 class="search-heading">advanced search</h1>
                        <div class="advanced-inputs-container">

                            <div class="input-group input-group-text">
                                <div class="input-container">
                                    <label for="title">Title <span title="Required">*</span></label>
                                    <input required type="text" id="title" name="title">
                                </div>
                                <div class="input-container">
                                    <label for="organization">organization</label>
                                    <input type="text" id="organization" name="organization">
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-container">
                                    <label for="date">date</label>
                                    <input type="date" id="date" pattern="dd-mm-yyyy" name="date">
                                </div>
                                <div class="input-container">
                                    <label for="min-gpa">min <span>GPA</span> </label>
                                    <input type="number" id="min-gpa" step="0.0001" name="minGPA">
                                </div>
                                <div class="input-container">
                                    <label for="value">price</label>
                                    <div class="price-manage-container">
                                        <div class="show-price-container" tabindex="1">
                                            <p>min</p>
                                            <span>
                                                <!-- The min value will show here -->
                                            </span>
                                            <i class="fa-solid fa-dollar-sign"></i>
                                            <div>-</div>
                                            <p>max</p>
                                            <span>
                                                <!-- The max value will show here -->
                                            </span>
                                            <i class="fa-solid fa-dollar-sign"></i>
                                        </div>
                                        <div class="price-input-container d-none">
                                            <!-- ------------- -->
                                            <div class="price-container-heading">Use Slider or Enter min and max price</div>
                                            <div class="price-input" priceGap=200>
                                                <div class="field">
                                                    <span>Min</span>
                                                    <input type="number" class="input-min">
                                                </div>
                                                <div class="separator">-</div>
                                                <div class="field">
                                                    <span>Max</span>
                                                    <input type="number" class="input-max">
                                                </div>
                                            </div>
                                            <div class="price-slider">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="range-input">
                                                <input type="range" class="range-min" min="0" max="1020" name="minPrice">
                                                <input type="range" class="range-max" min="0" max="1020" name="maxPrice">
                                            </div>
                                            <!-- -------------------------- -->
                                        </div>
                                    </div>
                                </div>

                                <div class="input-container">
                                    <label>Study field</label>
                                    <!-- custom select -->
                                    <div class="select-container">
                                        <div class="select-dropdown" tabindex="1">
                                            <!-- here is the title of select -->
                                            <div class="selected-option">Selct a study field</div>
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div class="options-container">
                                            <div class="search-option">
                                                <input type="text" placeholder="Search Items">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </div>
                                            <ul class="options">
                                                <!-- these are the options of select -->
                                                <li value="bio">Medical</li>
                                                <li value="phy">Physices </li>
                                                <li value="math">mathematices </li>
                                                <li value="chemistry">chemistry </li>
                                                <li value="eng">English </li>
                                                <li value="social">Social Studies </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <label>Choose country</label>
                                    <!-- custom select -->
                                    <div class="select-container">
                                        <div class="select-dropdown" tabindex="1">
                                            <!-- here is the title of select -->
                                            <div class="selected-option">location</div>
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div class="options-container">
                                            <div class="search-option">
                                                <input type="text" placeholder="Search Items">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </div>
                                            <ul class="options">
                                                <!-- these are the options of select -->
                                                <li value="cananda">cananda </li>
                                                <li value="america">america </li>
                                                <li value="Pakistan">Pakistan </li>
                                                <li value="united states">united states </li>
                                                <li value="india">india </li>
                                                <li value="dubai">dubai </li>
                                                <li value="Turkey">Turkey </li>
                                                <li value="china">china </li>
                                                <li value="afganistan">afganistan </li>
                                                <li value="france">france </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <label>major</label>
                                    <!-- custom select -->
                                    <div class="select-container">
                                        <div class="select-dropdown" tabindex="1">
                                            <!-- here is the title of select -->
                                            <div class="selected-option">Major</div>
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div class="options-container">
                                            <div class="search-option">
                                                <input type="text" placeholder="Search Items">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </div>
                                            <ul class="options">
                                                <!-- these are the options of select -->
                                                <li value="Options1">Options 1</li>
                                                <li value="Options2">Options 2</li>
                                                <li value="Options3">Options 3</li>
                                                <li value="Options4">Options 4</li>
                                                <li value="Options5">Options 5</li>
                                                <li value="Options6">Options 6</li>
                                                <li value="Options7">Options 7</li>
                                                <li value="Options8">Options 8</li>
                                                <li value="Options9">Options 9</li>
                                                <li value="Options10">Options 10</li>
                                                <li value="Options11">Options 11</li>
                                                <li value="Options12">Options 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- input to store the values of custome selects  -->
                            <input type="hidden" id="studyFieldInput" name="studyField">
                            <input type="hidden" id="countryInput" name="country">
                            <input type="hidden" id="majorFieldInput" name="majorField">

                        </div>
                        <div class="btns-container">
                            <span class="resetSearcFormBtn">Reset</span>
                            <button type="submit">search</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>



    <?php include_once 'global_files/footer.php' ?>


</body>
<script src="script/search-advance.js"></script>

</html>