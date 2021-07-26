<?php

namespace Tests\Unit;

use App\Services\FizzBuzzService;
use PHPUnit\Framework\TestCase;

class FizzBuzzServiceTest extends TestCase
{
    /** @test */
    public function it_can_fizzbuzz_without_words(): void
    {
        $fizzBuzzService = app(FizzBuzzService::class);
        $this->assertEquals('1234567891011121314151617181920', $fizzBuzzService->fizzbuzz());
    }

    /** @test */
    public function it_can_fizzbuzz_with_one_word(): void
    {
        $fizzBuzzService = app(FizzBuzzService::class);
        $fizzBuzzService->addWord('Fizz', 3);
        $this->assertEquals(
            '12Fizz45Fizz78Fizz1011Fizz1314Fizz1617Fizz1920',
            $fizzBuzzService->fizzbuzz());
    }

    /** @test */
    public function it_can_fizzbuzz_with_two_words(): void
    {
        $fizzBuzzService = app(FizzBuzzService::class);
        $fizzBuzzService->addWord('Fizz', 3);
        $fizzBuzzService->addWord('Buzz', 5);
        $this->assertEquals(
            '12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19Buzz',
            $fizzBuzzService->fizzbuzz());
    }

    /** @test */
    public function it_can_fizzbuzz_a_custom_amount(): void
    {
        $fizzBuzzService = app(FizzBuzzService::class);
        $fizzBuzzService->addWord('Fizz', 3);
        $fizzBuzzService->addWord('Buzz', 5);
        $fizzBuzzService->setAmount(30);
        $this->assertEquals(
            '12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829FizzBuzz',
            $fizzBuzzService->fizzbuzz());
    }

    /** @test */
    public function it_can_update_an_existing_word(): void
    {
        $fizzBuzzService = app(FizzBuzzService::class);
        $fizzBuzzService->addWord('Fizz', 3);
        $fizzBuzzService->addWord('Fizz', 5);
        $this->assertEquals(
            '1234Fizz6789Fizz11121314Fizz16171819Fizz',
            $fizzBuzzService->fizzbuzz());
    }
}
