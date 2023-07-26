<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link rel=" stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="index.js"></script>
    <title>Contact Me</title>
</head>

<body>
    <header id="fixed-header">
        <nav>
            <div class="nav-left">
                <img src="../images/hari.png" alt="">
            </div>
            <div class="nav-mid">
                <h1>Hariharan Chellamuthu</h1>
            </div>
            <input type="checkbox" id="toggleCheckbox">
            <label for="toggleCheckbox" class="toggle-label">
                <i id="hamburger" class="fas fa-bars"></i>
            </label>

            <div class="offcanvas">
                <label for="toggleCheckbox" class="toggle-label">
                    <i class="fas fa-times"></i>
                </label>
                <!-- Offcanvas content here -->
                <h3>Menu</h3>
                <ul class="nav-links">
                    <li><a href="/" active>Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/skills">Skills</a></li>
                    <li><a href="/projects">Projects</a></li>
                    <li><a href="/experience">Experience</a></li>
                    <li><a href="/education">Education</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- This section is for contact form -->
    <section>
        <div class="contact">
            <form class="contact-form" action="./pages/contactsend.php" method="POST">
                <div class="form-group">
                    <label for="first-name">First Name <sup class="star">*</sup></label>
                    <input type="text" name="first-name" id="first-name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name <sup class="star">*</sup></label>
                    <input type="text" name="last-name" id="last-name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email <sup class="star">*</sup></label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact <sup class="star">*</sup></label>
                    <input type="tel" name="contact" id="contact" required>
                </div>
                <div class="form-group">
                    <label for="message">Message <sup class="star">*</sup></label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                </div>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>


    <!-- This section is for my mail contact git gitlab -->
    <section class="myinfo">
        <div class="info-item">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <h4>harichella005@gmail.com</h4>
        </div>
        <div class="info-item">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h4>+91 9790755231</h4>
        </div>
        <div class="info-item">
            <i class="fa fa-location-dot" aria-hidden="true"></i>
            <h4>Chennai</h4>
        </div>
        <div class="info-item">
            <i class="fa-brands fa-github"></i>
            <h4>github.com/harichella005</h4>
        </div>
        <div class="info-item">
            <i class="fa-brands fa-gitlab" aria-hidden="true"></i>
            <h4>gitlab.com/harichella005</h4>
        </div>
    </section>


    <footer>
        <div class="social-icons">
            <a href="#" class="icon-link">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="icon-link">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="icon-link">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/hariharan-c-0186531aa/" class="icon-link">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
        <div class="copyrights">
            <p>&copy; 2023 All rights reserved </p>
        </div>
    </footer>
</body>

</html>