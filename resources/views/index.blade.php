@extends('/layouts/layout')
@section('content')
    <div id="firstBloc">
        <div>
            <div id="blocPresentation">
                <h2>Pleasant Time <br> - <br> Activités entre amis</h2>
                <ul>
                    <li>+ Trouvez de nouvelles idées pour vous amuser</li>
                    <li>+ Partagez de bons moments avec vos amis</li>
                </ul>
                <a href="#secondBloc">En savoir plus...</a>
            </div>
        </div>
        <div>
            <img src="{{ asset('img/presentation.png') }}" alt="fun presentation">
        </div>
    </div>
    <div id="circle2"></div>
    <div id="secondBloc">
        <div>
            <img src="{{ asset('img/group.png') }}" alt="icone groupe amis">
            <p>Créez un groupe</p>
        </div>
        <div>
            <img src="{{ asset('img/swipe.png') }}" alt="icone swipe">
            <p>Commencez à swipe</p>
        </div>
        <div>
            <img src="{{ asset('img/choose.png') }}" alt="icone liste activités">
            <p>Choisissez une activité</p>
        </div>
        <div>
            <img src="{{ asset('img/planning.png') }}" alt="icone planning">
            <p>Planifiez une rencontre</p>
        </div>
    </div>
@endsection