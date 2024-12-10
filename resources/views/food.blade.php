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
        <h1>Our Culinary Creations</h1>
        <p>Explore the flavors of Japan at Erubano</p>
    </header>

    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="beef teriyaki gambar.png" alt="Sushi">
                    <div class="gallery-item-info">
                        <h3>Beef Teriyaki</h3>
                        <p>Freshly prepared sushi with a high quality Beef.</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="takoyaki gambar.jpg" alt="Ramen">
                    <div class="gallery-item-info">
                        <h3>Takoyaki</h3>
                        <p>Delicious Takoyaki with various toppings.</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="ramen gambar.png" alt="Tempura">
                    <div class="gallery-item-info">
                        <h3>Ramen</h3>
                        <p>Ramen spicy and note can be requested by order.</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="nasgor gambar.png" alt="Matcha">
                    <div class="gallery-item-info">
                        <h3>Yakimeshi</h3>
                        <p>Traditional Japanese Fried Rice.</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="chickenkatsu.jpg" alt="Yakitori">
                    <div class="gallery-item-info">
                        <h3>Chicken Katsu</h3>
                        <p>Crispy Chicken outside and juicy inside.</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="chickenteriyaki.jpg" alt="Mochi">
                    <div class="gallery-item-info">
                        <h3>Chicken Teriyaki</h3>
                        <p>Sweet Chicken made original.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Erubano Japanese Food. All Rights Reserved.</p>
    </footer>


</body>
</html>
