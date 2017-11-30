@extends ('components.master-noend')

@section ('content')


    <div class="container">


        <section class="article">
                <div class="wrap">
                <p class="article__subtitle">De Schrijverscentrale:</p>
                <h1 class="article__title">Literaire wereld <br>
                terug in de 21ste eeuw</h1>
                <p class="article__paragraph">In samenwerking met SLEM ontwerpstudio <br> hebben we de literatuur weer de 21ste eeuw <br> in gelanceerd. Een nieuw digitaal platform.</p>

                <div class="article__link">
                    <a href="#"><img src="{{URL::asset("img/logout.svg")}}" /><p>De Schijverscentrale</p></a>
                </div>

                    <div class="path-1"></div>
                    <img class="article__img--intro" src="{{URL::asset("img/schrijverscentrale-cut.png")}}" />
                    <div class="path-2"></div>
            </div>
        </section>


    <div class="block">

    </div>

        <section class="article">
            <h1 class="article__title">Platform was verouderd <br> en had een nieuwe impuls nodig</h1>
            <p class="article__subtitle article__subtitle--line"><span>Het begon allemaal bij een functioneel ontwerp</span></p>
            <div class="article__paragraph--columns">
                <p class="article__paragraph--column1">Wij werken nauw samen met onze klanten en opdrachtgevers om het beste uit een concept te halen. Wij zijn trots onze partners. We halen daar veel voldoening en plezier uit. Benieuwd naar onze cases?</p>
                <p class="article__paragraph--column2">Wij werken nauw samen met onze klanten en opdrachtgevers om het beste uit een concept te halen. Wij zijn trots onze partners. We halen daar veel voldoening en plezier uit. Benieuwd naar onze cases?</p>
            </div>
        </section>


    <div class="blocks">
        <div class="block-1">
        </div>

        <div class="block-2">
        </div>
    </div>


        <section class="article article--center">
                <h1 class="article__title">Complete case inzien?</h1>
                <p class="article__subtitle article__subtitle--line"><span>Met de whitepaper elk detail beschreven</span></p>
                <p class="article__paragraph">De gratis whitepaper voorziet je van alle informatie over het project. Laat je e-mail achter zodat we de whitepaper naar je kunnen sturen. Download hier onze gratis whitepaper.</p>
            <a class="btn" href="#">Ik wil die whitepaper</a>
        </section>

        <section class="article">
            <h1 class="article__title">Lancering werd groot <br> gevierd in het Vondelpark</h1>
            <p class="article__subtitle article__subtitle--line">Alleen jammer dat de nieuwe naam al werd <br> verklapt door schrijver Sander Terpstra :)</p>
            <p class="article__paragraph">Het nieuwe platform werd gelanceerd <br> tijdens een groot feest in het Vondelpark. <br> We hebben er hard aan gewerkt en zijn <br> daarom ook zeer trots op het eindresultaat.</p>
            <img class="article__img--right" src="{{URL::asset("img/placeholder-block.png")}}">
        </section>



    </div>

@endsection