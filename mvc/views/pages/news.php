<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <base href="http://localhost:81/Manager_plan/">
    <link rel="stylesheet" href="public/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="public/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="public/css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="public/js/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="public/js/cufon-yui.js"></script>
    <script type="text/javascript" src="public/js/cufon-replace.js"></script>
    <script type="text/javascript" src="public/js/Myriad_Pro_italic_600.font.js"></script>
    <script type="text/javascript" src="public/js/Myriad_Pro_italic_400.font.js"></script>
    <script type="text/javascript" src="public/js/Myriad_Pro_400.font.js"></script>
    <script type="text/javascript" src="public/js/style.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="public/assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="public/assets/css/vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="public/assets/css/vendor/muli-font.css">

    <!-- Plugins CSS (All Plugins Files) -->
    
    <link rel="stylesheet" href="public/assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="public/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="public/assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="public/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="public/assets/css/style.css">

 <!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>

<body id="page1">
    <div class="body1">
    <?php
    include('./mvc/views/components/headerNews.php');
    include('./mvc/views/components/BannerLeftSearch.php');
    include('./mvc/views/components/mainNews.php');
    include('./mvc/views/components/footer.php');
    ?>
    </div>

    <script type="text/javascript">
        Cufon.now();
    </script>
</body>

</html>