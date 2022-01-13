<?php
    session_start();
    if(empty($_SESSION['refresh'])){
        $_SESSION['refresh'] = 'Y';
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    }
?>
<!doctype html>
<html>
    <head>
        <!-- Set Charset encoding for the document  -->
        <meta charset="utf-8">
        <!-- Viewport for responsive web design -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>
    <body>
        <script>
            setTimeout(function(){
                swal({
                    title: 'ขออภัยค่ะ ข้อมูลทำรายการซ้ำ',
                    text: 'กรุณาตรวจสอบความถูกต้อง อีกครั้งค่ะ',
                    type: 'error'
                }, function(){
                    window.location='./index.php';
                });
            }, 1000);
        </script>
    </body>
</html>