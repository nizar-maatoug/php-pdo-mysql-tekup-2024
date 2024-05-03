# Average Salary Challenge

In this challenge, I want you to create a function that will calculate the average salary of the salaries in the job listings.

In the sandbox file for this section, I added a spot to output the average salary. I also added a comment where you should add your function.

```php
<div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
 <h2 class="text-2xl font-semibold mb-4">Average Salary: <?php echo 'replace with your function call  ?></h2>
</div>
```

Here is the function signature:

```php
function calculateAverageSalary($jobListings) {
    // Your code here
}
```

It will take in the entire `$jobListings` array. You will need to loop through the array and add up all of the salaries. Then you will need to divide that total by the number of salaries. Finally, you will need to return the average salary.

#### Hints

- You can use the `count` function to get the number of items in an array.
- You can either use the `array_sum` function in combination with `array_column` to add up the salaries or loop over the `$jobListings` array using a `foreach` loop and add up the salaries using the `+=` operator.
- Use the `formatSalary` function that we created to format the average salary.

<details>
<summary>Click For Solution 1</summary>

```php
function calculateAverageSalary($jobListings) {
  $totalSalary = 0;
  $count = count($jobListings);

  // Calculate the total salary
  foreach ($jobListings as $job) {
      $totalSalary += $job['salary'];
  }

  // Calculate the average salary
  $averageSalary = ($count > 0) ? $totalSalary / $count : 0;

  return formatSalary($averageSalary);
}
```

#### Explanation

- We initialize a `$totalSalary` variable to 0.
- We get the number of items in the `$jobListings` array using the `count` function and store it in a `$count` variable.
- We loop over the `$jobListings` array using a `foreach` loop.
- We add the salary of each job to the `$totalSalary` variable using the `+=` operator.
- We calculate the average salary by dividing the `$totalSalary` by the `$count` variable.
- We return the average salary using the `formatSalary` function.

</details>

<details>
<summary>Click For Solution 2</summary>

```php
function calculateAverageSalary($jobListings) {
  $salaries = array_column($jobListings, 'salary');
  $totalSalary = array_sum($salaries);
  $count = count($jobListings);

  // Calculate the average salary
  $averageSalary = ($count > 0) ? $totalSalary / $count : 0;

  return formatSalary($averageSalary);
}
```

#### Explanation

- We use the `array_column` function to get an array of all of the salaries.
- We use the `array_sum` function to add up all of the salaries.
- We get the number of items in the `$jobListings` array using the `count` function and store it in a `$count` variable.
- We calculate the average salary by dividing the `$totalSalary` by the `$count` variable.
- We return the average salary using the `formatSalary` function.

</details>
