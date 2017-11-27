@extends ('components.master-nofooter')

@section ('content')



    <div class="terms__container">
        <div class="wrap">

        <div class="terms__container-background">
            <figure><img src="{{URL::asset("img/termsbackground.jpg")}}"/></figure>
        </div>

        <div class="terms__container-download">
            <a href="#"> <img src="{{URL::asset("img/download-arrow.svg")}}"/></a>
            <p>Download onze</p>
            <p>Algemene Voorwaarden</p>
        </div>

        <div class="terms__container-legal">
            <p>KvK: 628 15 334</p>
            <p>BTW: 854 968 404 B01</p>
            <p>BANK: NL32ABNA0626803799</p>
        </div>

        <div class="terms__container-social">
            <a href="#"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
    </div>



@endsection
