<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="x-ua-cOMPATIBLE" content="IE=EDGE"/>
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Employee Details </title>
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


		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f9f9f9;
		}

		

		.container {
			max-width: 800px;
			margin: 40px auto;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ddd;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.employee-card {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 20px;
			margin-bottom: 20px;
		}

		.employee-image {
			width: 150px;
			height: 150px;
			border-radius: 50%;
			margin: 20px;
			object-fit: cover;
		}

		.employee-info {
			flex: 1;
			padding: 20px;
			font-size: 20px;

		}

		.employee-info h2 {
			margin-top: 0;
		}

		.employee-info p {
			margin-bottom: 10px;
		}

		.employee-info span {
			font-weight: bold;
			color: #337ab7;
		}

		.active {
			color: #2ecc71;
		}

		.inactive {
			color: #e74c3c;
		}

		.hire-button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		.hire-button:hover {
			background-color: #3e8e41;
		}


.btn:hover{
    background-color:   blue;
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
            <a href="frontpage.html#home">home</a> 
            <a href="frontpage.html#packages">packages</a>
            <a href="frontpage.html#services">services</a>
            <a href="frontpage.html#blogs">blogs</a>           
             <a href="frontpage.html#book">book</a>
            <a href="frontpage.html#review">review</a>
            <a href="frontpage.html#contact">contact</a>
        </nav>
        
    </header>


	<div class="container">
		<div class="employee-card">
			<img src="images/ar1.jpg" alt="Employee 1 Image" class="employee-image">
			<div class="employee-info">
				<h2>Employee No: <span>071</span></h2>
				<h2>Name: <span>Millie Doe</span></h2>
				<p>Experience: <span>5 Years</span></p>
				<p>Language: <span>English, Spanish</span></p>
				<p>Mobile Number: <span>7698356748</span></p>
				<p>Salary: <span>Rs 400/day</span></p>
				<button class="btn" onclick="window.location.href='empAll.php'">Hire</button>
			</div>
		</div>
		<div class="employee-card">
			<img src="images/ar2.jpg" alt="Employee 2 Image" class="employee-image">
			<div class="employee-info">
				<h2>Employee No: <span>072</span></h2>
				<h2>Name: <span>Janny Smith</span></h2>
				<p>Experience: <span>3 Years</span></p>
				<p>Language: <span>English, French</span></p>
				<p>Mobile Number: <span>8976837467</span></p>
				<p>Salary: <span>Rs 450/day</span></p>
				<button class="btn" onclick="window.location.href='empAll.php'">Hire</button>
			</div>
		</div>
		<div class="employee-card">
			<img src="images/ar3.jpg" alt="Employee 3 Image" class="employee-image">
			<div class="employee-info">
				<h2>Employee No: <span>073</span></h2>
				<h2>Name: <span>Mike Johnson</span></h2>
				<p>Experience: <span>7 Years</span></p>
				<p>Language: <span>English, German</span></p>
				<p>Mobile Number: <span>9867943546</span></p>
				<p>Salary: <span>Rs 300/day</span></p>
				<button class="btn" onclick="window.location.href='empAll.php'">Hire</button>
			</div>
		</div>
		<div class="employee-card">
			<img src="images/ar4.jpg" alt="Employee 4 Image" class="employee-image">
			<div class="employee-info">
				<h2>Employee No: <span>074</span></h2>
				<h2>Name: <span>Sam Doe</span></h2>
				<p>Experience: <span>2 Years</span></p>
				<p>Language: <span>English, Italian</span></p>
				<p>Mobile Number: <span>7569435763</span></p>
				<p>Salary: <span>Rs 400/day</span></p>
				<button class="btn" onclick="window.location.href='empAll.php'">Hire</button>
			</div>
		</div>
		<div class="employee-card">
			<img src="images/ar5.jpg" alt="Employee 5 Image" class="employee-image">
			<div class="employee-info">
				<h2>Employee No: <span>075</span></h2>
				<h2>Name: <span>Tom Smith</span></h2>
				<p>Experience: <span>6 Years</span></p>
				<p>Language: <span>English, Chinese</span></p>
				<p>Mobile Number: <span>8345982365</span></p>
				<p>Salary: <span>Rs 390/day</span></p>
				<button class="btn" onclick="window.location.href='empAll.php'">Hire</button>
				
			</div>
			
		</div>
		<button class="btn" onclick="window.location.href='package.php'">Back</button>
	</div>
	

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
        <h3>Services</h3>
       <a href="#">Janitor</a>
       <a href="#">Cook</a>
       <a href="#">Pet Caretaker</a>
       <a href="#">Driving</a>
    </div>

</div>

<h1 class="credit">created by <span>avs</span> all rights reserved!</h1>
</section>
    
</html>
