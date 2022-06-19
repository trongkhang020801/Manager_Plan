<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <base href="http://localhost:81/Manager_Plan/account">
    <link rel="stylesheet" href="public/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="public/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="public/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css" >
    <script type="text/javascript" src="public/js/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="public/js/cufon-yui.js"></script>
    <script type="text/javascript" src="public/js/cufon-replace.js"></script>
    <script type="text/javascript" src="public/js/Myriad_Pro_italic_600.font.js"></script>
    <script type="text/javascript" src="public/js/Myriad_Pro_italic_400.font.js"></script>
    
    <script type="text/javascript" src="public/js/jquery-1.4.2.js"></script>
    
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>

<body id="page1">

    <?php
    include('./mvc/views/components/header.php');
    include('./mvc/views/components/account.php');
    include('./mvc/views/components/footer.php');
    ?>

    <?php 
        if(isset($_SESSION['profile'])){
            $kq=$_SESSION['profile'];
            echo "<script>alert('$kq')</script>";
            unset($_SESSION['profile']); 
        }
    ?>
</body>

</html>