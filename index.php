<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <!-- Title -->
    <title>Sky perfumes</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>

<body>
    <!-- start nav -->
    <nav class="navbar position-fixed f-patrick fs-4 px-5">
        <a href="#" class="logo">Sky perfumes</a>
        <div class="links">
            <a onclick="goToParagraph('paragraph1')" class="nav_a">Home</a>
            <a onclick="goToParagraph('paragraph2')" class="nav_a">About Us</a>
            <a onclick="goToParagraph('paragraph3')" class="nav_a">Product</a>
            <a onclick="goToParagraph('paragraph4')" class="nav_a">Services</a>
            <a onclick="goToParagraph('paragraph5')" class="nav_a">Sellers</a>
            <a onclick="goToParagraph('paragraph6')" class="nav_a">Follow Us</a>
        </div>

        <?php if (isset($_SESSION['username'])) : ?>
            <div class="login">
                <a class="my-btn text-white" href="log-out.php">Log out</a>
            </div>
        <?php else : ?>
            <div class="login">
                <a class="my-btn text-white" href="sign-up.php" class="mx-4">Sign Up</a>
                <a class="my-btn text-white" href="login.php">Login</a>
            </div>
        <?php endif;?>
    </nav>
    <!-- end nav -->

    <!-- start header -->
    <header id="paragraph1" style="height: 100vh;">
        <div class="left">
            <h1>Let's Buy Some <span>Sky perfumes</span></h1>
            <p class="font py-4 my-5 f-patrick">Welcome to the world of unique and luxurious perfumes!
                We proudly present an exceptional collection of exclusive fragrances, curated to accompany your moments
                with distinctive and lasting scents.
            </p>
            <a href="#" class="icon-header button-header">
                <i class='bx bx-basket icon'></i>
                <span class="text font f-patrick">Buy Now</span>
            </a>
        </div>
        <div class="w3-content w3-section mt-5">
            <img class="mySlides w3-animate-fading rounded-circle" src="assets/img/item-1.png"
                style="width:500px; height: 500px;">
            <img class="mySlides w3-animate-fading rounded-circle" src="assets/img/item-2.png"
                style="width:500px; height: 500px;">
            <img class="mySlides w3-animate-fading rounded-circle" src="assets/img/item-3.png"
                style="width:500px; height: 500px;">
            <img class="mySlides w3-animate-fading rounded-circle" src="assets/img/item-4.png"
                style="width:500px; height: 500px;">
        </div>
    </header>
    <!-- end header -->

    <!--start about us -->
    <section id="paragraph2" class="pt-5">
        <h2 class="separator f-patrick">
            ABOUT US
        </h2>
        <div class="row about-us fs-5 pt-3">
            <div class="col-12 col-sm-10 col-md-6 col-lg-6">
                <div>
                    <p class="f-patrick">
                        Our store, inspired by the beauty of nature and the art of perfumery, has provided you with
                        the best and highest quality perfumes. From classic fragrances to modern scents, everyone is
                        waiting for you here.
                    </p>
                    <ul class="nav flex-column ">
                        <li>
                            <p class="f-patrick"><i class="bi bi-check2-all text-danger fw-bold  fs-5"></i>
                                Men's perfumes: for men who are looking for a different and attractive scent.</p>
                        </li>
                        <li>
                            <p class=" f-patrick"><i class="bi bi-check2-all text-danger fw-bold  fs-5"></i>
                                Women's perfumes: with delicate and pleasant scents for stylish and special women.
                            </p>
                        </li>
                        <li>
                            <p class=" f-patrick"><i class="bi bi-check2-all text-danger fw-bold  fs-5"></i>
                                Unisex fragrances: suitable for everyone, with fragrances that break down gender
                                boundaries.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-6 col-lg-6">
                <div>
                    <p class="f-patrick mb-5">Night Dream is a unique perfume that takes you to a world of good
                        feelings and memories with a warm and sweet scent. The initial notes with a combination of
                        bitter orange and bergamot give you freshness and energy. Then, with the middle notes of
                        vanilla and rose, the sense of tenderness and beauty reaches its peak. Finally, the final
                        notes of musk and amber add warmth and longevity to the fragrance.</p>
                    <a href="" class="my-btn mt-5 f-patrick text-white">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!--start about us -->

    <!-- start Product -->
    <section id="paragraph3" class="pt-5">
        <h2 class="separator f-patrick">
            Product
        </h2>

        <div class="nft-shop f-patrick">
            <div class="nft-list f-patrick">
                <div class="item item-cord">
                    <img src="assets/img/item-1.png">
                    <div class="info">
                        <div>
                            <h5>CryptoArt</h5>
                        </div>
                        <p>5 of 33</p>
                    </div>
                    <div class="bid">
                        <p>2h 28m 1s</p>
                        <a href="#" class="button text-white">Place a Bid</a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/item-2.png">
                    <div class="info">
                        <div>
                            <h5>Abs-Art</h5>
                        </div>
                        <p>7 of 12</p>
                    </div>
                    <div class="bid">
                        <p>1h 28m 1s</p>
                        <a href="#" class="button text-white">Place a Bid</a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/item-3.png">
                    <div class="info">
                        <div>
                            <h5>TestArt</h5>
                        </div>
                        <p>9 of 23</p>
                    </div>
                    <div class="bid">
                        <p>4h 21m 1s</p>
                        <a href="#" class="button text-white">Place a Bid</a>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/item-4.png">
                    <div class="info">
                        <div>
                            <h5>Art-4</h5>
                        </div>
                        <p>1 of 33</p>
                    </div>
                    <div class="bid">
                        <p>0h 28m 1s</p>
                        <a href="#" class="button text-white">Place a Bid</a>
                    </div>
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="nft-list">
                    <div class="item">
                        <img src="assets/img/item-5.png">
                        <div class="info">
                            <div>
                                <h5>CryptoArt</h5>
                            </div>
                            <p>5 of 33</p>
                        </div>
                        <div class="bid">
                            <p>2h 28m 1s</p>
                            <a href="#" class="button text-white">Place a Bid</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/item-6.png">
                        <div class="info">
                            <div>
                                <h5>Abs-Art</h5>
                            </div>
                            <p>7 of 12</p>
                        </div>
                        <div class="bid">
                            <p>1h 28m 1s</p>
                            <a href="#" class="button text-white">Place a Bid</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/item-7.png">
                        <div class="info">
                            <div>
                                <h5>TestArt</h5>
                            </div>
                            <p>9 of 23</p>
                        </div>
                        <div class="bid">
                            <p>4h 21m 1s</p>
                            <a href="#" class="button text-white">Place a Bid</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/item-8.png">
                        <div class="info">
                            <div>
                                <h5>Art-4</h5>
                            </div>
                            <p>1 of 33</p>
                        </div>
                        <div class="bid">
                            <p>0h 28m 1s</p>
                            <a href="#" class="button text-white">Place a Bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more">
                <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">View More <svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform:none;">
                        <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </section>
    <!-- end Product -->

    <!-- start Services  -->
    <section id="paragraph4" class="pt-5 f-patrick ">
        <h2 class="separator f-patrick">
            Services
        </h2>
        <div class="sell-nft">
            <div class="item" style="width: 50%;">
                <div class="header">
                    <i class='bx bx-wallet-alt'></i>
                    <h5 class="fw-bold"> We will gladly buy them from you!</h5>
                </div>
                <p>At our store, we believe that everyone can play a role in protecting the
                    environment and
                    reducing waste. For this reason, we have launched a new program where you can
                    sell us your
                    empty perfume bottles and at the same time, enjoy special benefits.</p>
            </div>
            <div class="item" style="width: 50%;">
                <div class="header">
                    <i class='bx bx-cart-alt'></i>
                    <h5 class="fw-bold">A pleasant purchase with free shipping to all places!</h5>
                </div>
                <p>At our perfume store, we aim to provide the best shopping experience to our dear
                    customers.
                    For this reason, we send all your orders for free and without any additional
                    costs
                    throughout the country. From now on, you can easily choose your favorite perfume
                    and we will
                    deliver it carefully and quickly to your door.</p>
            </div>
            <div class="item" style="width: 50%;">
                <div class="header">
                    <i class='bx bx-grid-alt'></i>
                    <h5 class="fw-bold">Get points and enjoy special benefits with every purchase!
                    </h5>
                </div>
                <p>At our perfume store, appreciating our loyal customers is our priority. For this
                    purpose, we
                    have launched a special scoring program for you. With every purchase, points are
                    added to
                    your account that you can use to get special discounts, gifts and special
                    offers. The more
                    you shop, the more points you'll collect and the more discounts and benefits
                    you'll get.</p>
            </div>
        </div>
    </section>
    <!-- end Services  -->

    <!-- start sellers -->
    <section id="paragraph5" class="pt-5 f-patrick">
        <h2 class="separator">
            Sellers
        </h2>
        <div class="sellers">
            <div class="item item-1 position-relative">
                <img src="assets/img/profile-1.jpg">
                <div class="info">
                    <h4>Jhone D</h4>
                    <p>15.2K</p>
                </div>
                <div class="seller-text bg-white position-absolute">
                    Iste modi ab sunt dolores ex dolor, suscipit fuga sed earum.
                </div>
            </div>
            <div class="item item-2 position-relative">
                <img src="assets/img/profile-2.jpg">
                <div class="info">
                    <h4>Gregory B</h4>
                    <p>12.7K</p>
                </div>
                <div class="seller-text bg-white position-absolute">
                    Iste modi ab sunt dolores ex dolor, suscipit fuga sed earum.
                </div>
            </div>
            <div class="item item-3 position-relative">
                <img src="assets/img/profile-3.png">
                <div class="info">
                    <h4>Stephen E</h4>
                    <p>7.9K</p>
                </div>
                <div class="seller-text bg-white position-absolute">
                    Iste modi ab sunt dolores ex dolor, suscipit fuga sed earum.
                </div>
            </div>
            <div class="item item-4 position-relative">
                <img src="assets/img/profile-4.png">
                <div class="info">
                    <h4>Russell M</h4>
                    <p>4.2K</p>
                </div>
                <div class="seller-text bg-white position-absolute">
                    Iste modi ab sunt dolores ex dolor, suscipit fuga sed earum.
                </div>
            </div>
        </div>
    </section>
    <!-- start sellers -->

    <!-- start footer -->
    <footer class="row font footer" id="paragraph6">
        <div class="col-sm text-footer">
            <h3 class="copyright">
                Experience special scents with us.
            </h3>
        </div>
        <div class="col-sm">
            <h3>Information</h3>
            <ul class="list-unstyled links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cooperation</a></li>
                <li><a href="#">Sponsorship</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>Follow us</h3>
            <ul class="social">
                <div class="icon-footer ins">
                    <li class=""><a href="#"><span class="bx bxl-instagram ins"> instagram</span></a></li>
                </div>
                <div class="icon-footer fac">
                <li><a href="#"><span class="bx bxl-facebook-square"> facebook</span></a></li>
            </div>
                <div class="icon-footer git">
                <li><a href="#"><span class="bx bxl-github"> github</span></a></li>
            </div>
            <div class="icon-footer lin">
                <li><a href="#"><span class="bx bxl-linkedin-square"> linkedin</span></a></li>
            </div>
            </ul>
        </div>
        <div class="center">
            <p>Copyright © 2024 Sky Perfumes, All Rights Reserved.</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- JS -->
    <script src="assets/js/app.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/bootstrap.min.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
</body>

</html>