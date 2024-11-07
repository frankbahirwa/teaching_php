<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Mission High School Football</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        /* Basic Reset and Layout */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f3f4f6;
            color: #333;
        }
        
        /* Header Styling */
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 2rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2rem;
        }
        
        header p {
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }
        
        /* Main Container */
        .container {
            display: flex;
            flex: 1;
            padding-left: 0.5rem;
            gap: 1.5rem;
            max-width: 60px;
            /* margin: 0 auto; */
        }
        
        /* Sidebar Styling */
        aside {
            width: 220px;
            background-color: #f4f4f4;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        aside ul {
            list-style-type: none;
        }
        
        aside ul li {
            margin-bottom: 15px;
        }
        
        aside ul li a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        
        aside ul li a:hover {
            color: #333;
        }
        
        /* Main Content Styling */
        main {
            flex: 2;
            padding: 1.5rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        main>h2 {
            font-size: 1.8rem;
            color: #4CAF50;
            margin-bottom: 1rem;
        }


        
        /* Announcements Section */
        .announcements {
            width: 200px;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .announcements h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #4CAF50;

        }
        
        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1.5rem;
            font-size: 0.9rem;
            margin-top: auto;
            box-shadow: 0px -2px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar{
            display:flex;
            justify-content: end;
        }
       .navbar ul{
        display: flex;
       }
       .navbar ul li{
        list-style: none;
        margin-top: 12px;
        margin-right:20px;
        
        font-size: 18px;
       }
      .navbar ul li a{
        text-decoration: none;
        color:#4CAF50;
        padding: 10px 12px;
        border-radius: 5px;
        transition: 0.1s ease-in;
      }
      .navbar ul li a:hover{
        text-decoration: none;
        background-color:whitesmoke;

        color: seagreen;
      }
    


              /* Slider */
              .slider {
            position: relative;
            width: 24cm;
            margin-bottom:1cm;
            max-width: 1000px;
            overflow: hidden;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .slider h1{
            color:seagreen;
            justify-content:center;
            display:flex;
        }

        .slider-images {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider-images img {
            width: calc(100% / 3); /* Show three images at once */
            height: 300px;
            object-fit: cover;
        }
        .staff{
            display: flex;
            transition: transform 0.5s ease;
            


        }
        .staff img{
            width: calc(100% / 3); /* Show three images at once */
            height: 300px;
            object-fit: cover;
          
        }
        /*h1{
            font-size: 1.8rem;
            color: #4CAF50;
            margin-bottom: 1rem;
            justify-content: center;
            text-align:center;
            
        }*/

        .nav-button {
            background: rgba(0, 0, 0, 0.5);
            color: #ffd700;
            border: none;
            font-size: 2em;
            cursor: pointer;
            padding: 5px 10px;
        }

        .announce{
            position: absolute;color-scheme;
            right: 11rem;
            top: 3.6cm;
            width: 1cm;
        }

    </style>

</head>
<body>
    
    <!-- Header -->
     
    <header>
        <h1>World Mission High School Football</h1>
        
        <!-- <p>Welcome to our official page! Catch the latest news, events, and updates from our school's football team.</p> -->
    </header>
    <nav>
        <div class="navbar">
        <ul>
            <li>
                <a href="./signup.php">Register</a></li>
            <li><a href="./login.php">login</a></li>
        </ul>
        </div>
     </nav>
    
    <!-- Main Container -->
    <div class="container">
        
        <!-- Sidebar -->
        <aside>
            <ul>
                <li><a href="https://www.ferwafa.rwa" target="_blank">FERWAFA</a></li>
                <li><a href="https://fifa.com" target="_blank">FIFA</a></li>
                <li><a href="https://www.mon.gov.rw" target="_blank">MINISANTE</a></li>
            </ul>
        </aside>
        
        <!-- Main Content -->
        <main>
            <h2>Administration Members</h2>
            <!-- Slider Section -->
    <div class="slider">
        <div class="slider-images">
            <!-- images of people who work hard for out team to be strong-->
            <img src="./images/linda.jpg" width="150px">
            <img src="./images/master.jpg" width="150px">
            <img src="./images/dos.jpg" width="150px">
            <img src="./images/dm.jpg"  width="150px">
            <img src="./images/accountant.jpg"  width="150px">
            <img src="./images/trhappy.jpg"  width="150px">
            </div>
            
            <h1>Staff members</h1>
            <div class="swiper-container">
    <div class="swiper-wrapper">
        <img src="./images/trphyisic.jpg" width="150px"></div>
        <img src="./images/trsammie.jpg" width="150px"></div>
        <img src="./images/trurban.jpg" width="150px"></div>
        <img src="./images/trmoise.jpg" width="150px"></div>
        <img src="./images/walidah.jpg" width="150px"></div>
        <img src="./images/trmath.jpg" width="150px"></div>
        <img src="./images/business tr.PNG" width="150px"></div>
        <img src="./images/yebale.jpg" width="150px"></div>
    </div>


           
       
        <div class="slider-nav">
            <button class="nav-button" onclick="prevSlide()">&#10094;</button>
            <button class="nav-button" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <script>
        // JavaScript for Slider
        let currentIndex = 0;
        const slides = document.querySelector('.slider-images');
        const totalImages = slides.children.length;
        const imagesPerSlide = 3; // Show 3 images at a time
        const maxIndex = Math.ceil(totalImages / imagesPerSlide) - 1;

        function showSlide(index) {
            if (index > maxIndex) currentIndex = 0;
            if (index < 0) currentIndex = maxIndex;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            currentIndex++;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex--;
            showSlide(currentIndex);
        }

        // Auto-slide every 3 seconds
        setInterval(nextSlide, 3000);

        
   


    </script>
            </div>
            <p>Meet our dedicated administration team! These individuals work hard behind the scenes to support our team and ensure smooth operations.</p>
        </main>
        
        <!-- Announcements Section -->
         <div class="announce">
            <section class="announcements">
                <h2>Upcoming Matches</h2>
                <div id="dynamic-announcements">
                    <p>Stay tuned for upcoming matches and events! This section will be updated with the latest news and schedules.</p>
                </div>
            </section>

         </div>

    </div>
    
    <!-- Footer -->
    <footer>
        <p>World Mission High School &copy; <script>document.write(new Date().getFullYear());</script></p>
        <p>All rights reserved.</p>
    </footer>


    </body>
</html>
