<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/app.css">
</head>


<body>
<header class="header">
    <div class="wrap">
        <div class="header__main">
            <div class="header__main-logo">
                <a href="#"><figure><img src="{{URL::asset("img/tjuna-logo.svg")}}"></figure></a>
            </div>


            <div class="header__main__menu">
                <a href="javascript:void(0)" class="hamburger">
                <div class="header__main__menu-icons">
                        <div class="hamburger__icon">
                            <span class="menu-icon-1"></span>
                            <span class="menu-icon-2"></span>
                            <span class="menu-icon-3"></span>
                        </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</header>


<div class="fat-nav">
    <div class="fat-nav__wrapper">
        <ul>
            <li><a href="#">Menu item</a></li>
            <li><a href="#">Menu item</a></li>
            <li><a href="#">Menu item</a></li>
            <li><a href="#">Menu item</a></li>
        </ul>
    </div>
</div>

<div class="introduction__container">
    <div class="wrap">
        <h1>Wij zijn <strong>Tjuna</strong>, een <strong>team</strong> van
            <strong>professionals</strong> die <strong>digitale oplossingen</strong>
            bouwen voor mensen en <strong>bedrijven.</strong></h1>
    </div>
</div>

<div class="case__container">
    <div class="path">
    </div>
    <div class="slider-pro" id="my-slider">
        <div class="sp-thumbnails">

            <div class="sp-thumbnail">
                <div class="number-background"><p class="number1-background"></p></div>
                <p class="case">case</p>
                <h2>De Schrijverscentrale</h2>
                <p>Auteursplatform voor het boeken van auteurs en het inzien van profielen.</p>

                <a href="" class="btn">
                    <p>meer →</p>
                </a>
            </div>

            <div class="sp-thumbnail">
                <div class="number-background"><p class="number2-background"></p></div>
                <p class="case">case</p>
                <h2>Volkswagen</h2>
                <p>Op zich zijn het wel leuke auto's. Vind de Polo wel cool.</p>

                <a href="" class="btn">
                    <p>meer →</p>
                </a>

            </div>

            <div class="sp-thumbnail">
                <div class="number-background"><p class="number3-background"></p></div>
                <p class="case">case</p>
                <h2>Ziggo</h2>
                <p>Ben zelf meer een KPN fan, ze zijn namelijk wat stabieler. </p>

                <a href="#" class="btn">
                    <p>meer →</p>
                </a>

            </div>
        </div>

        <div class="sp-slides">
            <div class="sp-slide">
                <figure><img class="sp-image" src="{{URL::asset("img/placeholder3.jpg")}}"/></figure>
            </div>

            <div class="sp-slide">
                <figure><img class="sp-image" src="{{URL::asset("img/placeholder1.jpg")}}"/></figure>
            </div>

            <div class="sp-slide">
                <figure><img class="sp-image" src="{{URL::asset("img/placeholder2.jpg")}}"/></figure>
            </div>
        </div>
    </div>
</div>


<div class="projects__container">
    <div class="wrap">
            <div class="expertise">
                <h1>Wat doen we?</h1>
                <p>Wij maken custom web applicaties gebaseerd op jouw wensen en behoeftes. Wij doen dit op een vaardige manier met de techniek die bij het project past.</p>
                <p>Benieuwd naar onze expertises?</p>
                <a href="" class="btn">expertises →</a>
            </div>

        <div data-accordion-group class="text-selection">
            <div class="accordion" data-accordion>
                <div data-control><a>Techniek +</a></div>
                <div data-content >
                    <div class="accordion-data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel nibh in dolor blandit efficitur. Suspendisse vehicula risus quis lectus cursus cursus. Proin quis dui in metus maximus sodales eget interdum purus. Sed non hendrerit metus. Ut et massa lobortis, ultrices ipsum quis, vestibulum augue.</div>
                </div>
            </div>

            <div class="accordion" data-accordion>
                <div data-control><a>Design +</a></div>
                <div data-content>
                    <div class="accordion-data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel nibh in dolor blandit efficitur. Suspendisse vehicula risus quis lectus cursus cursus. Proin quis dui in metus maximus sodales eget interdum purus. Sed non hendrerit metus. Ut et massa lobortis, ultrices ipsum quis, vestibulum augue.</div>
                </div>
            </div>

            <div class="accordion" data-accordion>
                <div data-control><a>Consultancy +</a></div>
                <div data-content>
                    <div class="accordion-data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel nibh in dolor blandit efficitur. Suspendisse vehicula risus quis lectus cursus cursus. Proin quis dui in metus maximus sodales eget interdum purus. Sed non hendrerit metus. Ut et massa lobortis, ultrices ipsum quis, vestibulum augue.</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="client__container">
    <div class="wrap">
        <div class="expertise">
            <h1>Onze trouwe klanten, groot en klein.</h1>
            <p class="expertise-subtitle"><span>Al jaren staan we klaar voor klanten</span></p>
            <p>Wij werken  nauw samen met onze klanten en opdrachtgevers om het beste uit een concept te halen. Wij zijn trots op onze partners. We halen daar veel voldoening en plezier uit.<br> Benieuwd naar onze cases?</p>
        <a class="btn" href="">cases →</a>
    </div>

        <div class="client-logos">
            <figure><img class="top-row" src="{{URL::asset("img/sass.svg")}}"/></figure>
            <figure><img class="top-row" src="{{URL::asset("img/laravel.svg")}}"/></figure>
            <figure><img class="top-row" src="{{URL::asset("img/volkswagen.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/ziggo.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/sass.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/laravel.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/volkswagen.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/ziggo.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/sass.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/laravel.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/volkswagen.svg")}}"/></figure>
            <figure><img src="{{URL::asset("img/ziggo.svg")}}" /></figure>
        </div>
</div>
</div>


@include('components.end')




<footer class="footer">

    <div class="wrap">

        <div class="footer__logo">
            <a href="#"><figure><img src="{{URL::asset("img/tjuna-logo.svg")}}"></figure></a>
        </div>

        <div class="footer__content">

            <div class="footer__content-main">
                <p>Tappersweg 12 W</p>
                <p>></p>
                <p>2031 ET, Haarlem</p>
                <p>></p>
                <p>023 - 525 91 02</p>
                <p>></p>
                <p>info@tjuna.com</p>
            </div>

            <div class="footer__content-legal">
                <p>2017 &copy; Tjuna. All rights reserved.</p>
                <a href="/terms">KVK / BTW / Algemene voorwaarden</a>
            </div>

            <div class="footer__content-social">
                <a href="#"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

</footer>


<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="https://use.fontawesome.com/e0321a2a4b.js"></script>
<script src="js/jquery.sliderPro.min.js"></script>
<script src="js/jquery.fatNav.js"></script>
<script src="js/init.js"></script>
</body>




</html>
