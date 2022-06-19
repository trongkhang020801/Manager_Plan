<div class="body1">
        <div class="main">
            <!-- header -->
            <header>
                <div class="wrapper">
                    <h1>
                        <a href="home" id="logo">Đà Nẵng</a>
                        <!-- <span id="slogan">International Travel</span> -->
                    </h1>
                    <div class="right" style="display: flex; margin-top: 60px; float: left;">
                        <nav>
                            <ul id="top_nav">
                                <li>
                                    <a href="home"><img src="#" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="#" alt=""></a>
                                </li>

                            </ul>
                        </nav>
                        <nav>
                            <ul id="menu">
                                <li><a href="home">Home</a></li>
                                <li><a href="about">About</a></li>
                                <li><a href="news">News</a></li>
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <li class="islogin"><a href="#">Hi <?php echo $_SESSION['login']['tenNV'] ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="account">frofile</a></li>
                                            <li><a href="flight">flight</a></li>
                                            <?php if (isset($_SESSION['isAdmin'])) {
                                            ?>
                                                <li><a href="#">personnel</a></li>
                                                <li><a href="statistical">statistical</a></li>
                                            <?php } ?>
                                            <li><a href="login/logOut">logout</a></li>
                                        </ul>
                                    </li>
                                        <?php } else { ?>
                                            <li><a href="login">Login</a></li>
                                        <?php } ?>
                            </ul>
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
                Danang<span>Airport</span>
                <p>Happiness on every flight</p>
            </div>
           
        </div>
    </div>