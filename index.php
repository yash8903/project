<?php
$insert=false;
if(isset($_POST['name'])){
    echo "<meta http-equiv='refresh' content='0'>";
   $server = "localhost";
   $username = "root";
   $password = "";
   $con = mysqli_connect($server, $username, $password);
   if(!$con){
       die("Connection to database failed due to".mysqli_connect_error());
   }

$name =$_POST['name'];
$email =$_POST['email'];
$number =$_POST['number'];
$table =$_POST['table'];
$date =$_POST['date'];
$time =$_POST['time'];
$message =$_POST['message'];
   $sql = "INSERT INTO `reservation`.`customer_details` (`Name`, `Email`, `Number`, `Reserved Table`, `Date`, `Time`, `Message`, `DT`) VALUES ('$name', '$email', '$number', '$table', '$date', '$time', '$message', current_timestamp())";
  if($con->query($sql)==true){
    $insert=true;
  }
  else{
       echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant Management</title>



    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />

    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css" />

    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <!-- Theme color -->

    <style>
        html {
            scroll-behavior: smooth;
        }

        .form h1 {
            align-items: center;
        }

        .section-padding {
            margin: 10vh 0% 10vh 0%;
        }

        #navbar {
            background-color: black;
        }

        .heroSection {
            background-image: url("https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 90vh;


        }

        .heroSection h1 {
            color: white;
            text-align: center;
            margin: 10%;
            background: rgb(238, 182, 79);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .sectionHeading {
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-weight: 900;
        }

        .appointmentForm input {
            width: 90%;
            margin: 1%;
            padding: 15px;
            color: black;
            height: 40px;
        }

        .appointmentForm button {
            margin: 20px;
            padding: 10px 40px 10px 40px;
            background-color: white;
            color: #000;
        } 

        .appointmentForm button:hover {
            background-color: yellow;
        }
        .aboutContent{
            width: 90%;
            margin: 5%;
            padding: 100px;
        }
        .aboutUsImage img{
            width: 90%;
            margin: 5%;
        }
        .darkSection {
            background-color: #220606;
            color: white;
        }

        .menuCard {
            box-shadow: 0 15px 20px 0 rgb(119, 7, 172), 0 6px 20px 0 rgb(1, 5, 36);
            margin: 20px;
            padding: 0%;
            border-radius: 15px;
        }

        .menuCard:hover {
            box-shadow: 0 4px 8px 0 rgb(222, 189, 238), 0 6px 20px 0 rgb(144, 157, 255);
        }

        .menuCard img {
            width: 100%;
            height: 30vh;
            border-radius: 15px 0px 0px 15px;
        }

        .menuCardContent {
            padding: 20px;
        }

        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #151580;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #4fadec;
        }
    </style>
</head>

<body>
    <header>
        <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                <li><a href="#">HOME</a></li>
                <li><a href="#mu-about-us">ABOUT US</a></li>
                <li><a href="#mu-restaurant-menu">MENU</a></li>
                <li><a href="#mu-reservation">RESERVATION</a></li>
                <li><a href="#mu-gallery">GALLERY</a></li>
                <li><a href="#mu-chef">OUR CHEFS</a></li>
                <li><a href="#mu-location">LOCATION</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </header>
</body>

<section>
    <div class="container-fluid heroSection">
        <div class="row">
            <h1>Ajmer Restaurant</h1>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <a id="mu-about-us"> <h1 class="sectionHeading">
                    About Us
                </h1></a>
            </div>
            <div class="col-lg-6 aboutUsImage">
                <img
                    src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60">
            </div>

            <div class="aboutContent">
                
                
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum libero animi nesciunt saepe sit
                explicabo accusantium mollitia ipsum nostrum eligendi consequatur reiciendis nulla, eveniet optio quo
                hic quaerat inventore impedit!

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic nulla dicta ut, corporis voluptatum, dolore nobis tenetur sed dolor totam quidem officiis amet. Minus aliquid est ducimus odio unde dignissimos qui. Ex accusantium ipsam possimus porro ea quos ab quis, magnam fuga deserunt corrupti ducimus nesciunt commodi unde quod tempora, praesentium ullam repellendus? Architecto accusamus cumque, nihil obcaecati laboriosam quaerat sapiente debitis veniam tempore doloribus quod nostrum minus vitae exercitationem! Unde blanditiis velit, molestiae eveniet sint voluptate debitis asperiores dolorum odio fuga deleniti nobis autem fugiat repellat consectetur libero ipsam.
            </div>
        </div>
    </div>
</section>

<section class="section-padding darkSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <a id="mu-reservation"> <h1 class="sectionHeading">
                    Book a table
                </h1></a>
            </div>
            <div class="col-lg-12">
                <div class="form">
                    <h3 class="text-center">CONTACT INFO</h3>
                    <div class="column appointmentForm">
                        <form action="index.php" method="POST">
                            <div class="col-lg-6">
                                <input type="text" name="name" id="name" placeholder="Name">
                            </div>

                            <div class="col-lg-6">
                                <input type="EMAIL" name="email" id="email" placeholder="Email">
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="number" id="number" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6">
                                <input type="number" name="table" id="table" placeholder="Number of tables">
                            </div>
                            <div class="col-lg-6">
                                <input type="date" name="date" id="date" placeholder="Date">
                            </div>
                            <div class="col-lg-6">
                                <input type="time" name="time" id="time" placeholder="Time">
                            </div>     
                            <div class="col-lg-12">
                                <input type="text" name="message" id="message" placeholder="Message  for us !">
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit">Book the table</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="section-padding darkSection">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
             <a id="mu-restaurant-menu"> <h1 class="sectionHeading">
                    Menu
                </h1></a>
            </div>

            <div class="col-lg-12 menuCard">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="https://sukhis.com/wp-content/uploads/2017/06/Appetizers.jpg">
                    </div>
                    <div class="col-lg-9 menuCardContent">
                        <p>
                           <h3>paneer bread pakoda - 109 rs</h3>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 menuCard">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=414&q=80">
                    </div>
                    <div class="col-lg-9 menuCardContent">
                        <p>
                            <h3>cheese veg pizza - 249 rs</h3>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 menuCard">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80">
                    </div>
                    <div class="col-lg-9 menuCardContent">
                        <p>
                            <h3>cheese burger</h3>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 menuCard">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1053&q=80">
                    </div>
                    <div class="col-lg-9 menuCardContent">
                        <p>
                            <h3>sandwiches 115-rs </h3>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 menuCard">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=597&q=80">
                    </div>
                    <div class="col-lg-9 menuCardContent">
                        <p>
                            <h3>chowmin 89-rs </h3>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <a id="mu-gallery"> <h1 class="sectionHeading">
        Gallery
    </h1> </a>
    <iframe 
    src="https://cdn.vox-cdn.com/thumbor/8Z3c1Gx9obmKMQeOXWnCnPuKQdg=/0x0:1024x768/1200x900/filters:focal(0x0:1024x768)/cdn.vox-cdn.com/uploads/chorus_image/image/45572520/Ann_Arbor_s_Oldest_Collage.0.0.jpg"
    width="100%" height="500px" styl="border:0;" allowfullscreen="" loading="lazy"></iframe>

    
</section>

<section>
    <a id="mu-our chefs"> <h1 class="sectionHeading">
        our chefs
    </h1> </a>
    <iframe src="https://thetoptenchefs.com/wp/wp-content/uploads/2018/03/Top-10-culinary-institutes-in-India-900x450.jpg"
    width="100%" height="500px" styl="border:0;" allowfullscreen="" loading="lazy">
</iframe>

    
</section>
 

<section>
 <a id="mu-location"> <h1 class="sectionHeading">
                    Location
                </h1></a>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.9602874919874!2d74.62458721498882!3d26.48922348331181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be7ba22f552a7%3A0x2595949d9d8abf91!2sTea%20Connect!5e0!3m2!1sen!2sin!4v1625511027004!5m2!1sen!2sin"
        width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<!-- 
 INSERT INTO `customer details` (`S.No`, `Name`, `Email`, `Number`, `Reserved Table`, `Date`, `Time`, `Message`, `DT`) VALUES ('1', 'Yash Garg', 'yash@gmail.com', '8887772123', '1', '2021-07-06', '20:19:31', 'Hello, Please do your best work!', current_timestamp()) -->

</html>