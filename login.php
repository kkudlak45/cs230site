<?php 
require "includes/header.php";
?>

<main>
    <link rel="stylesheet" href="css/login.css">
    <div class = "bg-cover text-centered">
        <div class="container-fluid w-25 justify-content-end" style="padding-top: 2vh">
            <div id="slides" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/carouselimg1.png" class="d-block w-100" alt="First Slide">
                    </div>
                    <div class="carousel-item">
                    <img src="images/carouselimg2.png" class="d-block w-100" alt="Second Slide">
                    </div>
                    <div class="carousel-item">
                    <img src="images/carouselimg3.png" class="d-block w-100" alt="Third Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style= "background: #FFFFFFBB; padding: 5vh 5vw 5vh 5vw">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Username or Email Address</label>
                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/Email" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword"  name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                       <label>
                            <input type="checkbox" value="remember-me" style="margin:10px"> Remember me
                       </label>
                    </div>
                    <button class="btn btn-lg btn-dark btn-block" name="login-submit" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
            </div>
        </div>
    </div>     
</main>