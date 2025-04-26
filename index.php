<?php
$host = "localhost"; // Change if using a remote server
$user = "root"; // Your MySQL username
$pass = ""; // Your MySQL password
$dbname = "khcl";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php include "inc/loading.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Kang Hydropower Company Limited</title>

    <style>
        /* General Reset */ 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color:#A5A9C2;

        }

         /* Sticky Header */
         header {
            background-color:#46528E;
            color: white;
            padding: 5px 15px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: padding 0.3s ease, font-size 0.3s ease; 
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
        }
        .header.shrink {
            padding: 10px;
            font-size: 1.2em;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Logo on left, nav on right */
            padding: 10px 20px;
            background: #46528E; /* Adjust background */
        }

        .logo {
            display: flex;
            align-items: center;
        }
        /* Style for logo */
        .logo img {
            height: 90px; /* Adjust size */
            width: auto;
            border-radius: 50%;
        }

        /* Style for nav links */
        .nav-links ul {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px; /* Reduce spacing if too wide */
            padding: 0;
            margin: 0;
        }

        .nav-links ul li {
            display: inline-block;
        }

        .nav-links ul li :hover {
            background-color: white;
            color: #46528E;
            border-radius: 5px;
        }
        .nav-links ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }

        .nav-links ul li a.active {
            background: white;
            color: navy;
            border-radius: 5px;
        }

        .sticky {
            padding: 20px;
            background-color: #46528E;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .container1 {
            text-align: justify;
            padding-top: 100px;
            margin: auto;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .slider {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .slider img {
            height: auto;
            max-height: 700px;
            width: 100%;
        }

        .slide {
            position: absolute;
            border-radius: 1%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .content-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            padding: 40px;
            padding-top: 90px;
        }

        .content-box {
            background: #f1f1f1;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .content-box .title{
            width: 100%;
            margin: auto;
        }
        
        .content-box h2{
            font-size: 2rem; 
            font-weight: bold;           
            padding: 20px;
        }
        .content-box p{
            font-size: 1.4rem;
            padding: 20px;

        }
        .read-more {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #606DA5;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .read-more:hover {
            background:rgb(78, 88, 133);
            color: #fff;
            text-decoration: none;        }

        
        .sec1 {
            flex: 1;
            text-align: center;
        }

        .sec1 img {
            max-width: 50%;
            height: auto;
            border-radius: 10px;
        }

        .sec2 {
            flex: 2;
            padding-left: 20px;
        }
        

        .news-card {
            width: 400px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s;
        }
        .news-card:hover {
            transform: scale(1.05);
        }
        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .news-content {
            padding: 15px;
        }
        .news-content h3 {
            margin-bottom: 5px;
            font-size: 1.5em;
        }
        .news-content p.date {
            color: #888;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        .news-content p {
            color: #555;
        }
        .read-more {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #606DA5;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .read-more:hover {
            background:rgb(78, 88, 133);
            color: #fff;
            text-decoration: none;        }

        
        footer {
            background-color:#606DA5;
            color: white;
            padding: 15px;
            width: 100%;
            }
            .mt-4 a{
            background: rgba(0, 0, 0, 0.2);
            border: #010139;
            }

        .scroll-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #46528E;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 50%;
            font-size: 1.5em;
            cursor: pointer;
            display: none;
            z-index: 1000;
            transition: opacity 0.3s ease-in-out;
        }

        .scroll-top.visible {
            display: block;
            opacity: 1;
        }
    </style>
    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('active');
        }

        window.onscroll = function () {
            let scrollTopButton = document.getElementById("scrollTopButton");
            let header = document.querySelector("header");

            if (document.documentElement.scrollTop > 100) {
                scrollTopButton.classList.add("visible");
                header.classList.add("sticky");
            } else {
                scrollTopButton.classList.remove("visible");
                header.classList.remove("sticky");
            }
        };
        window.addEventListener("scroll", function() {
            var header = document.getElementById("header");
            if (window.scrollY > 50) {
                header.classList.add("shrink");
            } else {
                header.classList.remove("shrink");
            }
        });
        document.addEventListener("DOMContentLoaded", function () {
        // Get the current page URL
        let currentPage = window.location.pathname.split("/").pop();
        
        // Get all navbar links
        let navLinks = document.querySelectorAll(".nav-links a");

        // Loop through each link and check if its href matches the current page
        navLinks.forEach(link => {
            if (link.getAttribute("href").includes(currentPage) || (currentPage === "" && link.getAttribute("href").includes("index.php"))) {
                link.classList.add("active");
            }
        });
    });

    </script>
</head>
<body>
    <header class="header">
    <div class="logo">
                <a href="index.php"><img src="assets/images/logo.ico" alt="Kang Hydropower Logo"></a>
                
            </div>
        <div class="navbar">
            
            
            <nav class="nav-links">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="inc/project_main.php">Projects</a></li>
                    <li><a href="inc/news.php">News</a></li>
                    <li><a href="inc/teams.php">Teams</a></li>
                    <li><a href="inc/contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>  
    </header>

    <div class="container1">
    <div class="slider">
        <img class="slide" src="/khcl/assets/images/home.jpg" alt="">
        <img class="slide" src="/khcl/assets/images/slide1.jpg" alt="ads">
    </div>
    
</div>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll(".slide");

    function showSlide() {
        slides.forEach((slide, index) => {
            slide.classList.remove("active");
            if (index === currentIndex) {
                slide.classList.add("active");
            }
        });

        currentIndex = (currentIndex + 1) % slides.length;
    }

    setInterval(showSlide, 4000); // Change slide every 4 seconds
    showSlide(); // Initialize first slide
</script>
    <div class="content-container">
        <div class="content-box" id="about">
                <div class="sec1">
                    <h2>About Us</h2>
                    <img src="/khcl/assets/images/lo.jpg" alt="" style="border-radius: 50%;">
                </div>
                <div class="sec2">
                    <p>Kang Hydropower Company Ltd. (KHCL) is a renewable energy company registered at the office of the company registrar, government of Nepal. The company is led by a group of competent board members supported by a professional technical and managerial team to design, construct, and operate hydropower projects. <br><br><a class="read-more" style="font-size: 16px;" href="/khcl/inc/about.php">READ MORE <i style='font-size:16px' class='fas'>&#xf061;</i></a></p>
                </div>
            </div>
        <div class="content-box" id="projects">
            <div class="sec1">
                <h2>Our Projects </h2>     
                <h3>1. Upper Maiwa Khola Hydropower Project (17.85 MW)</h3>
                <p>Upper Maiwa Khola Hydropower Project (UMHP) is being developed by Kang Hydropower Co. 
                Pvt. Ltd. (KHCPL). KHCPL has awarded Contract to Samyak Engineering Pvt. Ltd 
                (SEPL) to prepare Detailed Project Report study and detailed engineering study of the project. 
                Prior to initiating the study, the technical team from SEPL made a visit to the project area. 
                Based on the site visit and further study, the project has been fixed at an installed capacity of 
                17.85 MW with the gross natural head and design discharge of 515.00 m and 4.19 m3
                /s, respectively. <a class="read-more" href="inc/project_main.php">more details</a>
                </p>
                <img src="/khcl/assets/images/project_img/pr1.jpg" alt="img">

            </div>
            
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/350x200" alt="News Image 1">
            <div class="news-content">
                <h3>News Title 1</h3>
                <p class="date">March 27, 2025</p>
                <p>A short description of the news article.</p>
                <a href="news1.html" class="read-more">Read More</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/350x200" alt="News Image 2">
            <div class="news-content">
                <h3>News Title 2</h3>
                <p class="date">March 26, 2025</p>
                <p>A short description of the news article.</p>
                <a href="news2.html" class="read-more">Read More</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/350x200" alt="News Image 3">
            <div class="news-content">
                <h3>News Title 3</h3>
                <p class="date">March 25, 2025</p>
                <p>A short description of the news article.</p>
                <a href="news3.html" class="read-more">Read More</a>
            </div>
        </div>
        

    </div>
    
    <footer>
    <!--Grid row-->
    <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        

        <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
        </div>
        </div>
        <!--Grid column-->

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        

        <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Koteshowr-32, Kathmandu</span>
            </li>
            <li class="mb-3">
            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">kanghydropower@gmail.com</span>
            </li>
            <li class="mb-3">
            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01-5923471</span>
            </li>
        
        </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4" style="text-align: center;">Opening hours</h5>

        <table class="table text-center text-white">
            <tbody class="font-weight-normal">
            <tr>
                <td>Sun - Fri:</td>
                <td>10am - 5pm</td>
            </tr>
            <tr>
                <td>Sat:</td>
                <td>Closed</td>
            
            </tbody>
        </table>
        </div>
        <!--Grid column-->
    </div>
    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p >&copy; 2025 Kang Hydropower Company Limited. All rights reserved.</p>
        <p >Designed and developed by Yumphuhang</p>

    </div>
    
    </footer>

    <button id="scrollTopButton" class="scroll-top" onclick="scrollToTop()">▲</button>
</body>
</html>
