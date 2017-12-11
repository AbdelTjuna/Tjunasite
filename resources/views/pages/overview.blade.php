@extends ('components.master')

@section ('content')

    <div class="introduction__container">
        <div class="wrap">
            <h1>Een greep uit <strong>ons werk.</strong> Wij denken mee met <strong>onze klanten</strong> en zijn <strong>pro-actief</strong> in de <strong>oplossingen</strong> die wij aanbieden. </h1>
        </div>
    </div>


    <div class="panel__container">
            <div class="panel__container-panels">
                <div class="panel__container-panels-1">
                    <div class="wrap">
                        <p>De Schrijverscentrale</p>
                        <h2>Literaire wereld <br> terug in de 21ste eeuw</h2>

                        <a href="#"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i></a>

                    </div>
                </div>

                <div class="panel__container-panels-2">
                    <div class="wrap">
                        <p>Qurrent</p>
                        <h2>Kosten besparen <br> door een handige tool</h2>
                        <a href="#"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></a></i>
                    </div>
                </div>

                <div class="panel__container-panels-3">
                    <div class="wrap">
                        <p>De Groei App</p>
                        <h2>Eenvoudig de groei <br> van je kind bijhouden</h2>

                        <a href="#"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
    </div>

    <div class="container">



    <section class="midtext__container">
        <div class="expertise">
            <div class="wrap">
                <h1>Door het vuur <br> voor onze klanten.</h1>
                <p class="expertise-subtitle"><span>Alles voor klant, dag en nacht en 24/7</span></p>
                <p>Wij werken nauw samen met onze klanten en opdrachtgevers om het beste uit een concept te halen. Wij zijn trots onze partners. We halen daar veel voldoening en plezier uit. Benieuwd naar onze cases?</p>
            </div>
        </div>
    </section>


    <section class="media media--col2">
            <div class="media__panels">
                <div class="media__panel media__panel--ziggo">
                    <div class="media__panel-content">
                    <p class="media__subtitle">Ziggo de uitdaging</p>
                    <h2>De uitdaging van <br> elke Ziggo medewerker</h2>
                    <a href="#"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
            </div>

                <div class="media__panels">
                    <div class="media__panel media__panel--ubachs">
                        <div class="media__panel-content">
                    <p class="media__subtitle">Het ei van ubachs</p>
                    <h2>Concept en ideeënplatform <br> voor Wim Ubachs</h2>
                    <a href="#"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i></a>
                </div>
                </div>
                </div>
    </section>


    <div class="idea__container">
        <div class="wrap">
            <h1>Jouw ideeën versterkt door onze expertise</h1>
            <p>Wij werken nauw samen met onze klanten en opdrachtgevers om het beste uit een concept te halen. Wij zijn trots op onze partners. We halen daar veel voldoening en plezier uit. Benieuwd naar onze cases?</p>
        </div>
    </div>

    <section class="media media__articles">
        <article class="media__article">
            <div class="wrap">
                <figure><img class="media__img" src="{{URL::asset("img/hcv.png")}}" /></figure>
                <h1 class="media__title">HCV</h1>
                <p class="media__paragraph">Zelftests en informatie rond het HCV virus. HCV is een virus die <br> een infectie veroorzaakt bij de lever.</p>
                <div class="preview-button">
                    <a href="#"><img src="{{URL::asset("img/logout.svg")}}" />HCV</a>
                </div>
            </div>
        </article>
        
        <article class="media__article">
            <div class="wrap">
                <figure><img class="media__img" src="{{URL::asset("img/olx.png")}}"/></figure>
                <h1 class="media__title">Join OLX!</h1>
                <p class="media__paragraph">Banenplatform voor de marktplaats van Zuid-Amerika. Ze groeien razendsnel <br> en hadden dus behoefte aan een social banenplatform. Dit maakte wij dus!</p>
                <div class="preview-button">
                    <a href="#"><img src="{{URL::asset("img/logout.svg")}}" />Join OLX</a>
                </div>
            </div>
        </article>

        <article class="media__article">
            <div class="wrap">
                <figure><img class="media__img" src="{{URL::asset("img/dnp.png")}}"/></figure>
                <h1 class="media__title">DNP Imagingcomm</h1>
                <p class="media__paragraph">Bekend van onder andere de Japanse Yen print DNP bijna alles. Voor het <br> Europese concern bouwde wij hun multi-language site.</p>
                <div class="preview-button">
                    <a href="#"><img src="{{URL::asset("img/logout.svg")}}" />DNP Imaging</a>
                </div>
            </div>
        </article>

        <article class="media__article">
            <div class="wrap">
                <figure><img class="media__img" src="{{URL::asset("img/annefrank.png")}}"/></figure>
                <h1 class="media__title">Anne Frank in de klas</h1>
                <p class="media__paragraph">In opdracht van TinQwise ontwikkelde <strong>Tjuna</strong> een speciale e-learning tool <br> voor de Anne Frank Stichting.</p>
                <div class="preview-button">
                <a href="#"><img src="{{URL::asset("img/logout.svg")}}" />Anne Frank</a>
                </div>
            </div>
        </article>
    </section>
    </div>







@endsection