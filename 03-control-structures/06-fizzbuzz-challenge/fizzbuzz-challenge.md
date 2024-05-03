# Fizzbuzz Challenge

Fizzbuzz is a popular challenge for all types of programming languages. It is a simple challenge that tests your ability to use control structures. You will use loops and conditionals to solve this challenge.

1. Write a program that prints the numbers from 1 to 100.
2. For multiples of 3 print “Fizz” instead of the number
3. For the multiples of 5 print “Buzz”.
4. For numbers which are multiples of both 3 and 5 print “FizzBuzz”.

### Hints

- You can use the modulus operator to check if a number is divisible by another number.
- You can echo `<br>` tag to add a line break after each number.

<details>
  <summary>Click For Solution</summary>

```php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }

    echo '<br>';
}
```

We can shorten it a little by using % 15 instead of % 3 and % 5.

```php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }

    echo '<br>';
}
```

</details>
