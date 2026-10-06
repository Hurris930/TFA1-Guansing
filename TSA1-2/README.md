# Tasks for Today Management System

Technical Summative Assessment 1-2 developed by **Hurris Guansing**, section **TC32**.

This CodeIgniter 4 application is an internal task-management portal for Guansing IT Solutions. It demonstrates MVC organization, database retrieval through CodeIgniter Models and Query Builder, PHP loops and conditions, escaped database output, and a responsive company interface.

## Technologies used

- CodeIgniter 4.7 and PHP 8.2
- MySQL/MariaDB
- HTML5, CSS3, and vanilla JavaScript
- XAMPP and Composer

## Required software

- XAMPP with Apache and MySQL
- PHP 8.2 or newer
- Composer
- A modern web browser

## Installation

1. Place the project at `D:\Utilities\XAMPP\Installer\htdocs\Guansing\TSA1-2`.
2. Open PowerShell in the project directory.
3. Run `composer install`.
4. Run `Copy-Item .env.example .env` if `.env` is not present.
5. Edit `.env` for the local computer. Never commit `.env` or a real password.

Safe local configuration example:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost/Guansing/TSA1-2/public/'
database.default.hostname = localhost
database.default.database = tsa1_2_guansing
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

## Database setup

The complete SQL export is `database/tsa1_2_guansing.sql`. It creates the exact required `tasks` and `users` tables, eight IT-company tasks across four dates, and exactly one demo user.

To import using phpMyAdmin, start Apache and MySQL, open `http://localhost/phpmyadmin`, select **Import**, and choose the SQL file.

Command-line alternative:

```powershell
Get-Content .\database\tsa1_2_guansing.sql | D:\Utilities\XAMPP\Installer\mysql\bin\mysql.exe -u root
```

If MySQL uses a password, add `-p` and enter it securely when prompted.

## Running the application

With XAMPP Apache and MySQL running, open:

`http://localhost/Guansing/TSA1-2/public/`

Alternatively, run `php spark serve` and open `http://localhost:8080/`. Temporarily use that URL as `app.baseURL` when running the development server.

## Required routes

| Route | Controller method | Purpose |
| --- | --- | --- |
| `/` | `Tasks::today` | Current Asia/Manila date tasks only |
| `/tasks` | `Tasks::index` | Every task ordered by task date ascending |
| `/profile` | `Users::profile` | Single Hurris Guansing demo user |
| `/about` | `Pages::about` | Static developer and activity information |

## Project structure

```text
TSA1-2/
|-- app/
|   |-- Config/Routes.php
|   |-- Controllers/Pages.php, Tasks.php, Users.php
|   |-- Models/TaskModel.php, UserModel.php
|   `-- Views/index.php and Views/assets/
|-- database/tsa1_2_guansing.sql
|-- public/assets/
|-- .env.example
`-- README.md
```

The CSS and JavaScript source copies under `app/Views/assets` match the browser-served copies under `public/assets`.

## Screenshots

- Welcome page: add screenshot here
- Task List page: add screenshot here
- Profile page: add screenshot here
- About page: add screenshot here

## Links

- GitHub repository: [TSA1-2 Repository](https://github.com/Hurris930/TFA1-Guansing)
- Hosted application: [TSA1-2 Site](https://guansing-tsa.infinityfree.me/)

## Developer

Hurris Guansing  
TC32

---

## CodeIgniter starter reference

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
