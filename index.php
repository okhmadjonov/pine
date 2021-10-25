<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pineapple</title>
    <link rel="icon" href="./img/logo.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">

</head>

<body>
<div class="wrapper">
    <div class="wrapper_left">
        <nav>
            <a href="#" class="logo">
                <img src="img/logo.png" alt="Logo">
                <h4>pineapple.</h4>
            </a>
            <ul class="menu_links">
                <li><a href="#">About</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

        </nav>
        <div class="wrapper_left_content">
            <div class="subscribe_title_paragraph">
                <h2 class="subscribe_title">
                    Subscribe to newsletter
                </h2>
                <p class="subscribe_paragraph">
                    Subscribe to our newsletter and get 10% discount on pineapple glasses.
                </p>
            </div>
            <div class="subscribe_form">
                <form action="connect.php" method="post" id="form">
                    <div class="subscribe_email">
                        <input
                                name="email"
                                id="email"
                                onkeyup="emailValidate()"
                                class="email"
                                autocomplete="off"
                                type="email"

                                placeholder="Type your email address here…"/>

                        <div class="input_arrow">
                            <img src="img/ic_arrow.svg" alt="">
                        </div>

                        <div class="icons">
                            <span class="icon1"></span>
                            <span class="icon2"></span>
                        </div>
                        <div class="error_text">Please provide a valid e-mail address</div>
                        <button type="submit" class="form_submit">Submit</button>
                        <div class="subscribe_checkbox">
                            <input type="checkbox" value="checked" name="form_check" class="form_check">
                            <p>I agree to <a href="#">terms of service</a></p>

                        </div>

                    </div>

                </form>
            </div>
            <div class="line"></div>
            <div class="social_links">
                <div class="facebook"></div>
                <div class="instagram"></div>
                <div class="twitter"></div>
                <div class="youtube"></div>
            </div>
        </div>
    </div>
    <div class="wrapper_right">
        <img src="img/image_summer.png" alt="Summer">
    </div>

</div>


<script src="js/app.js"></script>
</body>

</html>