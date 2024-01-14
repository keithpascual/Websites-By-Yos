<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contacts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Men Apparel</title>
</head>

<body>
    <div class="nav-container">
        <ul class="navigations">
            <h1 class="symbol"><a href="Raku.php">楽</a></h1>
            <li class="item item-1"><a href="mens.php">Men</a></li>
            <li class="item item-1"><a href="contacts.php">Contacts</a></li>
            <li class="item item-1"><a href="Raku.php#about-us">About us</a></li>
        </ul>

        <h1><a href="Raku.php" class="logo">R A K U</a></h1>

        <ul class="icon-navigations">
            <li class="icon-1"><a href="#"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </a></li>

            <li class="icon-2"><a href="#"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                    </svg>
                </a></li>

            <li class="icon-3"><a href="#"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>
                </a></li>
        </ul>
    </div>

    <!-- Content -->
    
    <div class="contact-box">
        <h2>Contact Us</h2>
        <p>If you have any questions or concerns, feel free to reach out to us.</p>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <div class="men">
                <h3>Men</h3>
                <a href="#">EXPLORE MEN’S</a>
                <a href="#">CLOTHING</a>
                <a href="#">SNOW</a>
            </div>

            <div class="explore">
                <h3>Explore</h3>
                <a href="#">OUR STORES</a>
                <a href="#">ABOUT</a>
            </div>

            <div class="support">
                <h3>Support</h3>
                <a href="#">FAQ</a>
                <a href="#">ACCESSIBILITY</a>
                <a href="#">CONTACTS</a>
            </div>

            <div class="social-icons">
                <h3>Connect</h3>
                <a href="#">INSTAGRAM</a>
                <a href="#">FACEBOOK</a>
                <a href="#">TIKTOK</a>
                <a href="#">TWITTER</a>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <p>© 2023 ALL RIGHTS RESERVED | <a href="#">PRIVACY</a> | <a href="#">TERMS OF USE</a></p>
    </div>
</body>

</html>