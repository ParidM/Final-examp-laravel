<?php

namespace Tests\Feature\Http\Controllers;

use App\CategoryModel;
use App\User;
use App\Products;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use WithFaker;
    /** 
    * @test
    */
    public function it_stores_data()
    {
        //TODO: code inside here --Created by Kiddy
         $products = Factory(Products::class)->createproducts();

         $response = $this->actingAs($products)->post(route('createproducts'),
         [
            'name' => $this->faker->name(),
            'price'=> $this->faker->randomNumber(),
            'image'=> $this->faker->words(),
            'aktive' => $this->faker->randomNumber(),
            'descripsi' => $this->faker->words(),

         ]);

         $response->assertStatus(200);
         $response->assertRedirect(route('createproducts'));

    }



    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/barang');

        $response->assertStatus(200);
    }


}
