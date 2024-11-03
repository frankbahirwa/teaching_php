<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page with Image Slider</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('./images/stade.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            overflow: hidden; /* Prevent scrollbars */
            animation: fadeIn 1s ease; /* Fade-in animation for the body */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Slider Styles */
        .slider {
            position: relative;
            width: 100%;
            height: 4%; /* Full viewport height */
            overflow: hidden;
            border-bottom: 5px solid #f39c12; /* Bottom border for style */
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease; /* Smooth slide transition */
            width: 300%; /* For 3 slides */
            height: 30%; /* Full height for the slider */
        }

        .slides img {
            width: 100vw; /* Full viewport width */
            height: 10cm; /* Full viewport height */
            object-fit: cover; /* Maintain aspect ratio */
            transition: transform 0.5s ease; /* Image transition */
        }

        .slides img:hover {
            transform: scale(1.05); /* Scale up image on hover */
        }

        button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            cursor: pointer;
            font-size: 24px;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, transform 0.3s; /* Added transform transition */
            z-index: 10; /* Bring buttons above the slider */
        }

        button:hover {
            background-color: rgba(255, 255, 255, 1);
            transform: scale(1.1); /* Scale button on hover */
        }

        .prev {
            left: 30px;
        }

        .next {
            right: 30px;
        }

        /* Content Styles */
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            max-width: 800px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            z-index: 5; /* Ensure content is above background */
            animation: slideIn 1s ease; /* Fade-in animation for content */
        }

        @keyframes slideIn {
            from { transform: translate(-50%, -60%); opacity: 0; }
            to { transform: translate(-50%, -50%); opacity: 1; }
        }

        h1 {
            font-size: 48px;
            margin: 0 0 20px;
        }

        p {
            font-size: 20px;
            line-height: 1.6;
            margin: 0 0 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 32px;
            }

            p {
                font-size: 18px;
            }

            button {
                font-size: 20px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="slider">
        <div class="slides">
            <img src="./images/trsammie.jpg" alt="Image 1">
            <img src="./images/benoit.jpg" alt="Image 2">
            <img src="./images/trhappy.jpg" alt="Image 3">
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>

        <div class="content">
            <h1>Welcome to Our Amazing Platform</h1>
            <p>Discover the best services tailored just for you. Our team is dedicated to providing you with the highest quality experience.</p>
            <p>Join us today and unlock exclusive features that will take your experience to the next level!</p>
        </div>
    </div>

    <script>
        let slideIndex = 0;

        function showSlides() {
            const slides = document.querySelectorAll(".slides img");
            slideIndex++;
            if (slideIndex >= slides.length) { slideIndex = 0; } // Loop back to the first slide
            updateSlideDisplay(slides);
        }

        function updateSlideDisplay(slides) {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none"; // Hide all slides
            }
            slides[slideIndex].style.display = "block"; // Show the current slide
        }

        // Change slide every 4 seconds
        let slideInterval = setInterval(showSlides, 4000);

        // Handle button clicks to change slides
        function changeSlide(n) {
            clearInterval(slideInterval); // Stop auto sliding on manual click
            slideIndex += n;
            const slides = document.querySelectorAll(".slides img");
            if (slideIndex < 0) { slideIndex = slides.length - 1; }
            if (slideIndex >= slides.length) { slideIndex = 0; }
            updateSlideDisplay(slides);
            slideInterval = setInterval(showSlides, 4000); // Restart auto sliding
        }

        // Initial call to show the first slide
        updateSlideDisplay(document.querySelectorAll(".slides img"));
    </script>
</body>
</html>
