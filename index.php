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
    <meta name="description" content="Institutional Training Project">
    <meta name="keywords" content="HTML, CSS, JavaScript, Php">
    <meta name="author" content="Yash,Himanshu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant Website</title>
   <!-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
    <link rel="shortcut icon" href="ricon.png" type="image/icon" />

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
            background-color: rgb(44, 24, 14);
        }

        .heroSection {
            background-image: url("https://th.bing.com/th/id/R.61b84fabe30ebfe2171c32466dc015f4?rik=u%2fsPt34BYDDFCQ&riu=http%3a%2f%2fbackgroundcheckall.com%2fwp-content%2fuploads%2f2017%2f12%2frestaurants-background-10.jpg&ehk=kIMgGQwv6FuOCC%2bImHl6Sg1r6Y%2ffUHo0waRQMRq9EDo%3d&risl=&pid=ImgRaw");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 90vh;


        }

        .heroSection h1 {
            color: rgb(30, 29, 34);
            text-align: center;
            margin: 10%;
            background: rgb(109, 18, 45);
            box-shadow: 0 32px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 10px solid rgba(133, 8, 8, 0.856);
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
            box-shadow: 0 15px 20px 0 rgb(0, 0, 0), 0 6px 20px 0 rgb(1, 5, 36);
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
        
            <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                <li><a href="#">HOME</a></li>
                <li><a href="#mu-about-us">ABOUT US</a></li>
                <li><a href="#mu-restaurant-menu">MENU</a></li>
                <li><a href="#mu-reservation">RESERVATION</a></li>
                <li><a href="#mu-gallery">GALLERY</a></li>
                <li><a href="#mu-location">LOCATION</a></li>
            </ul>
        </div>
       
    </header>
</body>

<section>
    <div class="container-fluid heroSection">
        <div class="row">
            <h1>Crown Restaurant</h1>
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
                With its romantic ambiance and superb food offering, the recently opened Crown Restaurant and 
Bar, invites you to savor the best of Italy in Old San Juan. The place has a quiet, old world 
environment that complements perfectly the wonderful variety of 
traditional Italian dishes that are the main attraction in the restaurant, 
served by a knowledgeable and friendly staff. Starters include an array 
of traditional antipasto ingredients, a new twist on seafood favorites or 
salads. Favorites include a medley of traditional pizzas and the outstanding classics pasta 
menu. Delight your senses with “Brasato de cosciotto di agnello”, the traditonal “Scaloppini 
alla parmegiana” or the wonderful “Tonno alla putanesca”.Crown Restaurant 
complements their fabulous menu with a generous wine and cocktail list. Restaurant is open 
for dinner every day of the week from 6:00 pm
            </div>
        </div>
    </div>
</section>

<section  id="mu-reservation" class="section-padding darkSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
             <h1 class="sectionHeading">
                    Book a table
              </h1>
              <p> Enter you details for reservation </p> 
            </div>
            <div class="col-lg-12">
                <div class="form">
                  <div class="column appointmentForm">
                 <?php if($insert==true){ echo "Your table has been reserved!"; } 
                ?>
                        <form method="POST">
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

<section id="mu-restaurant-menu class="section-padding darkSection">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
             <a id="mu-restaurant-menu"></a> <h1 class="sectionHeading">
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

<section id="mu-gallery class="section-padding darkSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h1 class="sectionHeading">
                    Gallery
                </h1>
            </div>

           
            <div class="col-lg-12 menuCardContent">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="https://th.bing.com/th/id/OIP.psZccROxAzaLtJmIh7esEgHaFV?pid=ImgDet&rs=1">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 menuCardContent">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="https://media.timeout.com/images/102500115/630/472/image.jpg">
                    </div>
                </div>
            </div>
            
           
    </div>
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