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
                                    <a href="index.html"><img src="public/images/img1.gif" alt=""></a>
                                </li>
                                <li>
                                    <a href="index-4.html"><img src="public/images/img2.gif" alt=""></a>
                                </li>

                            </ul>
                        </nav>
                        <nav>
                            <ul id="menu">
                                <li id="menu_active"><a href="index.html">Home</a></li>
                                <li><a href="about">About</a></li>
                                <li><a href="news">News</a></li>
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <li class="islogin"><a href="#">Hi <?php echo $_SESSION['login']['tenNV'] ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="account">frofile</a></li>
                                            <li><a href="#">flight</a></li>
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