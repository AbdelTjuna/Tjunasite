@extends ('components.master')

@section ('content')


    <div class="container">


        <section class="media">
                <div class="wrap">
                <p class="media__subtitle">De Schrijverscentrale:</p>
                <h1 class="media__title">Literaire wereld <br>
                terug in de 21ste eeuw</h1>
                <p class="media__paragraph">In samenwerking met SLEM ontwerpstudio <br> hebben we de literatuur weer de 21ste eeuw <br> in gelanceerd. Een nieuw digitaal platform.</p>

                <div class="media__link">
                    <a href="#"><img src="{{URL::asset("img/logout.svg")}}" /><p>De Schijverscentrale</p></a>
                </div>

                    <div class="path-1"></div>
                    <img class="media__img--intro" src="{{URL::asset("img/schrijverscentrale-cut.png")}}" />
                    <div class="path-2"></div>
            </div>
        </section>


    <div class="block">

    </div>

        <section class="media">
            <h1 class="media__title">Platform was verouderd <br> en had een nieuwe impuls nodig</h1>
            <p class="media__subtitle media__subtitle--line"><span>Het begon allemaal bij een functioneel ontwerp</span></p>
            <div class="media__paragraph--columns">
                <p class="media__paragraph--column1">Wij werken nauw samen met onze klanten en opdrachtgevers om het beste uit een concept te halen. Wij zijn trots onze partners. We halen daar veel voldoening en plezier uit. Benieuwd naar onze cases?</p>
                <p class="media__paragraph--column2">Wij werken nauw samen met onze klanten en opdrachtgevers om het beste uit een concept te halen. Wij zijn trots onze partners. We halen daar veel voldoening en plezier uit. Benieuwd naar onze cases?</p>
            </div>
        </section>


    <div class="blocks">
        <div class="block-1">
        </div>

        <div class="block-2">
        </div>
    </div>


        <section class="media media--center">
            <div class="media__text--center">
                <h1 class="media__title">Complete case inzien?</h1>
                <p class="media__subtitle media__subtitle--line"><span>Met de whitepaper elk detail beschreven</span></p>
                <p class="media__paragraph">De gratis whitepaper voorziet je van alle informatie over het project. Laat je e-mail achter zodat we de whitepaper naar je kunnen sturen. Download hier onze gratis whitepaper.</p>
            <a class="btn" href="#">Ik wil die whitepaper</a>
            </div>
        </section>

        <section class="media media--left">
            <div>
                <h1 class="media__title">Lancering werd groot <br> gevierd in het Vondelpark</h1>
                <p class="media__subtitle media__subtitle--line">Alleen jammer dat de nieuwe naam al werd <br> verklapt door schrijver Sander Terpstra :)</p>
                <p class="media__paragraph">Het nieuwe platform werd gelanceerd <br> tijdens een groot feest in het Vondelpark. <br> We hebben er hard aan gewerkt en zijn <br> daarom ook zeer trots op het eindresultaat.</p>
            </div>
            <img class="media__img" src="{{URL::asset("img/placeholder-block.png")}}">
        </section>

        <section class="media media--right">
            <img class="media__img" src="{{URL::asset("img/placeholder-block.png")}}" />
            <div>
                <blockquote class="media__quote">
                Het was hard werken maar samen met Tjuna hebben we de literatuur de 21ste eeuw in gelanceerd.
                </blockquote>
                <h2 class="media__title">- Anne Zeegers</h2>
                <p class="media__subtitle">Directrice De Schrijverscentrale</p>
            </div>
        </section>

        <section class="media media--center">
            <div class="media__panels">
                <div class="media__panel media__panel--qurrent">
                    <div class="media__panel-content">
                        <p class="media__subtitle">Volgende case: Qurrent</p>
                        <h2>Kosten besparen <br> door een handige tool</h2>
                        <a href="#"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
        </section>


    </div>

@endsection