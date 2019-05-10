
@extends('index')

@section('content')
<?php

    global $total;
if (empty(!$product)) {
foreach ($product as $produit) {

    $prodentry = DB::select("SELECT * FROM produit WHERE " . $produit->produit_id . " = id");

    foreach ($prodentry as $prod) {
        $total = ($total + $prod->prix);
        echo "<div class=\"shoppingline\">
        <div class='card-group' style='margin: 10px;padding: 10px; width: 700px; margin-left: 350px;'>
  <div class='card' style='margin: 10px;'>
    <div class='game-pic'>
        <div class=\"lineitem\" '> <img style=\"width:310px;height:250px; display: inline-block;\" src=\"/" . $prod->pathImage . "\"></div>
        <div class='#' style='margin-left: 400px; margin-top: -180px; margin-bottom: 140px; height:150px;  font-size: 25px;'>
        <p class=\"lineitem\">" . $prod->nom . "</p>
        <p class=\"lineitem\">" . $prod->couleur . "</p>
        <p class=\"lineitem\">" . $prod->description . "</p>
        <p class=\"lineitem\"> " . $prod->prix . " € TTC</p>
        <a class=\"lineitem\" href=\"/produitdel/" . $produit->id . "\" style='color: red; border-radius: 5px; text-decoration:none'> Suprimer </a></div>

        </div>
        </div>
        </div>";
    }
}
    echo "<div class='card-group' style='width: 350px; padding: 30px; color: black; background-color: white;  margin-left: 685px;'> <h1> Prix Total : $total €</h1></div><br><br>";


} else {
    echo" <br> <br><div class='card-group' style='width: 450px; padding: 10px; border-radius: 10px;
color: black; background-color: white;  margin-left: 485px;'>
<h2 style='margin-left: 55px; margin-top: 20px;'> Votre panier est vide !</h2>
<br>
<br>

        <a href='/' style='text-decoration: none;'><p style=' color: black; margin-left: 250px; margin-top: 50px;'>Contunier vos Achat</p></a>



<br> <br><br></div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<img src='/img/grumpy.png' alt='' style='margin-left: 350px;margin-bottom: 33px;'>";


}




?>
<div class="#" style="margin-left: 915px; margin-top: -65px;">
<form action="{{ url('home') }}" method="POST">
    <script src="https://js.stripe.com/v3/"></script>
    <script
        var stripe = Stripe('pk_test_oyi8gOloTgRdjUGNcdxOYGsl00fQfR0NYy');
        var elements = stripe.elements();
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_oyi8gOloTgRdjUGNcdxOYGsl00fQfR0NYy"
        data-amount="{{$total * 100}}"
        data-name="Demo Site"
        data-description="Paiment"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="eur">
    </script>
</form>
</div>
@endsection

