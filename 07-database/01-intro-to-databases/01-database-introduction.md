# Database Introduction

Now we are going to start working with a database. Any serious application will need some kind of database to store their data.

## What Is a Database?

A database is a collection of data. It is a place where you can store data, and then retrieve it later. It is a way to organize data so that it is easy to find and easy to update. A database is a very important part of any application. Without a database, you would have to store all of this data in files, and that would be very difficult to manage. The type of data obviously depends on your application. If you have a blog, you may store blog posts, categories, comments and users. We'll be creating a small job listing website, so we will be storing jobs and users.

## Which Database To Use?

When using PHP, you have quite a few options for databases. The most popular are MySQL, PostgreSQL, and SQLite. We will be using MySQL for this course, but the concepts we will be learning are applicable to all of them. MySQL is what we call a **relational database**. This means that it stores data in **tables**, and the tables can be related to each other. We will be learning about how to create tables, how to insert data into them, and how to retrieve data from them and display it in our application. There are also **non-relational databases** or **NoSQL** databases like MongoDB. These are becoming popular, but they are not used as much as relational databases, especially with PHP. PHP and MySQL have always been a popular combination, and they work very well together.

## PDO

PHP has a built-in extension called **PDO** which stands for **PHP Data Objects**. PDO is a database abstraction layer that allows you to connect to many different types of databases. It also provides a common interface for working with databases. This means that the code you write will be the same no matter which database you are using. This is very useful if you ever need to switch databases. You won't have to rewrite your code. PDO is also object-oriented, which means that it uses objects to represent database connections and queries. This is a very nice way to work with databases, and it is much easier than using the old MySQL extension. The old MySQL extension is deprecated, which means that it is no longer supported. You should not use it in your applications. PDO is the way to go if you're using PHP with a relational database.

## Database Management

There are also tools that we can use to directly access our data outside of our application. MySQL has a command line tool that we can use to connect to our database and run queries. I know some people may find working with a command-line difficult, so there are also graphical interfaces that we can use.

Some examples are:

- [phpMyAdmin](https://www.phpmyadmin.net/)
- [Sequel Pro](https://www.sequelpro.com/)
- [MySQL Workbench](https://www.mysql.com/products/workbench/)
- [Navicat](https://www.navicat.com/en/)
- [HeidiSQL](https://www.heidisql.com/)
- [DBeaver](https://dbeaver.io/)
- [TablePlus](https://tableplus.com/)
- [DataGrip](https://www.jetbrains.com/datagrip/)

Some of these are free and some are not. Some are desktop applications and some are web applications. Some are cross-platform and some are not. Some are very simple and some are very complex. You can choose whichever one you like. I will be using MySQL Workbench in this course, which is free and cross-platform, but you can use whichever one you like. I really like TablePlus, but it is not free and it's only available for Mac, so I won't be using it in this course.

## Development vs Production

When you are developing your application, you will probably be using a local database. This means that the database is running on your computer. When you are ready to deploy your application, you will need to use a production database. This means that the database is running on a server somewhere. You will need to connect to it remotely. Luckily, MySQL is really popular and most hosting companies provide it even with their cheapest shared hosting plans. Just be aware that the database that you use in development will probably be different than the one you use in production. You will need to make sure that your application works with both of them.

## Installing a Local Database

To get up and running on your local machine, you will have to install MySQL. There are so many ways to do this. If you are using a development suite like [XAMPP](https://www.apachefriends.org/index.html) or [MAMP](https://www.mamp.info/en/), then MySQL will already be installed. If you are using a Linux distribution, then you can install MySQL using your package manager and on a Mac, you can install it using [Homebrew](https://brew.sh/). If you are using Windows, then you can download and install MySQL from the [MySQL website](https://dev.mysql.com/downloads/mysql/).

I'm going to include two videos that show you how to install MySQL on Windows and Mac. I'm not going to show you how to install it on Linux because it's different for every distribution. If you are using Linux, then you should know how to install software using your package manager.
