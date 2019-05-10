<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartTest extends TestCase {

    function works()
    {
        $this->withExceptionHandling();

        $response = $this->get('/cart');


        $response->assertSuccessFul()
            -assertViewHas('productWithQuantites', function($productWithQuantites) {
                return $productWithQuantites->isEmpty();
});
}


}
