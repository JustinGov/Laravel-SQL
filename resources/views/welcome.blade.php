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
                </li>
            </nav>
        </div>
    </div>



    <div class="mid">
        <h1>Welcome to Erubano Japanese Foods</h1>

        <div class="makanan">
            <img src="ramen gambar.png" alt="ramen">
           <div class="makanan1">
            <p>Erubano Japanese Food hadir untuk membawa cita rasa Jepang yang autentik dengan sentuhan modern ke dalam dunia kuliner. Restoran ini bertujuan untuk menjadi destinasi utama bagi pecinta makanan Jepang yang mencari kombinasi antara tradisi dan inovasi, serta kelezatan dan suasana yang memikat. Dengan fokus pada kualitas, rasa, dan presentasi, Erubano berkomitmen untuk menghadirkan pengalaman makan yang tidak terlupakan.</p>
            <a href="food.html">Learn More..</a>
           </div>
        </div>

        <div class="listMakanan">
            <img src="beef teriyaki gambar.png" alt="ramen">
            <img src="takoyaki gambar.jpg" alt="ramen">
            <img src="nasgor gambar.png" alt="ramen">
        </div>

        <div class="tombolMenu">
            <a href="food.html">Lihat Menu</a>
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1" checked>
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="jepang makanan.jpg" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="nasgor gambar.png" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="ramen gambar.png" alt="Slide 3">
                </div>
                <div class="slide">
                    <img src="beef teriyaki gambar.png" alt="Slide 4">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>

        <!-- Your existing content -->
        <!-- ... -->
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <h2>Erubano Japanese Food</h2>
                <p class="tagline">Tempat berbagi pengalaman kuliner</p>
                <p class="address">Pluit Village Mall</p>
                <p class="contact">021 2295 6067 | info@erubano.com</p>
            </div>
            <div class="footer-right">
                <h3>Lokasi</h3>
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d63475.40868426176!2d106.71656955104365!3d-6.101986684336407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-6.0776702!2d106.726424!4m5!1s0x2e6a1d95bf7bceeb%3A0xdacb917bfb866141!2spluit%20village%20embed!3m2!1d-6.1164461999999995!2d106.78961989999999!5e0!3m2!1sid!2sid!4v1725188925151!5m2!1sid!2sid"
                      width="600"
                     height="150"
                 style="border:0;"
                 allowfullscreen=""
                 loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="social-icons">
                <a href="#"><img src="blog-icon.png" alt="Blog"></a>
                <a href="#"><img src="tiktok-icon.png" alt="TikTok"></a>
                <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
            <p>&copy; copyrights Erubano Japanese Food - 2024</p>
        </div>
    </footer>
</body>
</html>
