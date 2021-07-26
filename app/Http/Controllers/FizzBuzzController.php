<?php

namespace App\Http\Controllers;

use App\Services\FizzBuzzService;
use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, FizzBuzzService $fizzBuzzService)
    {
        $fizzWord = $request->input('fizz-word', 'Fizz');
        $buzzWord = $request->input('buzz-word', 'Buzz');
        $amount = (int) $request->input('amount', 100);
        $fizzBuzzed = $fizzBuzzService->setAmount($amount)
                        ->addWord($fizzWord, 3)
                        ->addWord($buzzWord, 5)
                        ->fizzbuzz();

        return response()->json([
            'data' => $fizzBuzzed,
        ]);
    }
}
