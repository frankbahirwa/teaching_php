<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Mission High School Football</title>
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
        
        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: end;
            padding: 1rem 2rem;
            background: #f4f4f4;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar ul {
            display: flex;
        }

        .navbar ul li {
            list-style: none;
            margin-right: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar ul li a:hover {
            background-color: #e6e6e6;
            color: #333;
        }

        /* Main Container */
        .container {
            display: flex;
            flex: 1;
            padding: 2rem;
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Sidebar Styling */
        aside {
            width: 220px;
            background-color: #f4f4f4;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right:450px;
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
        
        main > h2 {
            font-size: 1.8rem;
            color: #4CAF50;
            margin-bottom: 1rem;
        }

        /* Slider */
        /* General styling for main content */
main {
    font-family: Arial, sans-serif;
    margin: 0 auto;
    max-width: 1200px;
    text-align: center;
    
}

    


.slider {
    justify-content:center;
    
    position: relative;
    width:900px; /* Increased width for a larger slider */
    height:500px;
    margin: 20px auto;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transform: translateX(-10%); 
   
    
   
}

/* Slider images container */
.slider-images {
    display: flex;
    justify-content: center;
    gap: 20px;
    transition: transform 0.5s ease-in-out;
    width: 300px; /* Ensure all slides fit within the container */
}

/* Individual slide */
.slide {
    flex: 0 0 100%; /* Each slide takes up full width of the slider */
    box-sizing: border-box;
    text-align: center;
}

.slide img {
    width: 100%; /* Ensure image takes up full width of the slide */
    max-height: 400px; /* Increased height for visibility */
    object-fit: cover; /* Crop image if aspect ratio doesn't match */
    border-radius: 10px 10px 0 0;
}

/* Caption under each image */
.caption {
    background-color: #28a745; /* Green background */
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 10px;
    border-radius: 0 0 10px 10px;
    text-align: center;
}

/* Navigation buttons */
.slider-nav {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.nav-button {
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
    padding: 8px;
    border-radius: 50%;
    transition: background-color 0.3s;
}

.nav-button:hover {
    background-color: #28a745; /* Green hover */
}

.nav-button:focus {
    outline: none;
}


        .announce {
    margin-left:150;
}

.announcements {
    background-color: #fff;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.announcements h2 {
    font-size: 1.5rem;
    color: #4CAF50;
    margin-bottom: 1rem;
}

.announcements p {
    font-size: 1rem;
    color: #333;
    line-height: 1.5;
}


        .nav-button {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .nav-button:hover {
            background-color: #4CAF50;
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
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>World Mission High School Football</h1>
    </header>

    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="./signup.php">Register</a></li>
            <li><a href="./login.php">Login</a></li>
        </ul>
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
            <div class="announce">
        <section class="announcements">
            <h2>Upcoming Matches</h2>
            <div id="dynamic-announcements">
                <p>Stay tuned for upcoming matches and events! This section will be updated with the latest news and schedules.</p>
            </div>
        </section>
    </div>
        </aside>

        <!-- Main Content -->
        <main>
            <!-- Administration Members Slider -->
            <h2>Administration Members</h2>
            <div class="slider">
                <div class="slider-images">
                    <div class="slide">
                        <img src="./images/linda.jpg">
                        <div class="caption">School Manager Lee</div>
                    </div>
                    <div class="slide">
                        <img src="./images/master.jpg">
                        <div class="caption">Principle R Innocent</div>
                    </div>
                    <div class="slide">
                        <img src="./images/dos.jpg">
                        <div class="caption">DOS M Victor</div>
                    </div>
                    <div class="slide">
                        <img src="./images/dm.jpg">
                        <div class="caption">DM Honest</div>
                    </div>
                    <div class="slide">
                        <img src="./images/accountant.jpg">
                        <div class="caption">Accountant</div>
                    </div>
                    <div class="slide">
                        <img src="./images/trhappy.jpg">
                        <div class="caption">SECRETARY Happy</div>
                    </div>

                </div>
                <div class="slider-nav">
                    <button class="nav-button" onclick="prevSlide()">&#10094;</button>
                    <button class="nav-button" onclick="nextSlide()">&#10095;</button>
                </div>
            </div>

            <!-- Staff Members Slider -->
            <h2>Staff Members</h2>
            <div class="slider">
                <div class="slider-images">
                    <div class="slide">
                        <img src="./images/trphyisic.jpg">
                        <div class="caption">G Maxime <p> Physics Trainer</p></div>
                    </div>
                    <div class="slide">
                        <img src="./images/trsammie.jpg">
                        <div class="caption">T Sammie <p>IT Department</p></div>
                    </div>
                    <div class="slide">
                        <img src="./images/trurban.jpg">
                        <div class="caption">R Urban <p>IT Department</p></div>
                    </div>
                    <div class="slide">
                        <img src="./images/treraste.jpg">
                        <div class="caption"> T Eraste  <p>IT Department</p></div>
                    </div>
                    <div class="slide">
                        <img src="./images/yebale.jpg">
                        <div class="caption">A Patience<p>English Trainer</p></div>
                    </div>
                    <div class="slide">
                        <img src="./images/trmath.jpg">
                        <div class="caption">F Elisabeth <p>Maths Trainer</p></div>
                    </div>
                    <div class="slide">
                        <img src="./images/business tr.png">
                        <div class="caption">T Octave<p>Business Trainer</p></div>
                    </div>
                    <div class="slide">
                        <img src="./images/metron.jpg">
                        <div class="caption">Milliam <p>Librarian</p></div>
                    </div>
                </div>
                <div class="slider-nav">
                    <button class="nav-button" onclick="prevSlideStaff()">&#10094;</button>
                    <button class="nav-button" onclick="nextSlideStaff()">&#10095;</button>
                </div>
            </div>
        </main>
    </div>
    
</div>

    <!-- Footer -->
    <footer>
        <p>World Mission High School &copy; <script>document.write(new Date().getFullYear());</script></p>
        <p>All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        const adminSlider = document.querySelectorAll('.slider-images')[0];
        const staffSlider = document.querySelectorAll('.slider-images')[1];
        let adminIndex = 0;
        let staffIndex = 0;

        function showSlide(slider, index, imagesPerSlide) {
            const maxIndex = Math.ceil(slider.children.length / imagesPerSlide) - 1;
            if (index > maxIndex) index = 0;
            if (index < 0) index = maxIndex;
            slider.style.transform = `translateX(-${index * 100}%)`;
            return index;
        }

        function nextSlide() {
            adminIndex = showSlide(adminSlider, ++adminIndex, 3);
        }

        function prevSlide() {
            adminIndex = showSlide(adminSlider, --adminIndex, 3);
        }

        function nextSlideStaff() {
            staffIndex = showSlide(staffSlider, ++staffIndex, 3);
        }

        function prevSlideStaff() {
            staffIndex = showSlide(staffSlider, --staffIndex, 3);
        }

        setInterval(nextSlide, 3000);
        setInterval(nextSlideStaff, 3000);
    </script>
</body>
</html>
