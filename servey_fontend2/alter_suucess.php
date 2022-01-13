<!doctype html>
<html>
    <head>
        <!-- Set Charset encoding for the document -->
		<meta charset="utf-8">
        <!-- Viewport for responsive web design -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>
        <script>
             setTimeout(function() {
                Swal.fire({
                        title: 'ลงทะเบียนสำเร็จ',
                        text: "ขอบคุณสำหรับข้อมูลเจ้าหน้าจะทำการส่งสินค้าให้ตามที่อยู่"+
                              "ที่ลูกค้าได้ทำการลงทะเบียนไว้ สินค้าจะจัดส่งหลังจะจบแคมเปญ",
                        icon: 'success',
                        showCloseButton:true,
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'กลับหน้าแรก'
                        }).then((result) => {
                        if (result.isConfirmed){
                            window.location.href="./index.php";
                            self.close();
                        }
                        else{
                                window.location.href="./index.php";
                                self.close();
                            }
                        });
            },1000);
        </script>
    </body>
</html>