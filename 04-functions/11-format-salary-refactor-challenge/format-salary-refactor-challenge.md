# Format Salary Refactor

In this lesson, I want you to do a couple things in the job listings page that we have been working with.

1. Refactor the `formatSalary` function to an arrow function
2. Since this is no longer a named function, it will be a variable. You need to change the name in the two places that it is called.
3. One of the calls is in another function. Since it's a variable, it will no longer be available in the scope of the function it's called in. Think **callback**.

<details>
  <summary>Click For Solution</summary>

Here is the function that we have already created:

```php
function formatSalary($salary) {
  return '$' . number_format($salary, 2);
}
```

This is a good candidate for an arrow function because it is a simple function that can be written on one line.

Let's refactor it to use an arrow function:

```php
$formatSalary = fn($salary) => '$' . number_format($salary, 2);
```

We have a couple places to implement this. Let's go down into the HTML output and replace the function call with the arrow function. All you have to do is add the dollar sign:

```php
<li class="mb-2">
  <strong>Salary:</strong> <?php echo $formatSalary($job['salary']); ?>
</li>
```

The next place is within the `calculateAverageSalary` function. There is a little more to this since we are no longer dealing with a function, but a variable. We just need to pass in `$formatSalary` as a callback to the second argument to `calculateAverageSalary`:

```php
function calculateAverageSalary($jobListings, $formatSalary) {
  // ... rest of function ...
  return $formatSalary($averageSalary);
}
```

Now down in the output where we use the `calculateAverageSalary` function, we need to pass in the `$formatSalary` variable as the second argument:

```php
<div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
  <h2 class="text-2xl font-semibold mb-4">Average Salary: <?php echo calculateAverageSalary($jobListings, $formatSalary)  ?></h2>
</div>
```

There we go! It should work the same as before, but now we are using a lambda function instead of a named function. This of course is not needed, but I wanted to give you a good example of how to use lambda and arrow functions.

</details>
