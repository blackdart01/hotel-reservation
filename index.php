<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
    .well {
        background: rgba(0, 0, 0, 0.7);
        border: none;

    }

    .wellfix {
        background: rgba(0, 0, 0, 0.7);
        border: none;
        height: 200px;
        border-radius: 10px;
    }

    body {
        background-image: url('images/home_bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    p {
        font-size: 13px;
    }

    .pro_pic {
        border-radius: 50%;
        height: 50px;
        width: 50px;
        margin-bottom: 15px;
        margin-right: 15px;
    }

    h4 {
        color: rgb(185, 123, 247);
        font-size: 1.4em;
        font-weight: 550;
    }

    h5 {
        color: white;
        font-size: 1.2em;
        font-family: monospace;
    }

    .w3-content img {
        border-radius: 20px;
        width: 10%;
        height: auto;
        box-shadow: 10px 10px 10px 2px rgba(0, 0, 0, 0.7);
    }

    .jumbotron {
        padding: 25px !important;
        /* padding-left: 0 !important; */
        border-radius: 25px !important;
    }
    </style>


</head>

<body>
    <div class="container">


        <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>
                </ul>
            </div>
        </nav>


        <div class="jumbotron">
            <div class="w3-content w3-section">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/7.jpg"
                    style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/8.jpg"
                    style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/9.jpg"
                    style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/10.jpeg"
                    style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/11.jpg"
                    style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/12.jpg"
                    style="width:100%; height:450px;">
            </div>
        </div>
        <hr>
        <div class="row" style="color: #ed9e21">
            <!-- <div class="col-md-12 well">
                <h4><strong style="color: #ffbb2b">About</strong></h4><br>
                <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a
                    computer by using online security to protect their privacy and financial information and by using
                    several online travel agents to compare prices and facilities at different hotels</p>
                <br>
                <p>Prior to the Internet, travelers could write, telephone the hotel directly, or use a travel agent to
                    make a reservation. Nowadays, online travel agents have pictures of hotels and rooms, information on
                    prices and deals, and even information on local resorts. Many also allow reviews of the traveler to
                    be recorded with the online travel agent.</p>
                <br>
                <p>Online hotel reservations are also helpful for making last minute travel arrangements. Hotels may
                    drop the price of a room if some rooms are still available. There are several websites that
                    specialize in searches for deals on rooms.</p>

            </div> -->
        </div>
        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
                <h4><strong>About Project</strong></h4>
                <hr>
                <h5>Project : Hotel Reservation System</h5>
                <h5>Languages : HTML5, CSS3, BOOTSTRAP3, JAVASCRIPT, PHP, MYSQL</h5> <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4>
                <hr>
                <h5>SRIJAN AGRAWAL and GOURI SETH</h5>
                <h5>SSIPMT CSE - 4th SEM </h5>

            </div>
        </div>

        <br><br><br><br><br>


    </div>









    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>