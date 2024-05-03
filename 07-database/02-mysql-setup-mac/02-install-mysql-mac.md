# Installing MySQL on MacOS

If you are using MacOS, you can install MySQL using [Homebrew](https://brew.sh/). Homebrew is a package manager for MacOS. It allows you to install software from the command line. If you don't have Homebrew installed, then you can install it by running the following command in your terminal:

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"
```

Once you have Homebrew installed, you can install MySQL by running the following command:

```bash
brew install mysql
```

This will install MySQL on your system. You can start the MySQL server by running the following command:

```bash
brew services start mysql
```

You can stop and reset the MySQL server by running the following commands:

```bash
brew services stop mysql
brew services restart mysql
```

### Secure MySQL (optional)

It's recommended to secure your MySQL installation. Run the following command and follow the prompts:

```bash
mysql_secure_installation
```

This is where you set the password for the root user. You can also remove anonymous users, disallow remote root login, and remove the test database. You can leave the password blank if you want, but it's not recommended.

Now we can login to MySQL with the following command:

```bash
mysql -u root -p
```

You should now see a prompt that looks like this:

```bash
mysql>
```

We are not going to do anything in the shell in this lesson. We will do that in the next lesson. For now, you can exit the shell by running the following command:

```bash
exit
```
