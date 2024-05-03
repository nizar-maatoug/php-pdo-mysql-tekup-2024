# Installing MySQL on Windows

If you are on Windows and you are using a suite like Laragon or XAMPP, then MySQL will already be installed. If you are not using a suite, then you can download and install MySQL from the [MySQL website](https://dev.mysql.com/downloads/mysql/).

Once you download the installer, you can run it and go through the installation process.

If you are using Laragon, you can open the shell by clicking on the "Terminal" button in the Laragon menu. You can connect to the MySQL server by running the following command:

```bash
mysql -u root
```

If you installed MySQL separately, then run the command from the command prompt. If it says that the command is not recognized, then you may need to add it to your PATH. You can find instructions on how to do that here: [How to Add MySQL to Windows Path](https://www.architectryan.com/2018/03/17/add-to-the-path-on-windows-10/)

In the next lesson, we will learn how to use the MySQL shell to create databases, create tables, and run queries.
