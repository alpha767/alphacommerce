@extends('index')

@section('content')
    <br>
    <br>

<?php

foreach ($produits as $row) { ?>
<div id="wrap" style="display: inline-block; background-color: white; margin-left: 300px; width: 600px;">
    <div id="product_layout_1">
        <div class="top">
            <div class="product_images">
                <div class="product_image_1" style="margin-top: 50px; margin-left: 50px; width: 20px;">
                    <img src="<?php echo '/'.$row->pathImage?>" style="width: 200px;"/>
                </div>

            </div>
            <div class="product_info" style="margin-left: 350px; margin-top: -200px;">
                <h1><?php echo $row->nom; ?></h1>
                <div class="price">

                    <h3 class="sale_price"><?php echo number_format($row->prix,2); ?> € <br> <?php echo $row->couleur; ?></h3>
                </div>

                <div class="product_description">
                <p><?php echo $row->description;?></p>
                </div>

                    <div class="buying">

                                <a href="/panier/?id=<?php echo $row->id?>" style="text-decoration:none"><p  style="color: black;">Ajouter au panier</p></a>
                            </div>

                        </div>

                </div>

                </div>
        </div>
    </div>
</div>
                <?php
                }

                ?>
    <br>
    <br>
    <br>
    <br>

@endsection
