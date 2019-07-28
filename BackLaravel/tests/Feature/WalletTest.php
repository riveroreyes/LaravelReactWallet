<?php

namespace Tests\Unit;

use App\Transfer;
use App\Wallet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class WalletTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_wallet()
    {
        $wallet = factory(Wallet::class)->create();
        $transfer = factory(Transfer::class,3)->create([
            'wallet_id' => $wallet->id
        ]);

        $response = $this->json('GET','/api/wallet');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'id','money','transfers' => [
                         "*" => [
                             'id','amount','description','wallet_id'
                         ]
                     ]
                 ]);

        $this->assertCount(3, $response->json()['transfers']);

    }
}
