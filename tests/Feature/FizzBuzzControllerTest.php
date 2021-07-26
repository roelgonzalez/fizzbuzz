<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FizzBuzzControllerTest extends TestCase
{
    /** @test */
    public function it_can_fizzbuzz()
    {
        $response = $this->post('api/fizzbuzz', [
            'fizz-word' => 'Fizzy',
            'buzz-word' => 'Buzzy',
            'amount' => 20,
        ]);
        $response->assertJson([
            "data" => "12Fizzy4BuzzyFizzy78FizzyBuzzy11Fizzy1314FizzyBuzzy1617Fizzy19Buzzy"
        ]);
    }
}
