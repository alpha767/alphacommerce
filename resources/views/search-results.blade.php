
@extends('index')

@section('content')
    <br>
    <?php
    if ($counter == 0){
        echo "<p style='color:red;font-weight:bold; text-align: center;'> $counter résultat(s) a été trouvé(s) pour " .request()->input('query'). "</p><br><br><br><br><br><br><br><br><br><br><br><br>";

    }else{
        echo  "<p style='color:green;font-weight:bold; text-align: center;'> $counter résultat(s) a été trouvé(s) pour " .request()->input('query')."</p>";

    }
    ?>
    @foreach ($products as $product)

    <div class="card-group" style="margin: 10px; padding: 10px; width: 400px; display: inline-block;">
        <div class="card" style="margin: 10px;">
            <div class="game-pic">
                <img src="<?php echo $product->pathImage?>" style="border-radius: 5px; margin: 5px 5px;">
                <div class="game-card-overlay">
                    <div class="overlay-button" id="overlay-double">
                        <a href="panier?id=<?php echo $product->id?>" style="text-decoration:none"><p id="add">Ajouter au panier</p></a>
                    </div>
                    <div class="overlay-button" id="overlay-double">
                        <a href="ficher-produit?id=<?php echo $product->id?>" style="text-decoration:none">
                            <p>Fiche produit</p></a></div>
                </div>
            </div>


            <div class="card-body">
                <h5 class="card-title"><?php echo $product->nom; ?></h5>
                <p class="card-text"><span style="color: red"><?php echo number_format($product->prix,2); ?> $ <?php echo $product->couleur; ?></p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
            </div>
        </div>
    </div>
@endforeach

@endsection





