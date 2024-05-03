# Create Users & Privileges

Right now, we are using the `root` user to connect to our database without a password. Which is fine for development, but you never want to do this in production, so I will show you how to create a new user and set a password. I'll show you how to do this within both Workbench and the shell.

## MySQL Workbench

Go to the top menu and select `Server->Users and Privileges`. Click on the `Add Account` button. Give the user a name. I will call mine `brad`. For the Authentication Type, select `Standard`. For the password, enter a password.

Click on the `Administrative Roles` tab. Check the `DBA` option. This will give the user full access to the database. Click on the `Schema Privileges` tab. Select the `blog` schema and check the `ALL` option. This will give the user full access to the `blog` schema. Click on the `Apply` button to save the user. You should see a success message. Click on the `Apply` button again and then click on the `Finish` button. Now you should be able to connect with that user from your application later on.

We have setup our database, schema, tables, columns and relationships. We have also added some data to our tables and created a new user.

## MySQL Shell

Login to the shell with your new user to test it out:

```php
mysql -u brad -p
```

Enter the password and you should be let in.

Here are the commands to run:

#### Show Users

```sql
SELECT User, Host FROM mysql.user;
```

#### Create User
```sql
CREATE USER 'someuser'@'localhost' IDENTIFIED BY 'somepassword';
```

#### Grant Permissions
```sql
GRANT ALL PRIVILEGES ON * . * TO 'someuser'@'localhost';
FLUSH PRIVILEGES;
```

#### Show Grants
```sql
SHOW GRANTS FOR 'someuser'@'localhost';
```

#### Remove Grants
```sql
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'someuser'@'localhost';

```

#### Delete User

```sql
DROP USER 'someuser'@'localhost';
```

Now you have two ways of creating users and granting privileges.