<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="css/styles.css">

    <title>VITLIFE</title>
</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <img src="assets/img/LOGO_1.png" alt="" class="nav__logo1">
            <a href="#" class="nav__logo">Vitalife</a>

            <input class="nav__search" type="search" id="search-bar" placeholder="Search here...">
            <button type="submit">Search</button>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#" class="nav__link active-link">Login/Sign-In</a></li>

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__data">
                    <h3 class="home__subtitle">Skip the travel!. Take Online</h3>
                    <h2 class="home__title">WELCOME VITALIFE</h2>
                    <h4>
                        We are the solution for travelling in a healthy condition and we provide health specialists.
                    </h4>
                    <a href="#" class="button">Consult Now</a>
                </div>
                <img src="assets/img/LOGO_1.png" alt="" class="home__img">
            </div>
        </section>

        <!--========== ABOUT ==========-->
        <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">About us</span>
                    <h2 class="section-title about__initial">We cook the best <br> tasty food</h2>
                    <p class="about__description">We cook the best food in the entire city, with excellent customer
                        service, the best meals and at the best price, visit us.</p>
                    <a href="#" class="button">Explore history</a>
                </div>

                <img src="assets/img/about.jpg" alt="" class="about__img">
            </div>
        </section>

        <!--========== SERVICES ==========-->
        <section class="services section bd-container" id="services">
            <span class="section-subtitle">Offering</span>
            <h2 class="section-title">Our amazing services</h2>

            <div class="services__container  bd-grid">
                <div class="services__content">
                    <svg class="services__img" xmlns="http://www.w3.org/2000/svg">
                    </svg>
                    <h3 class="services__title">Excellent food</h3>
                    <p class="services__description">We offer our clients excellent quality services for many years,
                        with the best and delicious food in the city.</p>
                </div>

                <div class="services__content">
                    <svg class="services__img" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <clipPath id="clip0">
                                <rect width="64" height="64" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="services__title">Fast food</h3>
                    <p class="services__description">We offer our clients excellent quality services for many years,
                        with the best and delicious food in the city.</p>
                </div>

                <div class="services__content">
                    <svg class="services__img" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <clipPath id="clip0">
                                <rect width="64" height="64" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="services__title">Delivery</h3>
                    <p class="services__description">We offer our clients excellent quality services for many years,
                        with the best and delicious food in the city.</p>
                </div>
            </div>
        </section>

        <!--========== MENU ==========-->
        <section class="menu section bd-container" id="menu">
            <span class="section-subtitle">Special</span>
            <h2 class="section-title">Menu of the week</h2>

            <div class="menu__container bd-grid">
                <div class="menu__content">
                    <img src="assets/img/plate1.png" alt="" class="menu__img">
                    <h3 class="menu__name">Barbecue salad</h3>
                    <span class="menu__detail">Delicious dish</span>
                    <span class="menu__preci">$22.00</span>
                    <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="menu__content">
                    <img src="assets/img/plate2.png" alt="" class="menu__img">
                    <h3 class="menu__name">Salad with fish</h3>
                    <span class="menu__detail">Delicious dish</span>
                    <span class="menu__preci">$12.00</span>
                    <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="menu__content">
                    <img src="assets/img/plate3.png" alt="" class="menu__img">
                    <h3 class="menu__name">Spinach salad</h3>
                    <span class="menu__detail">Delicious dish</span>
                    <span class="menu__preci">$9.50</span>
                    <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                </div>
            </div>
        </section>

        <!--===== APP =======-->
        <section class="app section bd-container">
            <div class="app__container bd-grid">
                <div class="app__data">
                    <span class="section-subtitle app__initial">App</span>
                    <h2 class="section-title app__initial">App is aviable</h2>
                    <p class="app__description">Find our application and download it, you can make reservations, food
                        orders, see your deliveries on the way and much more.</p>
                    <div class="app__stores">
                        <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                        <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                    </div>
                </div>

                <img src="assets/img/movil-app.png" alt="" class="app__img">
            </div>
        </section>

        <!--========== CONTACT US ==========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Let's talk</span>
                    <h2 class="section-title contact__initial">Contact us</h2>
                    <p class="contact__description">If you want to reserve a table in our restaurant, contact us and we
                        will attend you quickly, with our 24/7 chat service.</p>
                </div>

                <div class="contact__button">
                    <a href="#" class="button">Contact us now</a>
                </div>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Tasty Food</a>
                <span class="footer__description">Restaurant</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a href="#" class="footer__link">Delivery</a></li>
                    <li><a href="#" class="footer__link">Pricing</a></li>
                    <li><a href="#" class="footer__link">Fast food</a></li>
                    <li><a href="#" class="footer__link">Reserve your spot</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#" class="footer__link">Event</a></li>
                    <li><a href="#" class="footer__link">Contact us</a></li>
                    <li><a href="#" class="footer__link">Privacy policy</a></li>
                    <li><a href="#" class="footer__link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Adress</h3>
                <ul>
                    <li>Lima - Peru</li>
                    <li>Jr Union #999</li>
                    <li>999 - 888 - 777</li>
                    <li>tastyfood@email.com</li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; 2020 Bedimcode. All right reserved</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="js/main.js"></script>
</body>

</html>