@extends('/layouts/layout')
@section('content')
<p>Veuillez passer par ce formulaire pour prendre contact avec nous</p>
<form action="">
    <label for="nom">Votre nom</label>
    <input type="text" name="nom">
    <label for="objet">Objet</label>
    <input type="text" name="objet">
    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>
    <button type="submit">Envoyer</button>
</form>
@endsection