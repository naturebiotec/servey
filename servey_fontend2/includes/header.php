<!-- Refresh data page report -->
<?php 
    session_start();
    if(empty($_SESSION['refresh']))
    {
        $_SESSION['refresh']='Y';
        header("Location: $_SERVER[PHP_SELF]");
    }
?>
<!-- end Refresh data page  report -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- UTF-8 -->
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <!-- ViewPort for reponsvie web desing -->
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>Report Deshborad</title>
        <!-- Custom fonts for this page -->
        <!-- fontawesome-free -->
        <link rel="stylesheet" href="./asset/vendor/fontawesome-free/css/all.min.css">
        <!-- font Nunito -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- css sb-admin  -->
        <link rel="stylesheet" href="./asset/css/sb-admin-2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- script jax and bootstrap 4.5.0 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <!-- oopup Sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- table data -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> 
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap4.min.css">
    </head>
    <body id="page-top">
        <!-- page wrapper -->
        <div id="wrapper">