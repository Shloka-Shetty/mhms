<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swao');

:root{
    --orange:#ffa500;
}

*{
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    outline: none;
    border: none;
    text-decoration: none;
    transition: all .2s linear;
}


*::selection{
    background:var(--orange);
    color:#fff;
}

html{
    font-size: 62.5%;
    overflow-x:hidden;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}

section{
    padding: 2rem 9%;
}

.heading{
    text-align: center;
    padding: 2.5rem 0;
}

.heading span{
    font-size: 3.5rem;
    background: rgba(255, 165, 0, .2);
    color: var(--orange);
    border-radius: .5rem;
    padding: .2rem 1rem;  
}

.heading span.space{
    background: none;
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    background: var(--orange);
    color: #fff;
    padding:.8rem 3rem;
    border:.2rem solid var(--orange);
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background: rgba(255, 165, 0,.2);
    color:var(--orange);
}

header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #221a1a;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
}

header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: #fff;
    text-transform: uppercase;
}

header .logo span{
    color:var(--orange);
}

header .navbar a{
    color:#fff;
    font-size: 2rem;
    margin: 0 .8rem;
}

header .navbar a:hover{
    color: var(--orange);
}

header .icons i{
    font-size: 2.5rem;
    color: #fff;
    cursor: pointer;
    margin-right: 2rem;
}

header .icons i:hover{
    color:var(--orange);
}

#menu-bar{
    color: #fff;
    border: .1rem solid #fff;
    border-radius:.5rem ;
    font-size: 3rem;
    padding: .5rem 1.2rem;
    cursor: pointer;
    display: none;
}


body{
    margin: 0;
}

.cardContainer{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    margin-top: 100px;
    
}

.cardContainer .card img{
    height: 50rem;
    width: 100%;
    object-fit: cover;
}

.card{
    width: 325px;
    background-color: #f4f4f4;
    border-radius: 10px;
    box-shadow: 0px 2px 4px rgba(0,0,0,0.3);
    overflow: hidden;
    transition: transform 0.6s ease;
    
}
.card:hover{
    transform: translateY(-20px);
}

.card img{
    width: 100%;
    height: auto;
    object-fit: cover;
}
.card-content{
    padding: 20px;
}

.card-content h1{
    font-size: 20px;
    margin-bottom:10px;
}
.card-content p{
    font-size: 15px;
    color: #666;
    margin-bottom: 20px;
}
.card-button{
    display: inline-block;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    margin-top: 1rem;
    border:.2rem solid var(--blue);



}
.card-button:hover{
    background: rgba(115, 122, 123, 0.2);
    color:var(--blue);
}

.feedback .box-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    padding: 2rem;
}

.feedback .box {
    flex: 1 1 40rem;
    text-align: center;
}

.feedback .box img {
    width: 100%;
    max-width: 400px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
}

.feedback .box h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #333;
}

.feedback-form textarea {
    width: 100%;
    padding: 1rem;
    border-radius: 10px;
    border: 1px solid #ccc;
    resize: none;
    font-size: 1.2rem;
    margin-bottom: 1rem;
}

.feedback-form .btn {
    background: #27ae60;
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.feedback-form .btn:hover {
    background: #219150;
}


@media (max-width:1200px){
    html{
        font-size: 55%;
    }
    
}

@media (max-width:991px){
    header{
        padding: 2em;
    }

    section{
        padding:2em;
    }
}

@media (max-width:768px){
    #menu-bar{
        display: initial;   
    }

    header .navbar{
     position: absolute;   
     top: 100%; right: 0; left: 0;
     background: #333;
     border-top: .1rem solid rgba(255,255,255,.2);
     padding: 1rem 2rem;
     clip-path: polygon(0 0,100% 0,100% 0,0 0);
    }
     
    header .navbar.active{
        clip-path: polygon(0 0,100% 0,100% 100%,0 100%);
    }

    header .navbar a{
        display: block;
        border-radius: .5rem;
        padding: 1.5rem;
        margin: 1.5rem 0;
        background: #222;
    }
}

@media (max-width:1200px){
    html{
        font-size: 55%;
    }
}

.footer{
    background: #373535;
}

.footer .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.footer .box-container .box{
    padding:1rem 0;
    flex: 1 1 25rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    padding: .7rem 0;
    color: #fff;
}

.footer .box-container .box p{
    font-size: 1.5rem;
    padding: .7rem 0;
    color: #eee;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.5rem;
    padding: .7rem 0;
    color: #eee;
}

.footer .box-container .box a:hover{
    color: var(--orange);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    padding: 2rem 1rem;
    margin-top: 1rem;
    font-size: 2rem;
    font-weight: normal;
    color: #fff;
    border-top: .1rem solid rgba(255,255,255,.2);
}

.footer .credit span{
color: var(--orange);
}


    </style>
</head>
<body>
<header>
        <div id="menu-bar" class="fas fa-bars" ></div>

        <a href="#" class="logo"><span>S</span>arva <span>S</span>arathi</a> 
        <nav class="navbar">
            <a href="index.php#home">home</a>
            <a href="package.php">packages</a>
            <a href="index.php#services">services</a>
            <a href="index.php#blogs">blogs</a>
            <a href="index.php#book">book</a>
            <a href="index.php#review">review</a>
            <a href="index.php#contact">contact</a>
        </nav>
        
    </header>
   <div class="cardContainer">
    <div class="card">
        <img src="images/p-1.jpg" alt="">
        <div class="card-content">
            <h1> Janitor</h1>
            <p>70% of people are less stressed when they are in a clean space and 75% are more productive.Hiring  you to keep your house clutter down and your mental health up.</p>     
                        <a href="maid-hiring.php?catid=1" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-2.jpg" alt="">
        <div class="card-content">
            <h1>  cook</h1>
            <p>One of the best thing about hiring cook unlike eating and purchasing unhealthy stuff one easily prepare a healthy meal at home.contrary to packaged and eating outside.</p>     
            <a href="maid-hiring.php?catid=2" class="card-button">BOOK NOW</a>
        </div>
    </div>
    <div class="card">
        <img src="images/p-3.jpg" alt="">
        <div class="card-content">
            <h1>  Elderly caregiver</h1>
            <p>One of the primary benefits of elederly caregiver is that it helps older adults continue doing everyday tasks like walking,bathing,dressingand preparing meals.</p>     
                        <a href="maid-hiring.php?catid=3" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-4.jpg" alt="">
        <div class="card-content">
            <h1> pet sitter</h1>
            <p>pet sitter  care for your pets in your home.pet owners often often use pet sitters when they go on vacation,travel for business or are working long hours</p>     
                       <a href="maid-hiring.php?catid=4" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-5.jpg" alt="">
        <div class="card-content">
            <h1>  Baby caregiver</h1>
            <p>Baby caregiver can step in to take care of your children when you need somethimg as simple as a bath or someone to watch the kids while you go to the grocery store.</p>     
                        <a href="maid-hiring.php?catid=5" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-6.jpg" alt="">
        <div class="card-content">
            <h1> Driver</h1>
            <p>Hiring a professional driver ,make you able to sitback and enjoy the trip with your near and dear once without having to worry about driving the car,traffic and parking.</p>     
                       <a href="maid-hiring.php?catid=6" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-7.jpg" alt="">
        <div class="card-content">
            <h1> All Rounder</h1>
            <p>An all-rounder maid is someone who can handle various household tasks efficiently, from cleaning and cooking to childcare and running errands. They're like  household help!</p>     
                        <a href="maid-hiring.php?catid=7" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-8.jpg" alt="">
        <div class="card-content">
            <h1> Watchman</h1>
            <p>hiring a Watchman helps us by keeping the house safely from strangers ,and also guard building or area.typical duties include patrolling and logging susupicious activity.</p>     
                        <a href="maid-hiring.php?catid=8" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-9.jpg" alt="">
        <div class="card-content">
            <h1> Water tank cleaners</h1>
            <p>Cleaning your water tank is essential for maintaining water quality and preventing contamination can hire a professional water tank cleaning service. They have the equipment.</p>     
                        <a href="maid-hiring.php?catid=9" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-10.jpg" alt="">
        <div class="card-content">
            <h1> drainage cleaners</h1>
            <p>Drainage cleaning is important for preventing clogs and proper drainage flow your plumbing system.Regular drainage issues can help keep your prevent costly repairs down the line.</p>     
                        <a href="maid-hiring.php?catid=10" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-11.jpg" alt="">
        <div class="card-content">
            <h1> Sanitary cleaners</h1>
            <p>Sanitary cleaners are essential for maintaining cleanliness and hygiene in bathrooms, kitchens, and other areas where germs can accumulate.cleans through everything and maintainance.</p>     
                        <a href="maid-hiring.php?catid=11" class="card-button">BOOK NOW</a>

        </div>
    </div>
    <div class="card">
        <img src="images/p-12.jpg" alt="">
        <div class="card-content">
            <h1> Painter</h1>
            <p>Painters offer a wide range of services, from interior and repair. Some painters specialize in one or two services, while others provide a range of options for homeowners.</p>     
                       <a href="maid-hiring.php?catid=12" class="card-button">BOOK NOW</a>

        </div>
    </div>
    </div> 

<section class="feedback" id="feedback">
    <h1 class="heading">
        <span>F</span>
        <span>e</span>
        <span>e</span>
        <span>d</span>
        <span>b</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
    </h1>

    <div class="box-container">
        <!-- Left: Image -->
        <div class="box">
            <img src="images/contact-img.jpg" alt="Feedback" style="border-radius:10px;">
        </div>

        <!-- Right: Feedback Form -->
        <div class="box">
            <h3>We Value Your Feedback</h3>
           <form action="submit_feedback.php" method="post" class="feedback-form">
    <input type="text" name="subject" placeholder="Subject" required>
    <textarea name="feedback_text" rows="5" placeholder="Write your feedback here..." required></textarea>
    <br>
    <button type="submit" name="submit_feedback" class="btn">Submit Feedback</button>
</form>



        </div>
    </div>
</section>


    <script>
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});
    </script>
     <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Wanna Logout <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
       // while($row=mysqli_fetch_array($query)){
           // echo $row['firstName'].' '.$row['lastName'];
       // }
       }
       ?>
       !! Visit Again :)
      </p>
      <a href="logout.php" class="card-button">Logout</a>
    </div>
</body>
<section class="footer">
    <div class="box-container">

        <div class="box">
        <h3>about us</h3>
       <p>Our skilled team offers tailored services with top-notch equipment and products. Enjoy hassle-free cleaning with a customized plan that suits your budget and schedule. Book now for exceptional customer service and a sparkling clean space.</p>
    </div>
    <div class="box">
        <h3>branch location</h3>
       <a href="#">Udupi</a>
       <a href="#">Kundapura</a>
       <a href="#">Kota</a>
       <a href="#">Brahmavar</a>
    </div>
    <div class="box">
        <h3>quick links</h3>
        <a href="frontpage.html#home">home</a>
            <a href="frontpage.html#packages">packages</a>
            <a href="frontpage.html#services">services</a>
            <a href="frontpage.html#blogs">blogs</a>
            <a href="frontpage.html#book">book</a>
            <a href="frontpage.html#review">review</a>
            <a href="frontpage.html#contact">contact</a>

    </div>
    <div class="box">
        <h3>Contact</h3>
       <a href="#">9686143248</a>
       <a href="#">9902554356</a>
       <a href="#">saravasarathi@gmail.com</a>
       <a href="#">Near kedior hotel,udupi</a>
    </div>

</div>

<h1 class="credit">created by <span>avs</span> | all rights reserved!</h1>
</section>

<html>