# About Emoji &#128640; Calculator &#128425;

- &#128293; This is a simple calculator application based on emojis. &#128293;
- The operands are used according to the following emojis:
- &#128125; Addition
- &#128128; Subtraction
- &#128123; Multiplication
- &#128561; Division

# Setup Local Environment
  - You can either go with Manual Installation / Laragon(For Windows) / Docker(recommended) to setup local environment
  # Manual Installation (PHP, Composer, Apache/Nginx)
  - Required [PHP](https://www.php.net/downloads.php) version 7.3 or above 
  - Required [Composer](https://getcomposer.org/)
  - Use either Apache / Nginx to run php application
  - For [Apache](http://httpd.apache.org/)
  - For [Nginx](http://nginx.org/en/download.html)
  - Install the above manually on your local machine
  - Clone or download the application to your pc/ laptop
  - Open terminal/ command prompt and cd to the application root
  - Run `composer install`
  - Run `cp .env.example .env`
  - Run `php artisan key:generate`
  - Run `php artisan serve`
  - The application should be served in `127.0.0.1:8000` according to your pc's port availabilty
  # Laragon Installation (For windows)
  - For Windows user [Laragon](https://laragon.org/download/index.html) could be a good fit to run Laravel Application
  - Clone or download the application to your pc/ laptop inside the www folder inside laragon installed folder
  - Open terminal/ command prompt and cd to the application root
  - Run `composer install`
  - Run `cp .env.example .env`
  - Run `php artisan key:generate`
  - Run `php artisan serve`
  - The application should be served in `127.0.0.1:8000` according to your pc's port availabilty
  # For Docker Installation
  - Download and Install [Docker](https://docs.docker.com/get-docker/)
  - Clone or download the application to your pc/ laptop
  - Open terminal/ command prompt and cd to the application root
  - Run `docker-compose up -d --build`
  - Run `docker exec -it emoji-calculator-application bash`
  - Run `composer install`
  - Run `cp .env.example .env`
  - Run `php artisan key:generate`
  - Run `php artisan serve`
  - The application should be served in `localhost:8080` according to your pc's port availabilty
  
## Application Screenshot

![Application View](./public/imgs/emoji_calculator.png)

## [Live URL](https://codewithrsk.com/)
