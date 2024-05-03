# Variables Challenge

## Instructions

You will have some HTML in the starter code for this lesson. It contains a blog post with a title, author, and body. Your job is to add a few variables to the file and use them to display the blog post. You can use the same text/content or add new content. Define your variables at the top of the file and use them in the HTML below.

- Add a variable called `$title` and set it to the title of the blog post and part of the title of the page.
- Add a variable called `$author` and set it to the author of the blog post.
- Add a variable called `$body` and set it to the body of the blog post.
- Add a variable called `$pageTitle` with the string "Brad's PHP Blog | and the title of the blog post. You can use concatenation or interpolation to combine the two strings. If you use concatenation, be sure to escape the apostrophe/single quote in "Brad's".

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brad's PHP Blog | Introduction to PHP</title>
  </head>
  <body>
    <main>
      <h1>Introduction to PHP</h1>
      <p>By: John Doe</p>
      <p>
        PHP (Hypertext Preprocessor) is a widely used server-side scripting
        language that has revolutionized web development. With its simplicity,
        flexibility, and vast community support, PHP has become the backbone of
        countless dynamic websites and web applications.
      </p>
    </main>
  </body>
</html>
```

## Solution

```php
<?php
  $title = 'Introduction to PHP';
  $author = 'John Doe';
  $body = 'PHP (Hypertext Preprocessor) is a widely used server-side scripting language that has revolutionized web development. With its simplicity, flexibility, and vast community support, PHP has become the backbone of countless dynamic websites and web applications.';
  $pageTitle = 'Brad\'s PHP Blog | ' . $title;
?>
```

```php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title>
  </head>
  <body>
    <main>
      <h1><?php echo $title; ?></h1>
      <p>
        By:
        <?php echo $author; ?>
      </p>
      <p>
        <?php echo $body; ?>
      </p>
    </main>
  </body>
</html>
```

## Shorthand Syntax

When we use HTML templates like this and we are just echoing out a variable, we can use a shorthand syntax. Instead of using `<?php echo $variable; ?>`, we can use `<?= $variable; ?>`. This is a shorthand syntax that does the same thing as `<?php echo $variable; ?>`. It is a little bit shorter and a little bit cleaner. It's important to know that this shorthand syntax is not supported by all servers. It is supported by most servers, but not all. So, if you are working on a project that is going to be deployed to a server that you don't control, you might want to avoid using this shorthand syntax. But, if you are working on a project that you are going to deploy to a server that you do control, then you can use this shorthand syntax.

```php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $pageTitle ?></title>
  </head>
  <body>
    <main>
      <h1><?= $title ?></h1>
      <p>
        By:
        <?= $author ?>
      </p>
      <p>
        <?= $body ?>
      </p>
    </main>
  </body>
</html>
```
