<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logomaamoul.png') }}" type="image/png">
    <title>Maamoul</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
          
            <a href="#" class="nav__logo">
                <img src="{{ asset('assets/img/logomaamoul.png') }}" width="120px" style="padding: 15px;" alt="">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link"> @lang('public.home')</a>
                    </li>
                    <li class="nav__item">
                    <a href="#about" class="nav__link">@lang('public.about')</a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link"> @lang('public.services') </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">@lang('public.contact')</a>
                    </li>

                    <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                </ul>
            </div>

          

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
            <!-- Language Toggle -->
<div class="language-switch">
    <i class="bx bx-globe change-language" style="color:#77C2A6"></i>
    <div class="language-options">
        <a href="locale/en" class="nav__language" style="color:#77C2A6" data-lang="en">En</a>
        <span class="language-divider">|</span>
        <a href="locale/ar" class="nav__language" style="color:#77C2A6" data-lang="ar">Ar</a>
    </div>
</div>

            
        </nav>
    </header>

    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <img src="{{ asset('assets/img/WhatsApp Image 2024-01-06 at 4.59.43 PM (1).jpeg') }}"
                    class="svg__img svg__color home__img" alt="">
                <div class="home__data">
                    <h1 class="home__title" style="color: #77C2A6;"> Maamoul</h1>
                    <p class="home__description">@lang('public.slogan')</p>
                    <a href="#" class="button"> @lang('public.getstarted')</a>
                </div>
            </div>
        </section>

            <!--=============== ABOUT ===============-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center"> @lang('public.aboutus') <br></h2>
                        <p class="about__description"> @lang('public.aboutdescription')
                        </p>
                    </div>
                  <img src="/assets/img/WhatsApp Image 2024-01-06 at 4.59.43 PM.jpeg"   class="svg__img svg__color about__img" alt="">
                </div>
            </section>

            <!--=============== SECURITY ===============-->
            <section class="security section container" id="about">
                <div class="security__container grid">
                    <div class="security__data">
                        <h2 class="section__title-center">@lang('public.vision') <br> </h2>
                        <p class="security__description">@lang('public.visiondescription')</p>
                    </div>

               <img src="/assets/img/Delivery app for tracking order with GPS.png" class="svg__img svg__color" alt="">
                </div>
            </section>

             <!--=============== Mission ===============-->
             <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center"> @lang('public.mission') <br></h2>
                        <p class="about__description">
                            @lang('public.missiondesc')
                        </p>
                    </div>
                  <img src="/assets/img/delivery truck back side view.png"   class="svg__img svg__color about__img" alt="">
                </div>
            </section>

              <!--=============== Objective and mission ===============-->
              <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center"> @lang('public.objective') <br></h2>
                        <p class="about__description">
                            <b style="color:#77C2A6">*</b>  @lang('public.objective1') <br> <br>
                            <b style="color:#77C2A6">*</b>  @lang('public.objective2') <br> <br>
                            <b style="color:#77C2A6">*</b>  @lang('public.objective3') <br>
                        </p>
                    </div>
                    <div class="about__data">
                        <h2 class="section__title-center"> @lang('public.value') <br></h2>
                        <p class="about__description">
                            <b>  <span style="color:#77C2A6">@lang('public.valuetitle1')</span></b> @lang('public.value1')  <br> <br>
                            <b>   <span style="color:#77C2A6">@lang('public.valuetitle2')</span></b> @lang('public.value2')  <br> <br>
                            <b>   <span style="color:#77C2A6">@lang('public.valuetitle3')</span></b> @lang('public.value3') <br>
                        </p>
                    </div>
                </div>
            </section>


            <!--=============== SERVICES ===============-->
            <section class="services section container" id="services">
                <h2 class="section__title"> @lang('public.services')</h2>
                <div class="services__container grid">
                    <div class="services__data">
                        <h3 class="services__subtitle"> @lang('public.servicetitle1')</h3>
                            <img src="/assets/img/delivery paper bag.png" class="svg__color services__img" alt="">
                        <p class="services__description">@lang('public.service1')</p>
                        <div>
                          
                        </div>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">@lang('public.servicetitle2')</h3>
                            <img src="/assets/img/Paper geometric shapes for children education.png" class="svg__color services__img" alt="">
                        <p class="services__description">@lang('public.service2')</p>
                        <div>
                          
                        </div>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">@lang('public.servicetitle3')</h3>
                        <img src="/assets/img/Bouquet of tulips in a vase and boxes with gifts.png" class="svg__color services__img" alt="">
                        <p class="services__description">@lang('public.service3')</p>
                        <div>
                           
                        </div>
                    </div>
                </div>
            </section>

            <!--===============  ===============-->
           
            <section class="about section container" id="service">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center"> @lang('public.partner') <br></h2>
                        <p class="about__description">
                            <b style="color:#77C2A6">*</b>  @lang('public.pdesc') <br> <br>

                        </p>

                        <h2 class="section__title-center">@lang('public.client')<br></h2>
                        <p class="about__description">
                            <b style="color:#77C2A6">*</b> @lang('public.cdesc')  <br> <br>
                        </p>
                    </div>
                    <div class="about__data">
                        <h2 class="section__title-center"> @lang('public.team') <br></h2>
                        <p class="about__description">
                            <b style="color:#77C2A6">*</b>  @lang('public.tdesc')                             <br> <br>

                        </p>

                        <h2 class="section__title-center"> @lang('public.wapproach') <br></h2>
                        <p class="about__description">
                            <b style="color:#77C2A6">*</b> @lang('public.wdesc')
                            <br> <br>
                        </p>
                    </div>
                </div>
            </section>
            <!-- WHY US? -->
            <section class="about section container" id="service">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center"> @lang('public.whyus') <br></h2>
                        <p class="about__description" style="">
                            <b style="color:#77C2A6">*</b>  @lang('public.whyus1')
                            <br> <br>
                            <b style="color:#77C2A6">*</b>  @lang('public.whyus2') <br> <br>
                            <b style="color:#77C2A6">*</b>  @lang('public.whyus3') <br> <br>
                            <b style="color:#77C2A6">*</b>  @lang('public.whyus4') <br><br>
                            <b style="color:#77C2A6">*</b>  @lang('public.whyus5') <br><br>
                            <b style="color:#77C2A6">*</b> @lang('public.whyus6') <br><br>
                        </p>

                    </div>
                    <img src="/assets/img/Delivery by moped.png"   class="svg__img svg__color about__img" alt="">
                </div>
            </section>
            <!--=============== CONTACT US ===============-->
           
           <!--=============== CONTACT US ===============-->
           <section class="about section container" id="contact">
            <div class="about__container grid">
                <div class="about__data">
                    <h2 class="section__title-center">@lang('public.contact')</h2>
                    <p class="about__description">@lang('public.context')</p>
                </div>
        
                <!-- Contact Form -->
                <form class="contact-form" method="post" action="{{ route('contact.submit') }}">
                    @csrf
                    <label for="email">@lang('public.email'):</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="subject">@lang('public.subject'):</label>
                    <input type="text" id="subject" name="subject" required>
        
                    <label for="message">@lang('public.message'):</label>
                    <textarea id="message" name="message" required></textarea>
        
                    <button type="submit" style="background-color:#77C2A6">@lang('public.submit')</button>
                </form>
            </div>
        </section>
        
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <h3 class="footer__title">@lang('public.services')</h3>
                <ul class="footer__links">
                    <li><a href="#" class="footer__link"> @lang('public.vision')</a></li>
                    <li><a href="#" class="footer__link">@lang('public.mission')</a></li>
                    <li><a href="#" class="footer__link">@lang('public.partner')</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title"> @lang('public.contact')</h3>
                <ul class="footer__links">
                    <li><a href="mailto:support@maamoul.net" class="footer__link">support@maamoul.net</a></li>
                    <li><a href="tel:+966539661138" class="footer__link">+966 53 966 1138</a></li>
                </ul>
            </div>

            <div class="footer__social">
                <a href="#" class="footer__social-link"><i class='bx bxl-facebook-circle '></i></a>
                <a href="#" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                <a href="#" class="footer__social-link"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; @All right reserved</p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
