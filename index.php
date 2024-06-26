<?php
session_start();
$is_logged_in = isset($_SESSION['username']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-WORLD by Fahrul</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <script>
            var isLoggedIn = <?php echo json_encode($is_logged_in);?>
        </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navku">
        <div class="container-fluid">
            <a class="navbar-brand righteous-regular brand" href="index.html">A - WORLD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav poppins-medium">
                    <a class="nav-link"  href="yourplane.html">Your Plane</a>
                    <a class="nav-link"  href="createPlan.html">Create Plane</a>
                    <a class="nav-link"  href="#foto-rekomen" class="scroll-link">Popular Destination</a>
                    <button class="Btn" class="login" onclick="window.location.href='/Proyek_Akhir/login.html'">
                        <div class="sign"><svg viewBox="0 00 512 512">
                                <path
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                </path>
                            </svg></div>
                        <div class="text">Login</div>
                    </button>
                    <button class="signupBtn" onclick="window.location.href='signUp.html'">
                        Sign Up
                        <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" fill="rgb(183, 128, 255)">
                                <path
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                </path>
                            </svg>
                        </span>
                    </button>
                    <button id="btn-message" class="button-message">
                        <div class="content-avatar">
                            <div class="status-user"></div>
                            <div class="avatar">
                                <svg class="user-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12,12.5c-3.04,0-5.5,1.73-5.5,3.5s2.46,3.5,5.5,3.5,5.5-1.73,5.5-3.5-2.46-3.5-5.5-3.5Zm0-.5c1.66,0,3-1.34,3-3s-1.34-3-3-3-3,1.34-3,3,1.34,3,3,3Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="notice-content">
                            <div class="username">Jessica Sanders</div>
                            <div class="lable-message">Message<span class="number-message">3</span></div>
                            <div class="user-id">@jessisanders</div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
            <div class="main-info">
                <div class="row">
                    <div class="teks">
                        <h1 class="righteous-regular">Adventure</h1>
                        <p class="Poppins">Enjoy the ease of planning a holiday with our itinerary planner, which offers recommendations for interesting tourist
                        attractions, accommodation and activities according to your preferences.
                        </p>
                    </div>
                </div>
            </div>
        <section>
            <div class="gambar">
                <div class="design">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 220">
                        <path fill="#ffffff" fill-opacity="1"
                            d="M0,96L30,106.7C60,117,120,139,180,122.7C240,107,300,53,360,74.7C420,96,480,192,540,202.7C600,213,660,139,720,122.7C780,107,840,149,900,149.3C960,149,1020,107,1080,128C1140,149,1200,235,1260,277.3C1320,320,1380,320,1410,320L1440,320L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                        </path>
                    </svg>
                </div>
                <img src="/Proyek_Akhir/assets/mountain.jpg" alt="" class="mountain">
            </div>
        </section>
    </div>

    <div class="content">
        <div class="information poppins-light">
            <div class="gmbr">
                <div class="people" data-aos="fade-up">
                    <img src="assets/foto.jpg" alt="">
                </div>
                <div class="air-plane" data-aos="fade-up" data-aos-delay="100" data-rellax-percentage="0.4">
                    <img src="assets/air_plane.jpg" alt="">
                </div>
            </div>
            <div class="world">
                <h1>
                    Explore All Corners <br>of The World
                </h1>
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    <br>
                    <br>
                    A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                    country, in which roasted parts of sentences fly into your mouth.
                </p>
            </div>
        </div>
    </div>

    <div class="rekomen" id="rekomen">
        <div class="container-rekomen">
            <div class="rekomen-foto sriracha-regular">
                <div class="teks-rekomen london" id="foto-rekomen">
                    <h3>London</h3>
                    <p>United Kingdom</p>
                    <img src="assets/London.jpg" alt="">
                </div>
                <div class="teks-rekomen bali" id="foto-rekomen">
                    <h3>Bali</h3>
                    <p>Indonesia</p>
                    <img src="assets/bali.jpg" alt="">
                </div>
                <div class="teks-rekomen paris" id="foto-rekomen">
                    <h3>Paris</h3>
                    <p>France</p>
                    <img src="assets/paris.jpg" alt="">
                </div>
                <div class="teks-rekomen raja-ampat" id="foto-rekomen">
                    <h3>Raja Ampat</h3>
                    <p>Indonesia</p>
                    <img src="assets/raja-ampat.jpg" alt="">
                </div>
            </div>
            <div class="popular poppins-medium">
                <h1>Popular Destination</h1>
            </div>
        </div>
    </div>

    <div class="cta-container">
        <h1 class="poppins-medium">Ready to plan your trip in half the time?</h1>
        <div class="start">            
            <button class="cta">
                <span>Get Started</span>
                <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </button>
        </div>
    </div>
    <footer>
        <div class="footer-container poppins-light">
            <div class="footer-content">
                <div class="footer-title">
                    <h1>For every kind of trip and <span>every destination</span></h1>
                </div>
                <div class="footer-isi">
                    <div class="bag1 bag">
                        <h3>The best <span>road trip</span> planner</h3>
                        <p>
                            Use A-WORLD as a route map showing directions, distances, and driving times between different attractions you might want
                            to visit.
                        </p>
                    </div>
                    <div class="bag2 bag">
                        <h3><span>The best</span> vacation planner</h3>
                        <p>
                            Use A-WORLD to map your journey to figure out the best routes, keep track of hotel and flight bookings and reservations,
                            and read guides from other trip planning websites.
                        </p>
                    </div>
                    <div class="bag3 bag">
                        <h3>The best group <span>itinerary planner</span></h3>
                        <p>
                            Use A-WORLD to share your itinerary with tripmates, friends, and families and collaborate in real time, so everyone
                            stays in the loop.
                        </p>
                    </div>
                </div>
                <div class="footer-info">
                    <div class="footer-about">
                        <div class="footer-aboutt">
                            <div class="about-tour poppins-light">
                                <h5>About Tour</h5>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="logo-social-media">
                                <div class="tweet">
                                    <a class="fa-brands fa-twitter" href="https://x.com/home?lang=en-id"></a>
                                </div>
                                <div class="ig">
                                    <a class="fa-brands fa-instagram" href ="www.instagram.com"></a>
                                </div>
                                <div class="fb">
                                    <a class="fa-brands fa-facebook" href="www.facebook.com"></a>
                                </div>
                                <div class="google">
                                    <a class="fa-brands fa-google" href="https://projek-akhir-ppw-1.vercel.app/"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link">
                        <div class="pages">
                            <a href="#">Blog</a>
                            <a href="#">About</a>
                            <a href="#">Contact</a>
                        </div>
                        <div class="kontak">
                            <div class="email">
                                <div class="email-logo">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <p>muhamadfahrulrazi@mail.ugm.ac.id</p>
                            </div>
                            <div class="telp">
                                <div class="telp-logo">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <p>+62 812 286 604 82</p>
                            </div>
                            <div class="alamat">
                                <div class="alamat-logo">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <p>Jl. Jend. Sudirman No. 1, Kampus UGM, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>Copyright © 2024 A-World. All rights reserved. Designed with love by Fahrul</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <!-- <script src="js/loginCheck.js" defer></script> -->
     <script>
    if (isLoggedIn) {
        console.log("User is logged in");
    } else {
        console.log("User is not logged in");
    }
     </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/6cc41edc19.js" crossorigin="anonymous"></script>
</body>
</html>