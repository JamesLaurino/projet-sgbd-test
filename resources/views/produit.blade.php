<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Produit</title>
</head>
<body>

<div class="container-fluid d-flex justify-content-center bg-dark">
    <h1 class="m-3 text-white">Cars List</h1>
</div>

<div class="container-fluid d-flex justify-content-center mt-5">
        @foreach($produits as $produit)
            <div>
                <p>Nom : {{ $produit['nom'] }}</p>
                <p>Prix : {{ $produit['prix'] }}</p>

                @if ($produit['en_promo'])
                    <p>🔥 Promo !</p>
                @endif
                <p>
                    <a href="/produits/{{$produit['id']}}" class="btn btn-primary">Details</a>
                </p>
            </div>
        @endforeach
</div>

<div class="container-fluid d-flex justify-content-center mt-5">
    @foreach($produits as $produit)
        <div>
            <x-produitcomponent :nom="$produit['nom']" :prix="$produit['prix']"></x-produitcomponent>
            @if ($produit['en_promo'])
                <p>🔥 Promo !</p>
            @endif
            <p>
                <a href="/produits/{{$produit['id']}}" class="btn btn-primary">Details</a>
            </p>
        </div>
    @endforeach
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
