# FizzBuzz

- You can add multiple words
- You can change the interval of the fizzbuzzing per words
- You can update the word
- You can determine how far you want to go with the fizzbuzzing

## Getting started
- `git clone` this repository
- `composer install`
- make sure you point a domain such as "fizzbuzz.test" to the project (or an IP)
- make a POST request to `http://fizzbuzz.test/api/fizzbuzz`
- You can use the following post parameters. `fizz-word`, `buzz-word` and `amount`

## Enhancements possibilities
- Ability to actually use flexible fizzbuzziness in invokable controller
- Ability to prioritize a word if they both match criteria
- Ability to make the addWord(..) function to accept arbitrary data instead of hardset word and interval.
- Represent each FizzBuzzWord as an own class instance that can self-determine calculations.
- Represent the json string as a more usable object instead of string
- Endpoint testing

## Files
- FizzBuzzController.php in app/Http/Controllers
- FizzBuzzService.php in app/Services
- FizzBuzzControllerTest.php in tests/Feature
- FizzBuzzServiceTest.php in tests/Unit
