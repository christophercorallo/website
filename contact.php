<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <header>
                <h1 class="logo">Christopher Corallo</h1>
            <nav>
                <a href="#" class="hide-desktop">
                    <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
                </a>
                <ul class="show-desktop hide-mobile" id="nav">
                    <li id="exit" class="exit-btn hide-desktop">
                        <img src="images/exit.svg" alt="exit menu">
                    </li>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <div class="contact-section">
                <h2>Contact</h2>
                <div class="border"></div>
                <form class="contact-form" action="contactform.php" method="post">
                    <input type="text" name="name" class="contact-form-text" placeholder="Your Name">
                    <input type="text" name="mail" class="contact-form-text" placeholder="Your e-mail">
                    <input type="text" name="subject" class="contact-form-text" placeholder="Subject">
                    <textarea name="message" class="contact-form-text" placeholder="Your Message"></textarea>
                    <button type="submit" name="submit" class="contact-form-btn">Submit</button>
                </form>
            </div>
                    
        </section>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <p class="address">Christopher Corallo<br>Toronto, Canada
            </div>
        </div>
    </footer>

    <script src="script.js"></script>

</body>
</html>