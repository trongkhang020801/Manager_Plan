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
                                <li ><a href="index.html">Home</a></li>
                                <li><a href="index-1.html">Introduce</a></li>
                                <li><a href="index-2.html">News</a></li>
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <li id="menu_active"><a href="account">Hi <?php echo $_SESSION['login']['tenNV'] ?></a></li>
                                        <?php } else { ?>
                                            <li id="menu_active"><a href="login">Login</a></li>
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
            </div>
            
        </div>
    </div>