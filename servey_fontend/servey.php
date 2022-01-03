<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servey Viamin</title>
    <!-- CND CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/css/servey.css">
    <!-- CND JS -->
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./asset/js/servey.js"></script>
</head>
<body>
        <div class="container mt-5">
         <!-- backgroud  -->
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <form id="regForm" action="save_data.php" method="POST">
                        <h1 id="register">Survey Form</h1>
                        <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> <span class="step"><i class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
                        <div class="tab">
                            <h6>What's your name?</h6>
                            <p> <input placeholder="Name..." oninput="this.className = ''" name="fname"></p>
                            <h6>What's your name?</h6>
                            <p> <input placeholder="LastNmae..." oninput="this.className = ''" name="lname"></p>
                        </div>
                        <div class="tab">
                            <h6>What's your city?</h6>
                            <p><input placeholder="City" oninput="this.className = ''" name="dd"></p>
                            <h6>What's your city?</h6>
                            <select class="form-select" oninput="this.className = ''" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="tab">
                            <h6>What's your Favourite Shopping site?</h6>
                            <p><input placeholder="Favourite Shopping site" oninput="this.className = ''" name="email"></p>
                        </div>
                        <div class="tab">
                            <h6>What's your Favourite car?</h6>
                            <p><input placeholder="Favourite car" oninput="this.className = ''" name="uname"></p>
                        </div>
                        <div class="tab">
                            <h6>What's your Favourite Song?</h6>
                            <p><input placeholder="Favourite Song" oninput="this.className = ''" name="uname"></p>
                        </div>
                        <div class="tab">
                            <h6>What's your Favourite Mobile brand?</h6>
                            <p><input placeholder="Favourite Mobile Brand" oninput="this.className = ''" name="uname"></p>
                        </div>
                        <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                            <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
                        </div>
                        <div style="overflow:auto;" id="nextprevious">
                            <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                        </div>
                    </form>
                </div>
            </div>
     </div>
</body>
</html>