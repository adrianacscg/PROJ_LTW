<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Tavel Crib - Profile</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/CSS" href="../html/profile.css">
</head>

<body>
    <header>
        <h1><a href="main.html">Travel Crib</a></h1>
    </header>
    <nav id="menu">
        <input type="checkbox" id="hamburger">
        <label class="hamburger" for="hamburger"></label>
        <ul>
            <li><a href="#MyProfile">My Profile</a></li>
            <li><a href="#MyBookings">My Booking</a></li>
            <li><a href="#MyProperties">My Properties</a></li>
            <li><a href="main.html">Logout</a></li>
        </ul>
    </nav>
    <section id="MyProfile">
        <!-- <h1><a>  <?php echo htmlentities($_SESSION['userinfo']['nomeCompleto']) ?> </a></h1> -->
        <img src="../img/ProfilePictures/profilepicture1.jpg" alt=" ">
        <h1><a> João Paulo Ribeiro Nunes </a></h1>
        <!-- <h3><a>Email: <?php echo htmlentities($_SESSION['userinfo']['email']) ?></a></h3> -->
        <h3><a>Email: </a></h3>
        <p class="mail">joaopaulo_n@hotmail.com</p>
        <h3><a href="changepass.php">Change Password</a></h3>
        <h2><a>Payment Methods</a></h2>
        <!-- <h3><a>Card:  <?php echo htmlentities($_SESSION['userinfo']['cartaoCred']) ?></a></h3> -->
        <h3>Card: </h3>
        <p class="card"> ************1472 </p>
        <a href="newcard.php"> <img src="../icons/+.png" alt="Symbol More"> </a>
        <h3><a href="newcard.php">Add New Card</a></h3>
    </section>
    <section id="MyBookings">
        <h2>My Bookings</h2>
        <!-- <img src="<?php echo  htmlentities('../bookingsPictures/' . $_SESSION['reserva']['mybooking']) ?>" alt="Booking Picture"> -->
        <div class="imageHolder">
        <ul class="slider">
            <li>
                <input type="radio" id="slide1" name="slide" checked>
                <label for="slide1"></label>   
                <img src="../img/Bookings/booking1.jpg" />
            </li>
            <li>
                <input type="radio" id="slide2" name="slide"> 
                <label for="slide2"></label>  
                <img src="../img/Bookings/booking2.jpg" />
            </li>
            <li>
                <input type="radio" id="slide3" name="slide">
                <label for="slide3"></label>
                <img src="../img/Bookings/booking3.jpg" />
            </li>
        </ul>
        <div class="fundo"><br></div>
        <div class="caption1"><a>Suite Star</a></div>
        <div class="forday"><br>&nbsp;/&nbsp;day</div>
        <div class="price"><br>850€</div>
        <div class="star1"> <img src="../icons/star.png" width="15px" height="15px"/> </div>
        <div class="star2"> <img src="../icons/star.png" width="15px" height="15px"/> </div>
        <div class="star3"> <img src="../icons/star.png" width="15px" height="15px"/> </div>
        <div class="star4"> <img src="../icons/star.png" width="15px" height="15px"/> </div>
        <div class="star5"> <img src="../icons/star.png" width="15px" height="15px"/> </div>
        </div>
        <h3> Dates:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to</h3>
        <div class="dateInitial"><a>15/3/2019</a> </div>
        <div class="dateFinal"><br>21/3/2019</div>
        <h3>Total Amount paid:</h3>
        <div class="total"><br>5100€</div>
    
        <p> Luxury Resort </p>
        <p> 5 </p>
        <p> 500 </p>
        <p>Dates: </p>
        <p> 15/3/2019 </p>
        <p> to </p>
        <p> 21/3/2019 </p>
        <p> Total Amount paid: </p>
        <p> 5100 </p>
    </section>

    <section id="MyProperties">
        <h2>My Properties</h2>
        <h3><a href="addproperty.php">Add Property </a></h3>
        <h3><a href="editproperty.php">Edit Existing Property </a></h3>
    </section>
</body>

</html>