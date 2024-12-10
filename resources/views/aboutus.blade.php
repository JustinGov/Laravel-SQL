<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erubano</title>

    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="top">
        <div class="atas1">
         <img src="logo_erubano-removebg-preview.png" alt="Logo Erubano">
        </div>
         <div class="navigasi">
             <nav>
                 <li>
                 <a href="{{ route('food') }}">Foods</a>
                 <a href="{{ route('contact') }}">Contact</a>
                 <a href="{{ route('aboutus') }}">About Us</a>
                 <a href="{{ route('welcome') }}">Back</a>
                 </li>
             </nav>
         </div>
     </div>
    <header class="hero">
        <h1>Welcome to Erubano Japanese Food</h1>
        <p>Your Authentic Japanese Culinary Experience</p>
    </header>

    <section class="about-section">
        <div class="container">
            <h2>Our Story</h2>
            <p>Erubano Japanese Food was founded with the passion to bring authentic Japanese flavors to your table. Our journey began in Tokyo, where our chefs mastered the art of Japanese cuisine. Today, we are proud to share that experience with our customers in a cozy and welcoming atmosphere.</p>
        </div>
    </section>

    <section class="values-section">
        <div class="container">
            <h2>Our Values</h2>
            <div class="values">
                <div class="value-item">
                    <h3>Quality Ingredients</h3>
                    <p>We source only the freshest and highest quality ingredients to ensure that every dish we serve is of the utmost quality.</p>
                </div>
                <div class="value-item">
                    <h3>Authenticity</h3>
                    <p>Our recipes stay true to traditional Japanese techniques, ensuring an authentic taste experience with every bite.</p>
                </div>
                <div class="value-item">
                    <h3>Customer Satisfaction</h3>
                    <p>Your satisfaction is our priority. We strive to provide excellent service and a delightful dining experience.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <h2>Our Cuisine</h2>
            <div class="gallery">
                <div class="gallery-item" style="background-image: url('ramen\ gambar.png');"></div>
                <div class="gallery-item" style="background-image: url('jepang\ makanan.jpg');"></div>
                <div class="gallery-item" style="background-image: url('nasgor\ gambar.png');"></div>
                <div class="gallery-item" style="background-image: url('beef\ teriyaki\ gambar.png');"></div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>We would love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to get in touch.</p>
            <a href="{{ route('contact') }}" class="contact-button">Get in Touch</a>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Erubano Japanese Food. All Rights Reserved.</p>
    </footer>
</body>
</html>
