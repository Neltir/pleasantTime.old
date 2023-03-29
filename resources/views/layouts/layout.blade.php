<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Référencement -->
    <meta name="description" content="Créez un groupe avec vos amis, et swippez pour trouver une activités!">
    <meta name="keyword" content="activité, amis, groupe, idées , occupation, jeux, potes">
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <title>Pleasant Time</title>
</head>
<body>
    <header>
    <!-- Navbar -->
    <nav id="navbarTop">
        <div id="navbarTitle">
            <a href="/"><h1>Pleasant Time</h1></a>
        </div>
        <div id="navbarTopRight">
            <div id="navbarTopRightInner">
                <a href="/connexion">Se connecter</a>
                <img src="{{ asset('img/profil.png') }}" alt="icone profil">
            </div>
        </div>
    </nav>
    
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    <!-- Mentions légales, cookies et contact -->
        <nav id="navbarBot">
            <ul>
                <li><a href="/mentions">Mentions légales</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>