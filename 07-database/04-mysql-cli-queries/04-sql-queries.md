## SQL Queries

Once you have MySQL installed, you can connect to it using the MySQL shell. We will use this for now. I just want you to get familiar with SQL queries to create, read, update and delete data. We will be using PDO in our application, but we will also be passing in SQL queries. So it's important to know how to write them.

Open your terminal and run the following command to connect to the MySQL shell:

```bash
mysql -u root
```

If you are using Windows, you may need to run:

```bash
mysql -u root -p
```

This will connect you to the MySQL server as the root user. You will be prompted for your password. If you haven't set a password yet, then you can just press enter. Once you are connected, you can run SQL queries.

We will look at some basic queries here, but I have a MySQL cheat sheet that you can use as a reference. You can find it here: [MySQL Cheat Sheet](https://gist.github.com/bradtraversy/c831baaad44343cc945e76c2e30927b3)

To show the databases on your system:

```sql
SHOW DATABASES;
```

We will create a new database for a blog application. We are not going to build a blog, but we'll use this database as an example when we learn about PDO.

To create a new database:

```sql
CREATE DATABASE blog;
```

To use or switch to a database:

```sql
USE blog;
```

### Creating Tables

Create a table. Since this is for a blog, we probably need a table for posts:

```sql
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

Let me explain what's going on here. We are creating a table called `posts`. It has 4 columns. The first column is `id`. It is an integer and it will auto-increment. This means that every time we insert a new row, the id will be incremented by 1. It is also our `primary key`. This means that it will be unique and we can use it to identify a row.

The next column is `title`. It is a `variable character` type, which is string and we set a maximum length of 255 characters. It cannot be null.

The next column is `body`. It is a `text` type, which is a string with no maximum length. It cannot be null.

The last column is `created_at`. It is a `timestamp` type and it will default to the current timestamp. This means that if we don't specify a value for this column, it will automatically be set to the current timestamp.

In this case, if we were to build an application, we would only need to specify the `title` and the `body` when we create a new post. The `id` and `created_at` columns would be automatically set for us.

To show all of the tables:

```sql
SHOW TABLES;
```

You should see your `posts` table.

To show the columns in a table:

```sql
SHOW COLUMNS FROM posts;
```

### Inserting Data

To insert a new row into the table:

```sql
INSERT INTO posts (title, body) VALUES ('Post One', 'This is post one');
```

### Selecting Data

To select all of the rows from the table:

```sql
SELECT * FROM posts;
```

You should see all the rows in the table. We only have one row right now. Let's insert another one:

```sql
INSERT INTO posts (title, body) VALUES ('Post Two', 'This is post two');
```

Now if we run the select query again, we should see both rows.

### Updating Data

To update a row:

```sql
UPDATE posts SET body = 'This is the updated post' WHERE id = 2;
```

### Deleting Data

To delete a row:

```sql
DELETE FROM posts WHERE id = 2;
```

Now you should only see one row when you run the select query.

Let's add a few more posts for when we use this database later on. You can insert multiple rows at once:

```sql
INSERT INTO posts (title, body) VALUES ('Post Two', 'This is post two'), ('Post Three', 'This is post three'), ('Post Four', 'This is post four'), ('Post Five', 'This is post five');
```

Select all of the rows:

```sql
SELECT * FROM posts;
```

Notice that post 2 has an id of 3. This is because we deleted post 2. The id is auto-incrementing, so it will continue to increment even if we delete rows. This is something to be aware of.

### Dropping Tables

If you want to delete a table, you can use the `DROP TABLE` command. This will delete the table and all of the data in it. Be careful with this command. You can't undo it.

I am going to drop the table because O am going to show you how to re-create it using MySQL Workbench in the next lesson. You don't have to if you don't want to.

```sql
DROP TABLE posts;
```

### Deleting Databases

If you want to delete a database, you can use the `DROP DATABASE` command. This will delete the database and all of the tables in it. Be careful with this command. You can't undo it.

Again, I will re-create this, so I will delete the database:

```sql
DROP DATABASE blog;
```

### Close the MySQL Shell

To exit the MySQL shell, type `exit` and press enter.
