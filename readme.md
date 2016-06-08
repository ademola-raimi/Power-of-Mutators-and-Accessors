# The power of Mutators and accessors in Laravel


This is a simple laravel project that contains the usage of mutators and accessors. Very straight forward and easy to apply.

###Getting started
<hr> 

Kindly follow the usage and installation guide. Once you have all the necessary file installed. Follow the following steps:

Go to your homepage, then you should see `Welcome to the Power of Mutators and accessors`. Then go to `/register` and register a user inputting the first_name and last_name field with a lowercase. Note that before doing this, please comment out the `setFirstNameAttribute and `setLastNameAttribute methods in the User Model.

Check your database and confirm that the data is all in lowercase.

Visiting `/fullname` will display the full name with the surname capitalize. `/lastname` will display the last name with first letter capitalize. `/firstname` will dispaly the first name with first letter capitalize. `/id` will display the surname.

After the following, then uncomment the `setFirstNameAttribute and `setLastNameAttribute methods in the User Model. Then register a user. It will be discovered that the first letter of the first name is capitalized and the surname is all capitalized even though the user entered a lowercase data. 

While the Mutators help format data before saving into the database, the Accessors does the opposite: It format it before presenting to the user.

You just discovered the power of Mutators and accessors. Start using it.

##Usage
<hr>

Before diving in, kindly make the following available on your system:

1. [Composer](https://getcomposer.org)
2. [Laravel] (https://laravel.com)
3. [Vagrant] (https://www.vagrantup.com) 
4. [Postgres](http://www.postgresql.org)

Clone the repository into your local environment

```bash
$ https://github.com/andela-araimi/Power-of-Mutators-and-Accessors.git
```

```bash
$ cd code
$ cd eloquent-mutator
```

Copy the .env file into your project (use the env.example template) and populate it with your environment data


You can follow the template for your .env
```bash
APP_ENV=local
APP_DEBUG=true
APP_KEY=
APP_URL=

DB_HOST=
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

```
To start the server:

If you are using vagrant, simply run

```bash
$ vagrant up
```
If not, simply run

```bash
$ php artisan serve
```

## Contributing
<hr>
Contributions are **welcome** and will be fully **credited**.

We accept contributions via Pull Requests on [Github](https://github.com/andela-araimi/Power-of-Mutators-and-Accessors).

## Credits

[Raimi Ademola](https://github.com/andela-araimi/Power-of-Mutators-and-Accessors)
