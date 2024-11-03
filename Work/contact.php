<?php require "./layout.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Football Club</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 2.5em;
            margin: 20px 0;
            text-align: center;
        }

        .contact-container {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form label {
            font-size: 1.2em;
            color: blue;
            text-align: left;
        }

        .contact-form input, 
        .contact-form textarea {
            padding: 12px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid gray;
            outline: none;
            background: rgba(255, 255, 255, 0.8);
        }

        .contact-form textarea {
            height: 120px;
            resize: vertical;
        }

        .contact-form button {
            padding: 12px;
            font-size: 1.1em;
            font-weight: bold;
            color: #003366;
            background-color: #ffd700;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #ffa500;
        }

        /* Social Media Links */
        .social-links {
            margin-top: 30px;
        }

        .social-links a {
            color: black;
            font-size: 1.5em;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #ffa500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }

            .contact-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <h1>Contact Us</h1>

    <div class="contact-container">
        <form class="contact-form" id="contactForm">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>

            <button type="submit">Send Message</button>
        </form>

        <div class="social-links">
            <p>Follow us on:</p>
            <a href="#" title="Facebook">⚽ Facebook</a>
            <a href="#" title="Twitter">🐦 Twitter</a>
            <a href="#" title="Instagram">📸 Instagram</a>
        </div>
    </div>

    <script>
        // Handle form submission
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Thank you for contacting us! We will get back to you soon.");
            this.reset();
        });
    </script>

</body>
</html>
