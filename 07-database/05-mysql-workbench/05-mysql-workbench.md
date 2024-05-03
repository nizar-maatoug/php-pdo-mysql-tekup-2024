# Database Setup in MySQL Workbench

There are a lot of different ways to create and manage your database. You can use the command line, web-based tools like PHPMyAdmin and desktop tools like MySQL Workbench. There are also premium tools like TablePlus. It is up to you on how you want to manage your database. For this course, we will be using MySQL Workbench because it is cross platform and free.

## Download MySQL Workbench

You can download MySQL Workbench from the [MySQL website](https://dev.mysql.com/downloads/workbench/). You will need to create an account to download the software. Once you have downloaded the software, install it on your comp`uter.

Once you have installed MySQL Workbench, open the application. You will be presented with a screen that looks like this:

<img src="./assets/images/mysqlwb-1.png" width="500" />

## Create a Connection

The first thing we will do is create a connection to our database. Click the `+` icon next to "MySQL Connections" to create a new connection.

Give the connection a name. I will call mine `local`. The username will be `root` and the password will be whatever you set it to when you installed MySQL. By default, there usually is no password so try leaving it blank, if you did not set a password. Click "Test Connection" to make sure everything is working. If it is, click "OK" to save the connection. You should get a success message. Now click "OK" to close the connection window.

Now you can select your connection from the list and click "Connect" to connect to your database. You should see a screen that looks like this:

<img src="./assets/images/mysqlwb-2.png" width="500" />

## Create a Database/Schema

Now that we have a connection to our database, we can create a database. Click the `+` icon next to "SCHEMAS" to create a new database. Give the database a name. I will call mine `blog`. Click "Apply" to create the database. You should see a success message. Now click "Apply" again and then click "Finish".

## Create Table & Fields/Columns

You should see your new database in the list of schemas. Click on it to select it and there will be a dropdown with the options 'Tables', 'Views', 'Stored Procedures' and 'Functions'. We will be using the 'Tables' option to create our tables. Right click on 'Tables' and select 'Create Table...'.

Let's call this table `posts` Then click in the box where the columns are and create your first column, which will be called `id`. For the datatype, select `INT(11)`. This is an integer with a max length of 11.

Make sure that `pk` is checked. This will make this column the primary key. This means that this column will be unique and will be used to identify each row in the table. `nn` should also be checked, which means that it can not be `null`. Also check the `ai` option, which means that this column will auto increment. This means that each time a new row is added to the table, this column will automatically be incremented by 1. This will ensure that each row has a unique id.

Click in the box under the `id` column and create a new column called `title`. For the datatype, select `VARCHAR(255)`. This is a string with a max length of 255 characters. Make sure that `nn` is checked and `ai` is NOT checked.

Click in the box under the `title` column and create a new column called `body`. For the datatype, select `LONGTEXT`. You don't need to set a max length for this column. You don't need to check any boxes.

Add one more field called `created_at` and give it a datatype of `TIMESTAMP`. When you select it, it will have parentheses. Remove the parentheses or you will get an error. Now, in the column named `Default/Expression`, enter `CURRENT_TIMESTAMP`. This will set the default value of this column to the current timestamp. This means that if we don't specify a value for this column, it will automatically be set to the current timestamp.

IMPORTANT: Click 'apply' to save the columns. It will show you the query that was used to create the column. It will look like this:

```sql
CREATE TABLE `blog`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `body` LONGTEXT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));
```

We could have just written this query ourselves, but it is easier to use the GUI.

Click 'apply' again to save the table. You should see a success message. Click 'apply' again and then click 'finish'.

## Adding Data

Now that we have our table, we can add some data. Click on the `posts` table and then right click and select `Select rows - Limit 1000`. This will open a new tab with a query that will select all of the rows from the `posts` table.

Click on the `Form Editor` option on the right. Here you can add data to the table. Leave the `id` field blank. This will be auto incremented. Enter a title and body and click 'Apply'. You should see a success message. Click 'Apply' again and then click 'Finish'.

Now if you click the little lightning bolt icon, it will run the query and you should see the row that you just added. Add another post by clicking the little blue arrow in the menu bar right above the form editor. This will add a new row to the form editor. Add a title and body and click 'Apply'. You can add a few more posts if you want.

## Users & Privileges

Right now, we are using the `root` user to connect to our database without a password. Which is fine for development, but you never want to do this in production, so I will show you how to create a new user and set a password.

Go to the top menu and select `Server->Users and Privileges`. Click on the `Add Account` button. Give the user a name. I will call mine `brad`. For the Authentication Type, select `Standard`. For the password, enter a password.

Click on the `Administrative Roles` tab. Check the `DBA` option. This will give the user full access to the database. Click on the `Schema Privileges` tab. Select the `blog` schema and check the `ALL` option. This will give the user full access to the `blog` schema. Click on the `Apply` button to save the user. You should see a success message. Click on the `Apply` button again and then click on the `Finish` button. Now you should be able to connect with that user from your application later on.

We have setup our database, schema, tables, columns and relationships. We have also added some data to our tables and created a new user.
