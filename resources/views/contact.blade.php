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

    <div class="mid">
        <h1>Welcome to Erubano Japanese Foods</h1>

        <div class="form-container">
            <h1>Contact Us</h1>
            <form action="{{ route('contactus.store') }}" method="POST">
                @csrf
                <div class = "input-group">
                    <label for="Nama">Name:</label>
                    <input type="text" id="Nama" name="Nama" required>
                </div>
                <div class = "input-group">
                    <label for="Email">Email:</label>
                    <input type="email" id="Email" name="Email" required>
                </div>
                <button type="submit">Submit</button>
            </form>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
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
