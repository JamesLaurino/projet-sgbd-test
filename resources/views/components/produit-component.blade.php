@props(['nom', 'prix'])

<div>
    <h1>Display with blade</h1>
    <p>Nom : {{ $nom }}</p>
    <p>Prix : {{$prix}}</p>
    <p>{{$slot}}</p>
</div>
