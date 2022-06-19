<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <base href="http://localhost:81/Manager_Plan/flight">
    <link rel="stylesheet" href="public/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="public/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="public/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="public/js/cufon-yui.js"></script>
    <script type="text/javascript" src="public/js/cufon-replace.js"></script>
    <script type="text/javascript" src="public/js/Myriad_Pro_italic_600.font.js"></script>
    <script type="text/javascript" src="public/js/Myriad_Pro_italic_400.font.js"></script>
    
    <script type="text/javascript" src="public/js/jquery-1.4.2.js"></script>
    
    <!-- Link datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>


<body id="page1">
    <div class="body1">
    <?php
    include('./mvc/views/components/header.php');
    include('./mvc/views/components/mainFlight.php');
    include('./mvc/views/components/footer.php');
    ?>
    </div>
    <script type="text/javascript">
        Cufon.now();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<?php 
        if(isset($_SESSION['flight'])){
            $kq=$_SESSION['flight'];
            echo "<script>alert('$kq')</script>";
            unset($_SESSION['flight']); 
        }
    ?>
</body>

</html>