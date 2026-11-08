
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ZenithBank | Banking Management System</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<header class="public-navbar">

    <div class="public-logo">
        <span>sport</span>football
    </div>


    <nav>

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#services">Services</a>

        <a href="#contact">Contact</a>

        <a href="dashboard.php" class="dashboard-btn">
            Dashboard
        </a>

    </nav>

</header>



<!-- =========================================
     HERO SECTION
========================================= -->

<section id="home" class="hero">

    <div class="hero-content">

        <div class="hero-text">

            <span class="welcome-text">
                WELCOME TO football champion
	            </span>

            <h1>
                football Made
                <span>Simple & Secure</span>
            </h1>

            <p>
                Your trusted banking partner providing reliable,
                secure and convenient financial services for
                individuals and businesses.
            </p>


            <div class="hero-buttons">

                <a href="#services" class="primary-btn">
                    Explore Our Services
                </a>

                <a href="#contact" class="secondary-btn">
                    Contact Us
                </a>

            </div>

        </div>


        <!-- =================================
             IMAGE SLIDER
        ================================== -->

        <div class="Sport-slider">

            <div class="slide active">

                <img
                    src="bar.jpg"
                    alt="Modern Sports Building"
                >

            </div>


            <div class="slide">

                <img
                    src="blu.webp"
                    alt="Modern Sports Building"
                >

            </div>


            <div class="slide">

                <img
                    src="re.jpg"
                    alt="Sports Building"
                >

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     ABOUT SECTION
========================================= -->

<section id="about" class="about-section">

    <div class="section-container">

        <div class="section-title">

            <span>ABOUT US</span>

            <h2>EA Sport You Can Trust</h2>

            <p>
                To bring football fans closer to the game by providing
                accurate information, real-time updates and a platform
                for the global football community.
            </p>

        </div>


        <div class="about-content">

            <div class="about-card">

                <h3>Our Mission</h3>

                <p>
                    To provide secure, convenient and reliable
                    banking services while building long-lasting
                    relationships with our customers.
                </p>

            </div>


            <div class="about-card">

                <h3>Our Vision</h3>

                <p>
                    To become a trusted financial institution
                    recognized for excellent customer service,
                    innovation and professionalism.
                </p>

            </div>


            <div class="about-card">

                <h3>Our Values</h3>

                <p>
                    Integrity, professionalism, customer
                    satisfaction, security and innovation
                    guide everything we do.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     SERVICES SECTION
========================================= -->

<section id="services" class="services-section">

    <div class="section-container">

        <div class="section-title">

            <span>OUR SERVICES</span>

            <h2>What We Offer</h2>

            <p>
                Simple and reliable banking services designed
                to make managing your finances easier.
            </p>

        </div>


        <div class="services-grid">


            <div class="service-card">

                <div class="service-icon">
                    
                </div>

                <h3>Live Scores</h3>

                <p>
                    Get real-time football scores,
                    and updatesfrom leagues around the world.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    
                </div>

                <h3>Football Fixtures</h3>

                <p>
                    check upcoming matches, kick-off times
                    and competition fixtures.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    
                </div>

                <h3>League Table</h3>

                <p>
                  est standing  View the latest standing,points,wins,draws
                    and losses for your favourite Leagues.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    🔐
                </div>

                <h3>Football News</h3>

                <p>
                    Get the latest football news, transfers,player
                    Updates .and match reports.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     CONTACT SECTION
========================================= -->

<section id="contact" class="contact-section">

    <div class="section-container">

        <div class="section-title">

            <span>CONTACT US</span>

            <h2>We Are Here To Help</h2>

            <p>
                Have a question? Our football club is ready to assist you.
            </p>

        </div>


        <div class="contact-grid">


            <div class="contact-card">

                <div class="contact-icon">
                    📍
                </div>

                <h3>Our Address</h3>

                <p>
                    EA sport to the game
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    📞
                </div>

                <h3>Phone</h3>

                <p>
                    +234 903 187 8433
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    ✉️
                </div>

                <h3>Email</h3>

                <p>
                    easport@44football.com
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->

<footer class="public-footer">

    <div class="footer-logo">

        <span>football</span>sport

    </div>


    <p>
        sport Management System
    </p>


    <div class="footer-links">

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#services">Services</a>

        <a href="#contact">Contact</a>

    </div>


    <p class="copyright">

        &copy; 2026 Football. All Rights to the game.

    </p>

</footer>



<!-- =========================================
     IMAGE SLIDER JAVASCRIPT
========================================= -->

<script>

    let currentSlide = 0;

    const slides = document.querySelectorAll(".slide");


    function showSlide(index) {

        slides.forEach(function(slide) {

            slide.classList.remove("active");

        });


        slides[index].classList.add("active");

    }


    function nextSlide() {

        currentSlide++;

        if (currentSlide >= slides.length) {

            currentSlide = 0;

        }

        showSlide(currentSlide);

    }


    setInterval(nextSlide, 5000);

</script>


</body>

</html>

