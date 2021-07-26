<?php

namespace App\Services;

class FizzBuzzService
{
    private $words;
    private $amount;

    public function __construct()
    {
        $this->words = [];
        $this->amount = 20;
    }

    public function addWord(string $word, int $interval)
    {
        if (key_exists($word, $this->words)) {
            $this->words[$word] = $interval;

            return $this;
        }

        $this->words[$word] = $interval;

        return $this;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function fizzbuzz(): string
    {
        $fizzbuzz = '';

        for($i = 1; $i <= $this->amount; $i++) {
            $fizzbuzzedThisInterval = false;
            foreach($this->words as $word => $interval) {
                if ($i % $interval === 0) {
                    $fizzbuzz .= $word;
                    $fizzbuzzedThisInterval = true;
                }
            }

            if (!$fizzbuzzedThisInterval) {
                $fizzbuzz .= $i;
            }
        }

        return $fizzbuzz;
    }
}
