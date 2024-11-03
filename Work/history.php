<?php require "./layout.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club History | Football Club</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            color: black;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            line-height: 1.6;
        }

       
        h1 {
            font-size: 2.5em;
            margin-top: 20px;
            text-align: center;
            color: black;
        }


        .history-container {
            max-width: 900px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            margin: 20px;
        }

      
        .section-title {
            font-size: 1.8em;
            color: black;
            margin: 20px 0;
            text-align: left;
            border-bottom: 2px solid #ffd700;
            padding-bottom: 5px;
        }

        /* Text Content */
        .history-text {
            font-size: 1em;
            color: black;
            margin: 15px 0;
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

        .slider-images {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider-images img {
            width: calc(100% / 3); /* Show three images at once */
            height: 300px;
            object-fit: cover;
        }

        /* Navigation Buttons */
        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .nav-button {
            background: rgba(0, 0, 0, 0.5);
            color: #ffd700;
            border: none;
            font-size: 2em;
            cursor: pointer;
            padding: 5px 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .slider-images img {
                height: 200px;
            }
        }
    </style>
</head>
<body>

    <h1>Club History</h1>

    <div class="history-container">
        <!-- Founding Section -->
        <div class="section">
            <h2 class="section-title">Founding</h2>
            <p class="history-text">
                Our football club was founded in 1902 with a mission to bring communities together through the spirit of the game. From humble beginnings, we quickly established ourselves as a force to be reckoned with, fostering talent and passion for generations.
            </p>
        </div>

        <!-- Golden Era Section -->
        <div class="section">
            <h2 class="section-title">The Golden Era</h2>
            <p class="history-text">
                The 1970s marked our golden era, when our club won numerous national and international titles. Known for our fast-paced gameplay and skilled players, we captivated fans worldwide, bringing home prestigious trophies and accolades that remain highlights in our history.
            </p>
        </div>

        <!-- Recent Success Section -->
        <div class="section">
            <h2 class="section-title">Recent Success</h2>
            <p class="history-text">
                In recent years, we have continued our tradition of excellence with a focus on developing young talents. Our commitment to nurturing future stars has led to impressive victories in national leagues, setting new records and inspiring a new generation of fans.
            </p>
        </div>

        <!-- Future Goals Section -->
        <div class="section">
            <h2 class="section-title">Future Goals</h2>
            <p class="history-text">
                As we look to the future, our club remains dedicated to promoting sportsmanship, fostering talent, and achieving new heights. With a focus on sustainability and community, we aim to build an even stronger legacy for the generations to come.
            </p>
        </div>
    </div>

    <!-- Slider Section -->
    <div class="slider">
        <div class="slider-images">
            <!-- Replace these with actual images of football players -->
            <img src="./images/accountant.jpg" alt="Football Player 1">
            <img src="./images/benoit.jpg" alt="Football Player 2">
            <img src="./images/trsammie.jpg" alt="Football Player 3">
            <img src="./images/treraste.jpg" alt="Football Player 4">
            <img src="./images/yebale.jpg" alt="Football Player 5">
            <img src="./images/trurban.jpg" alt="Football Player 6">
            <img src="./images/trphyisic.jpg" alt="Football Player 7">
            <img src="./images/trmoise.jpg" alt="Football Player 8">
            <img src="./images/walidah.jpg" alt="Football Player 9">
            <img src="./images/trmoise.jpg" alt="Football Player 8">
            <img src="./images/walidah.jpg" alt="Football Player 9">
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
</body>
</html>
