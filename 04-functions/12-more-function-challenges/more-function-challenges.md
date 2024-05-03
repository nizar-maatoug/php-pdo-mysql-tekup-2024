# Function Challenges

Up to this point in the course, we have looked at variables, arrays, loops, conditionals, and functions. We will now put all of this knowledge together to solve some problems.

## Challenge 1: Fahrenheit to Celsius

Write a function called `fahrenheitToCelsius` that takes a temperature in Fahrenheit as an argument and returns the temperature in Celsius.

There is an easy version and a version that is slightly harder. Try them both.

## Easy

  - Create a named function called `fahrenheitToCelsius` that takes a fahrenheit temperature as an argument. 
  - Return the temperature converted to Celsius.
  - Print to the screen like "68F = 20C. You can use the &deg; entity for the degrees symbol.
  - For extra points, convert to an arrow function

## Harder
  - Create a variable in the global scope to hold the base temp of 32.
  - Create an anonymous function/closure that takes in a temp to convert and uses that base variable from the outer scope to calculate it to celsius
  - Print to screen


### Hints

- The formula for converting Fahrenheit to Celsius is: `C = (F - 32) * 5/9`

<details>
  <summary>Click For Solution</summary>

```php
// Easy
$fahrenheitToCelsius = fn ($f) => ($f - 32) * 5 / 9;

$degToConvert = 68;

echo $degToConvert . '&degF = ' . $fahrenheitToCelsius($degToConvert) . '&degC';

// Harder
$baseTemp = 32;

$fahrenheitToCelsius = function ($f) use ($baseTemp) {
  return ($f - $baseTemp) * 5 / 9;
};

$degToConvert = 68;

echo $degToConvert . '&degF = ' . $fahrenheitToCelsius($degToConvert) . '&degC';
```

</details>

## Challenge 2: Print Names In Uppercase

Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.

### Hints

- You can use the `strtoupper` function to convert a string to uppercase.

<details>
  <summary>Click For Solution</summary>

```php
function printNamesInUppercase($names) {
    foreach ($names as $name) {
        $uppercaseName = strtoupper($name);
        echo $uppercaseName . '<br>';
    }
}

$names = ['Alice', 'Bob', 'Charlie', 'David'];
printNamesInUppercase($names);
```

</details>

## Challenge 3: Find the longest word

Let's do something a bit harder.

1. Create a function called `findLongestWord` that takes a sentence as an argument.
2. The function should return the longest word in the sentence.
3. The output should look like this:

```php
$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord; // should print 'jumped'
```

### Hints

- You will need to use the `explode` function to split the sentence into an array of words.
- You will need to use the `strlen` function to find the length of each word.
- You will need to use a loop to loop through the array of words.
- You will need to use a conditional to check if the current word is longer than the longest word you have found so far.

<details>
  <summary>Click For Solution</summary>

```php
function findLongestWord($sentence) {
  // Split the sentence into an array of words
  $words = explode(' ', $sentence);
  // Initialize the longest word variable
  $longestWord = '';

  // Loop through the words array
  foreach ($words as $word) {
      // Trim the word to remove any whitespace
      $word = trim($word);
      // Check if the current word is longer than the longest word
      if (strlen($word) > strlen($longestWord) || $longestWord === '') {
          $longestWord = $word;
      }
  }

  return $longestWord;
}
```

</details>
