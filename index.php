<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARVA SARATHI</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="stylepage.css">

</head>
<body>
    <header>

       <div id="menu-bar" class="fas fa-bars" ></div>

        <a href="#" class="logo"><span>S</span>arva <span>S</span>arathi</a> 
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#packages">Packages</a>
            <a href="#services">Services</a>
            <a href="#blogs">Blogs</a>
            <a href="#book">Book</a>
            <a href="#review">Review</a>
            <a href="admin/login.php">Admin</a>
        </nav>
        
    </header>



<section class="home" id="home">
    <div class="content">
        
        <h3> your partner in cleanliness</h3>
        <p>your trusted partner for a cleaner , greener world</p>
        <a href="aboutus.html" class="btn">discover more</a><br>
        <a href="login.php" class="btn">LOGIN/REGISTER</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>



<section class="packages" id="packages">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>


    <div class="box-container">

        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-briefcase"></i> Janitor</h3>
                <p>70% of people are less stressed when they are in a clean space and 75% are more productive.Hiring a housemade allows you to keep your house clutter down and your mental health up.</p>     
        </div>
    </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-briefcase"></i> cook</h3>
                <p>One of the best thing about hiring a cook is, unlike eating out and purchasing unhealthy stuff one can easily prepare a healthy meal at home.contrary to packaged foods and eating outside,a meal prepared at home is healthy as well as costless hiring a cook makes life easier.</p>
        </div>
    </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-briefcase"></i> Elderly caregiver</h3>
                <p>One of the primary benefits of elederly caregiver is that it helps older adults continue doing everyday tasks like walking,bathing,dressingand preparing meals.</p>
        </div>
</div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-briefcase"></i> pet sitter</h3>
                <p>pet sitter  care for your pets in your home.pet owners often often use pet sitters when they go on vacation,travel for business or are working long hours.</p>
        </div>
    </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-briefcase"></i> Baby caregiver</h3>
                <p>Baby caregiver can step in to take care of your children when you need somethimg as simple as a bath or someone to watch the kids while you go to the grocery store.</p>
        </div>
    </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-briefcase"></i> Driver</h3>
                <p>hiring a professional driver ,make you able to sitback and enjoy the trip with your near and dear once without having to worry about driving the car,traffic and parking.well trained drivers can make the road safe for everyone.8</p>
        </div>
    </div>

    </div>
</section>

<section class="services" id="services">
    <h1 class="heading">
        <span>w</span>
        <span>h</span>
        <span>y</span>
        <span class="space"></span>
        <span>c</span>
        <span>h</span>
        <span>o</span>
        <span>o</span>
        <span>s</span>
        <span>e</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-user"></i>
            <h3>60+ satisfied Employers</h3>
            <p> Get Multiple helper options for various requirements</p>
        </div>
        <div class="box">
            <i class="fas fa-clipboard-check"></i>
            <h3>Verified and Trained Helpers</h3>
            <p>Aadhar verified,criminal background checked,soft skill trained.</p>
        </div>
        <div class="box">
            <i class="fas fa-exchange"></i>
            <h3>Replacement</h3>
            <p>Contact us for replacement of employees for valid reason.</p>
        </div><br>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>Trust Worthy</h3>
            <p>We provide 100% surety .</p>
        </div>
        <div class="box">
            <i class="fas fa-dollar-sign"></i>
            <h3>Competitive Pricing</h3>
            <p>Experience quality without breaking bank we offer fair and competitive pricing.</p>
        </div>
        <div class="box">
            <i class="fas fa-face-smile"></i>
            <h3>100% Satisfaction</h3>
            <p>Dont just take our word for it see what homeowners do. </p>
        </div>
    </div>

    </section>

<section class="blogs" id="blogs">
    <h1 class="heading">
        <span>b</span>
        <span>l</span>
        <span>o</span>
        <span>g</span>
        <span>s</span>
        
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3> WHY SHOULD YOU HIRE A PERSONAL CHEF FROM SARVA SARATHI</h3>
                <p>Food is an important aspect of our day to day lives. Everyday nutrition plays a significant role to keep us healthy... </p>
                <a href="b1.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>THE ESSENTIAL HOUSE CLEANING HACKS FROM PROFESSIONAL CLEANERS: SARVA SARATHI</h3>
                <p>For many people, cleaning is a daunting task, not one they would look forward to. However, while you could save hours on end hiring the best home cleaning services,...</p>
                <a href="b2.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>REASONS TO HIRE A DOMESTIC HOUSEMAID FOR YOUR HOME</h3>
                <p>Whether you are a single person or live with your family, managing household tasks along with the office work is not an easy task especially in a city like Mumbai. You come back home tired from the work and then there is not much energy left in you to manage the household tasks...</p>
                <a href="b3.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>HELPFUL TIPS TO PREPARE YOUR KIDS FOR A NEW BABYSITTER</h3>
                <p>It's often a nightmare for parents to invest in babysitting. If you are about to take up the service of a new babysitter for your child,.. </p>
                <a href="b4.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g1-5.jpg" alt="">
            <div class="content">
                <h3>5 KEY ADVANTAGES OF HIRING HOME CARE GIVERS</h3>
                <p>Do you have any aged family member at your house requiring special attention due to geriatric issues? Is any of your family members suffering from a disease and require constant medical care?...</p>
                <a href="b5.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>BENEFITS OF ONLINE MAID SERVICES</h3>
                <p>Online maid services are platforms where users can conveniently book maid services through websites or apps. These services offer a range of options, from cleaning to cooking, allowing users to schedule maids based on their needs and preferences...</p>
                <a href="b6.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>IS A MAID WORTH THE MONEY OR SHOULD I CLEAN MYSELF?</h3>
                <p>Hiring a maid or housekeeper is considered a luxury. But the reality is that hiring a housemaid or a 27*7 maid is sometimes the most tough and challenging issue in every household. Not only is it expensive to hire a maid, but much research is also necessary...</p>
                <a href="b7.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>THE BEST CLEANING TECHNIQUES FOR DIFFERENT SURFACES AND MATERIALS IN YOUR HOME</h3>
                <p>We at Maid in Jaipur are aware that how long the germs can remain on various surfaces is a current worry shared by all homeowners. You may have questions about how to clean various types of surfaces now that we have discussed cleaning standards and practises that you should adhere to at home....</p>
                <a href="b8.html" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>THE BENEFITS OF ECO-FRIENDLY CLEANING PRODUCTS AND TECHNIQUES</h3>
                <p>Have you considered green cleaning but are unsure of its superiority to traditional cleaning? There are numerous advantages to switching to non-toxic cleaning over conventional cleaning products that contain chemicals as stated by experts of Maid....</p>
                <a href="b9.html" class="btn">see more</a>
            </div>
        </div>
    </div>
</section>


<section class="book" id="book" >
    <h1 class="heading">
        <span>H</span>
        <span>o</span>
        <span>w</span>
        <span class="space"></span>
        <span>d</span>    
        <span>o</span>
        <span class="space"></span>
        <span>w</span>
        <span>e</span>
        <span class="space"></span>
        <span>w</span>
        <span>o</span>
        <span>r</span>
        <span>k</span>
    </h1>
    <div class="swiper book-slider">
        <div class="swiper-wrapper">
    <div class="swiper-slide slide">
        <p> At first we identify and understand the customer’s prerequisites and parameters. This helps us to create a candidate persona and job description. We document the traits, skills and other characteristics that align with the position the customer is seeking to fill.</p>
            <h3>Step 1 :</h3>
            <span>Identify & understand requirements</span>
            <img src="images/b-1.png" alt="">
        </div>

        <div class="swiper-slide slide">
            <p> To recruit without delay we use two options simultaneously to source the ideal candidate: internal sourcing and external sourcing. Internal sourcing: Our experienced human resource team instantly sources exact match profiles from our vast existing database.</p>
                <h3>Step 2 :</h3>
                <span>Sourcing</span>
                <img src="images/b-2.png" alt="">
            </div>

            <div class="swiper-slide slide">
        <p> Here we narrow down the sourced candidates. We use a manual screening method leveraging recruitment tools. This helps to shortlist the potential candidates who are interested in performing all the prescribed responsibilities and have the required skills and experience.</p>
            <h3>Step 3 :</h3>
            <span> Screening & Short listing</span>
            <img src="images/b-4.png" alt="">
        </div>

        <div class="swiper-slide slide slide">
            <p>At this stage we arrange telephonic / video / face-2-face interviews with shortlisted candidates and the customer. Customer has to select the ideal candidate who is interested in performing all the prescribed responsibilities and has the required skills and experience.</p>
                <h3>Step 4 :</h3>
                <span> Interviewing & Selecting</span>
                <img src="images/b-3.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <p> We make arrangements to send the selected candidate to the customer's residence to join the duty.  If the customer decides to discontinue the candidate, we will cancel the booking candidate.Customers can book other candidates if they want to.</p>
                    <h3>Step 5 :</h3>
                    <span>Joining</span>
                    <img src="images/b-5.png" alt="">
                </div>

        </div>
    </div>  
</section>


    <section class="review" id="review">
         <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

<div class= "swiper-container review-slider">

    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic1.jpg" alt="">
                <h3>Seresta</h3>
                <p> Their food is absolutely delicious and bursting with flavor. You could also mention the how much impressed that you are with their culinary skills and how much you appreciate their effort and attention to detail.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic2.jpg" alt="">
                <h3>Akriti</h3>
                <p>Fully trained professionals who know what they are doing, take care of everything their own.The janitors are insured  the janitorial service provider which means that your employees don't need to worry about getting hurt while on the job.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic3.jpg" alt="">
                <h3>john deo</h3>
                <p>He is absolutely professional, patient and ensures to fine tune your areas of weaknesses. I have been lucky to have him as my instructor and thankful to him for transforming me into a confident driver on the road.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic4.jpg" alt="">
                <h3>Rajiv</h3>
                <p>We have used his service on several occasions, the last one for a period of three weeks.  During that time, he kept the house neat and tidy and stayed in communication with us on a regular basis.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

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
        <a href="index.php#home">home</a>
        <a href="index.php#packages">packages</a>
        <a href="index.php#services">services</a>
        <a href="index.php#blogs">blogs</a>
        <a href="index.php#book">book</a>
        <a href="index.php#review">review</a>

    </div>
    <div class="box">
        <h3>Contact</h3>
       <a href="#">9686143248</a>
       <a href="#">9902554356</a>
       <a href="#">saravasarathi@gmail.com</a>
       <a href="#">Near kediyoor hotel,udupi</a>
    </div>

</div>

<h1 class="credit">created by <span>avs</span> | all rights reserved!</h1>
</section>
    
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script src="scriptpage.js"></script>
</body>
</html>