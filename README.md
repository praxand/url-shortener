<h3 align="center">URL Shortener</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/praxand/url-shortener.svg)](https://github.com/praxand/url-shortener/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/praxand/url-shortener.svg)](https://github.com/praxand/url-shortener/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

## 📝 Table of Contents

-   [About](#about)
-   [Getting Started](#getting_started)
-   [Usage](#usage)
-   [Built Using](#built_using)
-   [Authors](#authors)

## 🧐 About <a name="about"></a>

The Laravel URL Shortener is a powerful and easy-to-use web application designed to simplify the process of shortening long URLs into concise and shareable links. Built on the Laravel framework, this URL shortener provides a robust and secure solution for generating and managing short links. With its user-friendly interface and efficient backend, users can quickly create shortened URLs for their long and unwieldy web addresses.

## 🏁 Getting Started <a name="getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them.

install composer dependencies
```
composer install
```

install node dependencies
```
npm install
```

**skip this step if you already have imagick installed on your operating system**

install imagick (macOS)
```
brew install imagemagick
brew install pkg-config

pecl install imagick
```

install imagick (windows)

https://imagemagick.org/script/download.php#windows

install imagick (linux)
```
sudo apt install php-imagick
```

### Installing

A step by step series of examples that tell you how to get a development env running.

Create an env
```
cp .env.example .env
```

Generate a project key
```
php artisan key:generate
```

Run the development server
```
npm run dev
```

If you are developing on macOS I assume you are using [Laravel Valet](https://laravel.com/docs/10.x/valet) so you can just go to http://url-shortener.test

If not use the following command
```
php artisan serve
```

## 🎈 Usage <a name="usage"></a>

Just create an account and start shortening your URLs now and simplify link sharing!

## ⛏️ Built Using <a name = "built_using"></a>

-   [Laravel](https://laravel.com/) - Web Framework
-   [MySQL](https://www.mysql.com/) - Database

## ✍️ Authors <a name= "authors"></a>

-   [@praxand](https://github.com/praxand) - Idea & Initial work

See also the list of [contributors](https://github.com/praxand/url-shortener/contributors) who participated in this project.
