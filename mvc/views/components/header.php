<div class="body1">
        <div class="main">
            <!-- header -->
            <header>
                <div class="wrapper">
                    <h1>
                        <a href="index.html" id="logo">Đà Nẵng</a>
                        <!-- <span id="slogan">International Travel</span> -->
                    </h1>
                    <div class="right">
                        <nav>
                            <ul id="top_nav">
                                <li>
                                    <a href="index.html"><img src="images/img1.gif" alt=""></a>
                                </li>
                                <li>
                                    <a href="index-4.html"><img src="images/img2.gif" alt=""></a>
                                </li>

                            </ul>
                        </nav>
                        <nav>
                            <ul id="menu">
                                <li><a href="home">Home</a></li>
                                <li><a href="#">Introduce</a></li>
                                <li><a href="#">News</a></li>
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <li><a href="#">Hi <?php echo $_SESSION['login']['tenNV'] ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="account">frofile</a></li>
                                            <li><a href="#">flight</a></li>
                                            <?php if (isset($_SESSION['isAdmin'])) {
                                            ?>
                                                <li><a href="#">personnel</a></li>
                                                <li><a href="#">statistical</a></li>
                                            <?php } ?>
                                            <li><a href="login/logOut">logout</a></li>
                                        </ul>
                                    </li>
                                        <?php } else { ?>
                                            <li><a href="login">Login</a></li>
                                        <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class="main">
        <div id="banner">
            <div class="text1">
                COMFORT<span>Guaranteed</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <a href="#" class="button_top">Order Tickets Online</a>
        </div>
    </div>